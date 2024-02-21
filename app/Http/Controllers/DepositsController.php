<?php

namespace App\Http\Controllers;
use File;
use App\Models\Deposits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Telegram\Bot\Api;
class DepositsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \Log::info($request->all());
        $validator = validator($request->all(), [
            'telegram_username' => 'required|string',
            'telegram_id' => 'required',
            'username' => 'required',
            'currency' => 'required',
            'slip_image' => 'required',
        ]);
        $path=$this->downloadFileFromUrl($request->slip_image,'public','deposits');
        // Check if the validation fails
        if ($validator->fails()) {
            // Return validation errors in JSON format
            return response()->json(['errors' => $validator->errors(),'code'=>422], 422);
        }
// Download the image and store it in the storage/app/public directory

        $data = $request->only('telegram_username', 'telegram_id','username', 'currency');
        $data['slip_image'] = $path;
        Deposits::create($data);

        return response()->json(['message' => 'Data has been successfully processed','code'=>200], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function show(Deposits $deposits)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function edit(Deposits $deposits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Deposits $deposits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Deposits  $deposits
     * @return \Illuminate\Http\Response
     */
    public function destroy(Deposits $deposits)
    {
        //
    }

    private function makeDirectory($path){
        // Check if the directory already exists.
        if (!File::isDirectory($path)) {

            // Create the directory.
            File::makeDirectory($path);
        }
    }

    private function downloadFileFromUrl($url, $storageName, $subfolder = '') {

        //To add subdirectory to the filename
        $addSubFolder = '';

        if($subfolder){
            //Check if the directory exists
            $path =  Storage::disk( $storageName)->path($subfolder);
            $this->makeDirectory($path);
            $addSubFolder = $subfolder.'/';
        }
        // Get the current date and time.
        $dateTime = now();

        // Generate a unique filename.
        $filename = $addSubFolder.$dateTime->format('YmdHis') . '_' . basename($url);

        // Download the file from the URL.
        Storage::disk($storageName)->put( $filename, file_get_contents($url));

        // Get the file url to download
        return Storage::disk($storageName)->url($filename);
    }


    public function approve(Request $request,$id){
//        dd($id);


        $client = Deposits::where('id',$id)->first();

        if($client){
            $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

            $chatId = $client->telegram_id; // Replace with the user's chat ID

// Message text
            $message = 'Congratulations your deposit is successful';

// Inline keyboard markup
            $keyboard = [
                [
                    ['text' => 'Back', 'callback_data' => 'old'],
                ]
            ];

// Encode the keyboard as JSON
            $replyMarkup = json_encode([
                'inline_keyboard' => $keyboard
            ]);

// Send the message with inline keyboard
            try {
                $response = $telegram->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $message,
                    'reply_markup' => $replyMarkup
                ]);

                if ($response->getMessageId()) {
                    $client->update(['status'=>1,'handled_by'=>'Approved by '.auth()->user()->name]);
                    return back()->with('success', 'User Notified! Message sent successfully');
                } else {

                    return back()->with('error', $response->getDescription());
                }
            }catch (\Exception $e){
                return back()->with('error', $e->getMessage());
            }
        }else{
            return back()->with('error', 'Client not found!');
        }

        // Check if the message was sent successfully


    }
    public function reject(Request $request,$id){
//        dd($id);


        $client = Deposits::where('id',$id)->first();

        if($client){
            $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

            $chatId = $client->telegram_id; // Replace with the user's chat ID

// Message text
            $message = 'Sorry, Looks like we could not verify the entered details, please re-confirm and submit the details again';

// Inline keyboard markup
            $keyboard = [
                [
                    ['text' => 'Try Again', 'callback_data' => 'deposit'],

                ],
                [['text' => 'Contact Support', 'url' => 'https://wa.me/+9609910247'],]
            ];

// Encode the keyboard as JSON
            $replyMarkup = json_encode([
                'inline_keyboard' => $keyboard
            ]);

// Send the message with inline keyboard
            try {
                $response = $telegram->sendMessage([
                    'chat_id' => $chatId,
                    'text' => $message,
                    'reply_markup' => $replyMarkup
                ]);

                if ($response->getMessageId()) {
                    $client->update(['handled_by'=>'Rejected by '.auth()->user()->name]);
                    return back()->with('success', 'User Notified! Message sent successfully');
                } else {

                    return back()->with('error', $response->getDescription());
                }
            }catch (\Exception $e){
                return back()->with('error', $e->getMessage());
            }
        }else{
            return back()->with('error', 'Client not found!');
        }

        // Check if the message was sent successfully


    }

}

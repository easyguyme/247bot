<?php

namespace App\Http\Controllers;

use App\Models\Recovery;
use Illuminate\Http\Request;
use Telegram\Bot\Api;

class RecoveryController extends Controller
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

        ]);

        // Check if the validation fails
        if ($validator->fails()) {
            // Return validation errors in JSON format
            return response()->json(['errors' => $validator->errors(),'code'=>422], 422);
        }
        $data = $request->only('telegram_username', 'telegram_id','username');
        Recovery::create($data);

        return response()->json(['message' => 'Data has been successfully processed','code'=>200], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recovery  $recovery
     * @return \Illuminate\Http\Response
     */
    public function show(Recovery $recovery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recovery  $recovery
     * @return \Illuminate\Http\Response
     */
    public function edit(Recovery $recovery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recovery  $recovery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recovery $recovery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recovery  $recovery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recovery $recovery)
    {
        //
    }

    public function approve(Request $request,$id){
//        dd($id);


        $client = Recovery::where('id',$id)->first();

        if($client){
            $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

            $chatId = $client->telegram_id; // Replace with the user's chat ID

// Message text
            $message = 'Congratulations your recovery request is successful';

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
                    $client->update(['status'=>1,'handled_by'=>'Approved By '.auth()->user()->name]);
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


        $client = Recovery::where('id',$id)->first();

        if($client){
            $telegram = new Api(env('TELEGRAM_BOT_TOKEN'));

            $chatId = $client->telegram_id; // Replace with the user's chat ID

// Message text
            $message = 'Sorry, Looks like we could not verify the entered details, please re-confirm and submit the details again';

// Inline keyboard markup
            $keyboard = [
                [
                    ['text' => 'Try Again', 'callback_data' => 'with'],
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
                    $client->update(['handled_by'=>'Rejected By '.auth()->user()->name]);
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

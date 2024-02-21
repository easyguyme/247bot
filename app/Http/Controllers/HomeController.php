<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Deposits;
use App\Models\Recovery;
use App\Models\Withdrawals;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $customers = Client::latest()->get();
        $deposits = Deposits::latest()->get();
        $withdrawals = Withdrawals::latest()->get();
        $latest_customers = Client::latest()->take(4)->get();
        $recoveries=Recovery::latest()->get();
        return view('pages.dashboard',compact('customers','latest_customers','deposits','withdrawals','recoveries'));
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');

        return view('clear-cache');
    }

    public function customers(){
        $customers = Client::latest()->get();
        return view('dash.customers',compact('customers'));
    }
    public function deposits(){
        $deposits = Deposits::latest()->get();
        return view('dash.deposits',compact('deposits'));
    }

    public function withdrawals(){
        $withdrawals = Withdrawals::latest()->get();
        return view('dash.withdrawals',compact('withdrawals'));
    }

    public function recoveries(){
        $recoveries=Recovery::latest()->get();
        return view('dash.recovery',compact('recoveries'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        //$balance = DB::table('transactions')->where('user_id', auth()->user()->id)->sum('amount');
        $balance = Transaction::where('user_id', auth()->user()->id)->sum('amount');
        return view('home')->with('transactions', $user->transactions)->with('total_amount', $balance);
    }
}

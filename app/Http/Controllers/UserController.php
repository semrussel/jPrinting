<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
    }

    public function Profile()
    {
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{

            $quote = DB::table('request')->where('email',Auth::user()->email)->get();
            $orders = DB::table('orders')->where('order_by',Auth::user()->id)->get();
            
            //return $quote;

            return view('profile')->with('orders',$orders)->with('quote',$quote);
        }
    }

    public function ProfileOrder($id)
    {
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
                $order = DB::table('orders')->where('id',$id)->get();

                return view('profile-order')->with('order',$order);
        }
    }

    public function profileRequest($id)
    {
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
                $quote = DB::table('request')->where('id',$id)->get();

                return view('profile-request')->with('quote',$quote);
        }
    }
}

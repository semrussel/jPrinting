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

            $orders = DB::table('orders')->where('order_by',Auth::user()->id)->get();

            return view('profile')->with('orders',$orders);
        }
    }

    public function ProfileOrder($id)
    {
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{

            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $order = DB::table('orders')->where('id',$id)->get();

                return view('profile-order')->with('order',$order);
            }
        }
    }

    public function profileRequest()
    {
        // if (Auth::guest()) {
        //     return redirect('/login?check=1');
        // }else{

        //     if (Auth::user()->type == 'client') {
        //         return redirect('/');
        //     }else{
        //         $order = DB::table('orders')->where('id',$id)->get();

                return view('profile-request');
        //     }
        // }
    }
}

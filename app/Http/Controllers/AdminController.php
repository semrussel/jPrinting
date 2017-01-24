<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;

class AdminController extends Controller
{
    public function index(){
    	// return view('services-main');
    	if (Auth::guest()) {
    		return view('admin.login');
    	}else{
    		if (Auth::user()->type == 'client') {
    			return redirect('/');
    		}else{
    			return redirect('/admin-dash');
    		}

    	}


    	
    }

    public function login(Request $request){
    	// return view('services-main');
    	 if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
    	 	if (Auth::user()->type == 'client') {
    	 		Auth::logout();
    	 		return redirect('/home');
    	 	}else{
    	 		return redirect('/admin-dash');
    	 	}
    	 }else{
    	 	return view('admin.login')->with('error','Invalid Email/Password');
    	 }


    	
    }

    public function adminDash(){
    	if (Auth::guest()) {
    		return redirect('/');
    	}else{
    		if (Auth::user()->type == 'client') {
    			return redirect('/');
    		}else{
    			return view('admin.dashboard');
    		}
    	}
    	
    }

    public function adminOrders(){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $orders = DB::table('orders')->orderBy('updated_at','desc')->get();

                //return $orders;

                return view('admin.order')->with('orders',$orders);
            }
        }
        
    }

    public function adminOrdersView($id){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $order = DB::table('orders')->where('id',$id)->get();

                //return $order;

                return view('admin.order-view')->with('order',$order);
            }
        }
        
    }

    public function adminRequestQuotes(){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $requests = DB::table('request')->orderBy('updated_at','desc')->get();

                return view('admin.requestquote')->with('requests',$requests);
            }
        }
        
    }

    public function adminRequestsView($id){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $request = DB::table('request')->where('id',$id)->get();

                // return $orders;

                return view('admin.request-view')->with('request',$request);
            }
        }
        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;


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
    	 	return view('admin.dashboard')->with('error','Invalid Email/Password');
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
                return view('admin.order');
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
                return view('admin.requestquote');
            }
        }
        
    }

}

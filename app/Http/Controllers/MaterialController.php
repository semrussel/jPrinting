<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;

class MaterialController extends Controller
{
    public function index(){
    	// return view('services-main');
    	if (Auth::guest()) {
    		return view('admin.login');
    	}else{
    		if (Auth::user()->type == 'client') {
    			return redirect('/');
    		}else{
    			return redirect('/admin.materials');
    		}

    	}


    	
    }

}

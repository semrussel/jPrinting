<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Carbon;
use DB;
use App\RequestQuote;


class OrderController extends Controller
{


    public function create(Request $request){
        
    	return $request->input('address');
    }


}

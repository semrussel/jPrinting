<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;


class QuoteController extends Controller
{
    public function index(){
    	// return view('services-main');
    	return view('request-quote');
    }

}

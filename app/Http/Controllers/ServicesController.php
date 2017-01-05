<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;


class ServicesController extends Controller
{
    public function index(){
    	// return view('services-main');
    	return view('services-main');
    }

    public function seeTshirt(){
    	return view('services.tshirt');
    }

    public function seeLgforTarpaulin(){
    	return view('services.lgfor-tarpaulin');
    }

}

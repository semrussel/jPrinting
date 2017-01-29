<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;

class ReportController extends Controller
{
    public function index(){
    	
    }

    public function income() {
        return view('admin.rep-income');
    }

    public function cancel() {
        return view('admin.rep-cancel');
    }

    

}

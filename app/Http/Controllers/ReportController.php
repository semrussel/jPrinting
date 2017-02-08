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

    	$orders = DB::table('orders')->get();
    	$totalIncome = 0 ;
    	for ($i=0; $i < count($orders); $i++) { 
    		$totalIncome += $orders[$i]->price;
    	}

    	for ($i=1; $i <= 12; $i++) { 
    		$months[$i] = DB::table('orders')->whereMonth('created_at', '=', $i)->get();
    	}
    	

        return view('admin.rep-income')->with('totalIncome',$totalIncome)->with('orders',$orders)->with('months',$months);
    }

    public function cancel() {
    	$cancelOrders = DB::table('orders')->where('status','Canceled')->get();

        return view('admin.rep-cancel');
    }

    

}

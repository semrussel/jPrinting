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

    	$morders = DB::table('orders')->whereYear('created_at', '=', date('Y'))->get();
        $orders = DB::table('orders')->get();
    	$mtotalIncome = 0 ;
    	for ($i=0; $i < count($morders); $i++) { 
    		$mtotalIncome += $morders[$i]->price;
    	}

        $totalIncome = 0 ;
        for ($i=0; $i < count($orders); $i++) { 
            $totalIncome += $orders[$i]->price;
        }

    	$jan = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 1)->whereYear('created_at', '=', date('Y'))->get();
        $feb = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 2)->whereYear('created_at', '=', date('Y'))->get();
        $mar = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 3)->whereYear('created_at', '=', date('Y'))->get();
        $apr = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 4)->whereYear('created_at', '=', date('Y'))->get();
        $may = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 5)->whereYear('created_at', '=', date('Y'))->get();
        $jun = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 6)->whereYear('created_at', '=', date('Y'))->get();
        $jul = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 7)->whereYear('created_at', '=', date('Y'))->get();
        $aug = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 8)->whereYear('created_at', '=', date('Y'))->get();
        $sep = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 9)->whereYear('created_at', '=', date('Y'))->get();
        $oct = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 10)->whereYear('created_at', '=', date('Y'))->get();
        $nov = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 11)->whereYear('created_at', '=', date('Y'))->get();
        $dec = DB::table('orders')->where('status','!=' , 'Canceled')->whereMonth('created_at', '=', 12)->whereYear('created_at', '=', date('Y'))->get();

        // return $jan;
        return view('admin.rep-income')->with('mtotalIncome',$mtotalIncome)->with('totalIncome',$totalIncome)->with('orders',$orders)->with('jan',$jan)->with('feb',$feb)->with('mar',$mar)->with('apr',$apr)->with('may',$may)->with('jun',$jun)->with('jul',$jul)->with('aug',$aug)->with('sep',$sep)->with('oct',$oct)->with('nov',$nov)->with('dec',$dec);
    }

    public function Canceled() {
    	$CanceledOrders = DB::table('orders')->where('status','Canceleded')->get();

        return view('admin.rep-Canceled')->with('CanceledOrders',$CanceledOrders);
    }

    

}

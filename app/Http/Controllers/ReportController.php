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

    public function comparison() {
       
       $main = DB::table('main_prod')->where('is_subcat',0)->get();
       $sub = DB::table('sub_prod')->get();

       for ($i=0; $i < count($main); $i++) {
            $wew = $main[$i]->name;
            for ($j=1; $j <= 12; $j++) { 
                $mproducts[$wew][$j] = DB::table('orders')->where('product',$main[$i]->name)->whereMonth('created_at', '=', $j)->sum('price');
            }
           
       }

       for ($i=0; $i < count($sub); $i++) {
            $wew = $sub[$i]->name;
            for ($j=1; $j <= 12; $j++) { 
                $sproducts[$wew][$j] = DB::table('orders')->where('product',$sub[$i]->name)->whereMonth('created_at', '=', $j)->sum('price');
            }
           
       }
       
       $monnam = array("Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec");
                            $monfirst=true;
                            for ($i=1; $i <= 12 ; $i++) {

                                $wew = $monnam[$i-1];
                                for ($j=0; $j < count($sub); $j++) { 
                                    $product = $sub[$j]->name;
                                    $monsub[$wew][$product] = $sproducts[$product][$i];
                                }
                                
                            }
        // return $monsub;


        return view('admin.rep-income-pie')->with('main',$main)->with('sub',$sub)->with('mproducts',$mproducts)->with('sproducts',$sproducts);
    }    

    public function cancel() {
    	$cancelOrders = DB::table('orders')->where('status','Cancelled')->get();

        return view('admin.rep-cancel')->with('cancelOrders',$cancelOrders);
    }

    public function sendtest() {
        return view('emails.send');
    }  
    

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Carbon;
use DB;
use App\RequestQuote;
use Mail;
use Auth;


class QuoteController extends Controller
{
    public function index(){
    	return view('request-quote');
    }

    public function create(Request $request){

    	$requestQuote = new RequestQuote();
    	$requestQuote->fullname = $request->input('fullname');
    	$requestQuote->email = $request->input('email');
    	$requestQuote->title = $request->input('title');
    	$requestQuote->type = $request->input('optradio');
        if ($request->input('optradio') == 'custom') {
            $requestQuote->product = $request->input('product1');
        }else{
            $requestQuote->product = $request->input('product2');
        }
    	
    	$requestQuote->size = $request->input('size');
    	$requestQuote->quantity = $request->input('quantity');
    	$requestQuote->paper_stock = $request->input('pns');
    	$requestQuote->side_pages = $request->input('snp');
    	$requestQuote->lamination = $request->input('lamination');
    	$requestQuote->details = $request->input('details');
        $requestQuote->cpNum = '63'.$request->input('cpNum');
        if (isset($request->attachment)) {
            $imageName = time().'.'.$request->attachment->getClientOriginalExtension();
            $request->attachment->move(public_path('images'), $imageName);
            $requestQuote->attachment = url('images').'/'.$imageName;
        }else{
            $requestQuote->attachment = $request->input('attachment');
        }
        $requestQuote->price = 0;
        $requestQuote->status = 'Waiting for Price';
    	$requestQuote->save();
        
    	return 'Request sent!';
    }

    public function sendQPrice(Request $request){
        $requestQ = DB::table('request')->where('id', $request->input('id'))->get();
        $users = DB::table('users')->where('email',$requestQ[0]->email)->get();
        DB::table('request')->where('id', $request->input('id'))->update(array('price' => $request->input('price'), 'status' => 'Quote Received'));
        $email = $requestQ[0]->email;
        
        $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => $users[0]->cpNum,
        "shortcode" => "2929025642",
        "message_id" => $requestQ[0]->id.strtotime(date('Y-m-d')).rand(100,999).rand(1000,9999).rand(10000,99999),
        "message" => urlencode("Hi We are from Jimbes Printing! Hi we already sent the quotation you ask us, Please check your account!"),
        "client_id" => "37a3dc6152c57afbe664c02a640f1226ef85d5ab33409866cfab8c7c160bdcac",
        "secret_key" => "7ecf073a12a56781a070fa4a25da3eaf5f24b5a21014117516c400a256c9ff60"
        );

        $query_string = "";
        foreach($arr_post_body as $key => $frow)
        {
            $query_string .= '&'.$key.'='.$frow;
        }

        $URL = "https://post.chikka.com/smsapi/request";

        $curl_handler = curl_init();
        curl_setopt($curl_handler, CURLOPT_URL, $URL);
        curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
        curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
        curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl_handler);
        curl_close($curl_handler);

        return redirect('/admin-request-quotes?success=1');
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Carbon;
use DB;
use App\RequestQuote;


class QuoteController extends Controller
{
    public function index(){
    	// return view('services-main');
    	return view('request-quote');
    }

    public function create(Request $request){

    	$requestQuote = new RequestQuote();
    	$requestQuote->fullname = $request->input('fullname');
    	$requestQuote->email = $request->input('email');
    	$requestQuote->title = $request->input('title');
    	$requestQuote->type = $request->input('optradio');
    	$requestQuote->product = $request->input('product');
    	$requestQuote->size = $request->input('size');
    	$requestQuote->quantity = $request->input('quantity');
    	$requestQuote->paper_stock = $request->input('pns');
    	$requestQuote->side_pages = $request->input('snp');
    	$requestQuote->lamination = $request->input('lamination');
    	$requestQuote->details = $request->input('details');
    	$requestQuote->attachment = $request->input('attachment');
        $requestQuote->price = 0;
        $requestQuote->status = 'Waiting for Price';
    	$requestQuote->save();
        
    	return 'Request sent!';
    }

    public function sendQPrice(Request $request){
        
        DB::table('request')->where('id', $request->input('id'))->update(array('price' => $request->input('price'), 'status' => 'Quote Received'));

        return redirect('/admin-request-quotes?success=1');
    }


}

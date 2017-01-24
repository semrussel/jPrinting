<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Carbon;
use DB;
use Auth;
use App\Order;


class OrderController extends Controller
{


    public function create(Request $request){
        
        $requestQuote = new Order();
        $requestQuote->product = $request->input('product');
        $requestQuote->price = 0;
        $requestQuote->order_by = Auth::user()->id;
        $requestQuote->bank = 'NONE';
        $requestQuote->transaction_number = 'NONE';
        $requestQuote->design = $request->input('design');
        $requestQuote->file = $request->input('pic');
        $requestQuote->designType = $request->input('designType');
        $requestQuote->size = $request->input('size');
        $requestQuote->quantity = $request->input('quantity');
        $requestQuote->address = $request->input('address');
        $requestQuote->paperType = $request->input('paperType');
        $requestQuote->lamination = $request->input('lamination');
        $requestQuote->description = $request->input('description');
        $requestQuote->color = $request->input('color');
        $requestQuote->perforation = $request->input('perforation');
        $requestQuote->corner = $request->input('corner');
        $requestQuote->substrate = $request->input('substrate');
        $requestQuote->colorPly = $request->input('colorPly');
        $requestQuote->status = 'Validating';
        $requestQuote->save();

    	return redirect('/profile?success=1');
    }

    public function sendPrice(Request $request){
        
        DB::table('orders')->where('id', $request->input('id'))->update(array('price' => $request->input('price'), 'status' => 'Waiting for Payment'));

        return 'done';
    }


}

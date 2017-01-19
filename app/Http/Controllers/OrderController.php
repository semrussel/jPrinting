<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Carbon;
use DB;
use App\Order;


class OrderController extends Controller
{


    public function create(Request $request){
        
        $requestQuote = new Order();
        $requestQuote->product = $request->input('product');
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

    	return 'done';
    }


}

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
        $requestQuote->price = $request->input('estimated_price');
        $requestQuote->order_by = Auth::user()->id;
        $requestQuote->bank = 'NONE';
        $requestQuote->transaction_number = 'NONE';
        $requestQuote->design = $request->input('design');
        if (isset($request->pic)) {
            $imageName = time().'.'.$request->pic->getClientOriginalExtension();
            $request->pic->move(public_path('images'), $imageName);
            $requestQuote->file = url('images').'/'.$imageName;
        }else{
            $requestQuote->file = $request->input('pic');
        }
        
        $requestQuote->designType = $request->input('designType');
        $requestQuote->size = $request->input('size');
        $requestQuote->paymentType = $request->input('payment');
        $requestQuote->quantity = $request->input('quantity');
        $requestQuote->address = $request->input('address');
        $requestQuote->paperType = $request->input('paper');
        $requestQuote->lamination = $request->input('lamination');
        $requestQuote->description = $request->input('description');
        $requestQuote->color = $request->input('color');
        $requestQuote->perforation = $request->input('perforation');
        $requestQuote->corner = $request->input('corner');
        $requestQuote->substrate = $request->input('substrate');
        $requestQuote->colorPly = $request->input('colorPly');
        $requestQuote->status = 'Validating Order';
        $requestQuote->save();

    	return redirect('/profile?success=1');
    }

    public function sendPrice(Request $request){
        
        $orders = DB::table('orders')->where('id',$request->input('id'))->get();

        $users = DB::table('users')->where('id',$orders[0]->order_by)->get();

        DB::table('orders')->where('id', $request->input('id'))->update(array('price' => $request->input('price'), 'status' => 'Waiting for Payment','expected_delivery' => $request->input('date')));
        
        $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => $users[0]->cpNum,
        "shortcode" => "2929025642",
        "message_id" => $orders[0]->id.strtotime(date('n')).rand(100,999).rand(1000,9999).rand(10000,99999),
        "message" => urlencode("Hi We are from Jimbes Printing! Kindly check your account we already sent the price for your order!"),
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

        return redirect('/admin-orders?success=1');
    }

    public function cancel(Request $request){
        
        DB::table('orders')->where('id', $request->input('id'))->update(array('status' => 'Cancelled'));

        return redirect('/profile?cancel=1');
    }

    public function sendTrans(Request $request){

        DB::table('orders')->where('id', $request->input('id'))->update(array('bank' => $request->input('bank'), 'transaction_number' => $request->input('transaction'), 'status' => 'Validating Payment'));

        return redirect('/profile?pay=1');
    }

    public function confirm(Request $request){
        
        $orders = DB::table('orders')->where('id',$request->input('id'))->get();

        $users = DB::table('users')->where('id',$orders[0]->order_by)->get();

        DB::table('orders')->where('id', $request->input('id'))->update(array('status' => 'Processing the Product'));

        $exp_date = strtotime($order[0]->expected_delivery);
        $exp_date = strtotime('+3 day',$exp_date);

        $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => $users[0]->cpNum,
        "shortcode" => "2929025642",
        "message_id" => $orders[0]->id.strtotime(date('n')).rand(100,999).rand(1000,9999).rand(10000,99999),
        "message" => urlencode("Hi We are from Jimbes Printing! We already validate your payment, we are now processing your order expect the product to be delivered during this days ".$orders[0]->expected_delivery.'to '.$exp_date),
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

        $main = DB::table('main_prod')->where('name',ucwords($orders[0]->product))->get();
        $sub = DB::table('sub_prod')->where('name',ucwords($orders[0]->product))->get();
        
        if (count($main) != 0) {
            $update = DB::table('materials')->join('pivot_materialprod','pivot_materialprod.material_id', '=', 'materials.id')->where('pivot_materialprod.service_id',$main[0]->id)->where('pivot_materialprod.is_main',1)->get();
        }else{
            $update = DB::table('materials')->join('pivot_materialprod','pivot_materialprod.material_id', '=', 'materials.id')->where('pivot_materialprod.service_id',$sub[0]->id)->where('pivot_materialprod.is_main',0)->get();
        }
       
       for ($i=0; $i < count($update); $i++) {
            $value = $update[$i]->quantity - $orders[0]->quantity;
            DB::table('materials')->where('id', $update[$i]->material_id)->update(array('quantity' => $value));
       }

        return redirect('/admin-orders?pay=1');
    }


    public function process(Request $request){
        
        $order = DB::table('orders')->where('id',$request->input('id'))->get();


        DB::table('orders')->where('id', $request->input('id'))->update(array('status' => 'Ready for Delivery'));

        return redirect('/admin-orders?process=1');
    }

    public function deliver(Request $request){
        
        $orders = DB::table('orders')->where('id',$request->input('id'))->get();
        $users = DB::table('users')->where('id',$orders[0]->order_by)->get();

        $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => $users[0]->cpNum,
        "shortcode" => "2929025642",
        "message_id" => $orders[0]->id.strtotime(date('n')).rand(100,999).rand(1000,9999).rand(10000,99999),
        "message" => urlencode("Hi We are from Jimbes Printing! We already Delivered your order! Thank you for patrionazing Jimbes Printing!"),
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

        DB::table('orders')->where('id', $request->input('id'))->update(array('status' => 'Delivered'));

        return redirect('/admin-orders?deliver=1');
    }

    public function changestat() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                return view('admin.order-stat');
            }
        }
    }


}

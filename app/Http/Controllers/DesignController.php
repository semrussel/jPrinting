<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;
use App\Design;

class DesignController extends Controller
{
    public function index(){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $designs = DB::table('designs')->get();

                return view('admin.design')->with('designs',$designs);
            }
        }
    }

    public function add(){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $mainprod = DB::table('main_prod')->where('is_subcat', '0')->get();
                $subprod = DB::table('sub_prod')->get();

                return view('admin.design-add')->with('mainprod',$mainprod)->with('subprod',$subprod);
            }
        }
    }

    public function create(Request $request){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $design = new Design();
                $design->is_main = $request->input('has');
                if ($request->input('has') == 1) {
                    $design->service_id = $request->input('main-prod');
                }else{
                    $design->service_id = $request->input('sub-prod');
                }
                
                $imageName = time().'.'.$request->pic->getClientOriginalExtension();
                $request->pic->move(public_path('images'), $imageName);
                $design->url = url('images').'/'.$imageName;
                $design->save();

                return "DONE!";

            }
        }
    }

}

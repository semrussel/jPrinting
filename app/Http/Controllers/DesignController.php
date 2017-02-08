<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;
use App\Material;
use App\PivotMaterialProd;

class DesignController extends Controller
{
    public function index(){
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                // $materials = DB::table('materials')->get();

                return view('admin.design');
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

}

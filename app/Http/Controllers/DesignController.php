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

}

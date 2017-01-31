<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;

class ProductsController extends Controller
{
    public function index(){
    }

    public function mainproducts() {
        return view('admin.pro-mainproducts');
    }

    public function mainproductsadd() {
        return view('admin.pro-mainproducts-add');
    }

    public function subproducts() {
        return view('admin.pro-subproducts');
    }

    public function subproductsadd() {
        return view('admin.pro-subproducts-add');
    }

    public function design() {
        return view('admin.pro-design');
    }

    public function materials() {
        return view('admin.pro-materials');
    }


}

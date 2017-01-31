<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;

class InventoryController extends Controller
{
    public function index(){
    }

    public function inventory() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                return view('admin.pro-materials');
            }
        }
    }

    public function inventoryadd() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                return view('admin.pro-materials-add');
            }
        }
    }

    public function inventoryedit() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                return view('admin.pro-materials-edit');
            }
        }
    }

}

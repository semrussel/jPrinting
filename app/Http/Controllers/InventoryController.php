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
        return view('admin.Inventory');    	
    }

}

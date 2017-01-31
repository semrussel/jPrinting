<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;
use App\Material;

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
                $materials = DB::table('materials')->get();

                return view('admin.pro-materials')->with('materials',$materials);
            }
        }
    }

    public function create(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $material = new Material();
                $material->name = $request->input('name');
                $material->reference_num = $request->input('refno');
                $material->quantity = $request->input('quantity');
                $material->save();

                return redirect('/admin-inventory?success=1');
            }
        }
    }

    public function delete(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                DB::table('materials')->where('id', $request->input('id'))->delete();

                return redirect('/admin-inventory?success=2');
            }
        }
    }

    public function edit(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                DB::table('materials')->where('id', $request->input('id'))->update(array('name' => $request->input('name'), 'reference_num' => $request->input('refno'), 'quantity' => $request->input('quantity') ));

                return redirect('/admin-inventory?success=3');
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

    public function inventoryedit($id) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $material = DB::table('materials')->where('id', $id)->get();
                return view('admin.pro-materials-edit')->with('material',$material[0]);
            }
        }
    }

}

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

                for ($i=0; $i < $request->input('name'); $i++) { 
                    # code...
                }

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

    public function inventorytag($id) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                return view('admin.pro-materials-tag')->with('id',$id);
            }
        }
    }

    public function createTag(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                if ($request->input('has') ==  1) {
                    foreach ($request->input('mainproInput') as $main) {
                        $m = DB::table('main_prod')->where('name',$main)->get();
                        $pivot = new PivotMaterialProd();
                        $pivot->material_id = $request->input('id');
                        $pivot->service_id = $m[0]->id;
                        $pivot->is_main = 1;
                        $pivot->save();
                    }
                }else{
                    foreach ($request->input('subproInput') as $main) {
                        $m = DB::table('sub_prod')->where('name',$main)->get();
                        $pivot = new PivotMaterialProd();
                        $pivot->material_id = $request->input('id');
                        $pivot->service_id = $m[0]->id;
                        $pivot->is_main = 0;
                        $pivot->save();
                    }
                }

                return redirect('/admin-inventory?success=4');
            }
        }
    }

    public function productsauto() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $mpro = DB::table('main_prod')->where('is_subcat','0')->get();
                $spro = DB::table('sub_prod')->get();

                return [
                    collect($mpro)->map(function($mpro) { return ['name' => $mpro->name]; }),
                    collect($spro)->map(function($spro) { return ['name' => $spro->name]; })
                ];
            }
        }
        

        
    }

}

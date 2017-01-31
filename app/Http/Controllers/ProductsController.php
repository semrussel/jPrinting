<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;
use App\MainProd;

class ProductsController extends Controller
{
    public function index(){
    }

    public function mainproducts() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $products = DB::table('main_prod')->get();

                return view('admin.pro-mainproducts')->with('products',$products);
            }
        }

        
    }

    public function createMain(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $main = new MainProd();
                $main->name = $request->input('name');
                $main->is_subcat = $request->input('has');
                $main->description = $request->input('description');
                $main->description = $request->input('description');
                if (isset($request->pic)) {
                    $imageName = time().'.'.$request->pic->getClientOriginalExtension();
                    $request->pic->move(public_path('images'), $imageName);
                    $main->logo = url('images').'/'.$imageName;
                }else{
                    $main->logo = $request->input('pic');
                }

                for ($i=0; $i < count($request->input('input')); $i++) { 
                    if ($request->input('input')[$i] == 'Paper Type') {
                        $main->is_paperType = 1;
                    }else if ($request->input('input')[$i] == 'Color') {
                        $main->is_color = 1;
                    }else if ($request->input('input')[$i] == 'Color Ply') {
                        $main->is_colorFly = 1;
                    }else if ($request->input('input')[$i] == 'Lamination') {
                        $main->is_lam = 1;
                    }else if ($request->input('input')[$i] == 'Perforation') {
                        $main->is_per = 1;
                    }else if ($request->input('input')[$i] == 'Substrate') {
                        $main->is_substrate = 1;
                    }else{
                        $main->is_corner = 1;
                    }
                }
                $main->save();


                return redirect('/admin-products-mainproducts?success=1');
            }
        }
        
    }

    public function mainproductsadd() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $size = DB::table('selects')->where('type','size')->get();
                return view('admin.pro-mainproducts-add')->with('size',$size);
            }
        }
        
    }

    public function deleteMain(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                DB::table('main_prod')->where('id', $request->input('id'))->delete();

             return redirect('/admin-products-mainproducts?success=2');
            }
        }
    }

    public function subproducts() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $products = DB::table('sub_prod')->get();

                return view('admin.pro-subproducts')->with('products',$products);
            }
        }
        
    }

    public function subproductsadd() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                return view('admin.pro-subproducts-add');
            }
        }
    }

    public function design() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                return view('admin.pro-design');
            }
        }
    }

    public function materials() {
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

    public function mainproductsaddauto() {
        $size = DB::table('selects')->where('type','size')->get();
        $paperType = DB::table('selects')->where('type','paperType')->get();
        $colorPly = DB::table('selects')->where('type','colorPly')->get();

        return [
            collect($size)->map(function($size) { return ['name' => $size->name]; }),
            collect($paperType)->map(function($paperType) { return ['name' => $paperType->name]; }),
            collect($colorPly)->map(function($colorPly) { return ['name' => $colorPly->name]; })
        ];

        
    }


}

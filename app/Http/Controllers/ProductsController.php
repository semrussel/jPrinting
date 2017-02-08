<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;
use App\MainProd;
use App\PivotSelectProd;
use App\Select;
use App\SubProd;


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

                if (count($request->input('colorInput'))!=0) {
                    foreach ($request->input('colorInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'color';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }
                
                if (count($request->input('sizeInput'))!=0) {
                    foreach ($request->input('sizeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'size';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('paperTypeInput'))!=0) {
                    foreach ($request->input('paperTypeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'paperType';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }
                
                if (count($request->input('colorPlyInput'))!=0) {
                    foreach ($request->input('colorPlyInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'colorPly';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $main->id;
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }
                


                return redirect('/admin-products-mainproducts?success=1');
            }
        }
        
    }

    public function createSub(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $sub = new SubProd();
                $sub->name = $request->input('product');
                $sub->main_id = $request->input('mainproduct');
                $sub->description = $request->input('description');

                for ($i=0; $i < count($request->input('input')); $i++) { 
                    if ($request->input('input')[$i] == 'Paper Type') {
                        $sub->is_paperType = 1;
                    }else if ($request->input('input')[$i] == 'Color') {
                        $sub->is_color = 1;
                    }else if ($request->input('input')[$i] == 'Color Ply') {
                        $sub->is_colorFly = 1;
                    }else if ($request->input('input')[$i] == 'Lamination') {
                        $sub->is_lam = 1;
                    }else if ($request->input('input')[$i] == 'Perforation') {
                        $sub->is_per = 1;
                    }else if ($request->input('input')[$i] == 'Substrate') {
                        $sub->is_substrate = 1;
                    }else{
                        $sub->is_corner = 1;
                    }
                }
                $sub->save();

                if (count($request->input('colorInput'))!=0) {
                    foreach ($request->input('colorInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'color';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('sizeInput'))!=0) {
                    foreach ($request->input('sizeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'size';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('paperTypeInput'))!=0) {
                    foreach ($request->input('paperTypeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'paperType';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('colorPlyInput'))!=0) {
                    foreach ($request->input('colorPlyInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'colorPly';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $sub->id;
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }


                return redirect('/admin-products-subproducts?success=1');
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
                
                return view('admin.pro-mainproducts-add');
            }
        }
        
    }

    public function mainproductsedit($id) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{

                $product = DB::table('main_prod')->where('id',$id)->get();
                $sizes = $sizes = DB::table('selects')
                        ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
                        ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',1)
                        ->where('selects.type','size')->get();
                $paperTypes = checkInput($id,$product[0]->is_paperType,'paperType');
                $colorPlys = checkInput($id,$product[0]->is_colorFly,'colorPly');
                $colors = checkInput($id,$product[0]->is_color,'color');

                return view('admin.pro-mainproducts-edit')->with('product',$product[0])->with('sizes',$sizes)->with('colors',$colors)->with('paperTypes',$paperTypes)->with('colorPlys',$colorPlys);
            }
        }
        
    }

    public function editMain(Request $request){

        $wew = DB::table('pivot_selectprod')->where('service_id', $request->input('id'))->where('is_main', 1)->delete();
        
        if (count($request->input('sizeInput'))>0) {
                    foreach ($request->input('sizeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'size';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('paperTypeInput'))>0) {
                    foreach ($request->input('paperTypeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'paperType';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('colorPlyInput'))>0) {
                    foreach ($request->input('colorPlyInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'colorPly';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 1;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 1;
                            $pivot->save();
                        }
                    }
                }
        $is_paperType = 0;
        $is_color = 0;
        $is_colorFly = 0;
        $is_lam = 0;
        $is_per = 0;
        $is_substrate = 0;
        $is_corner = 0;
        for ($i=0; $i < count($request->input('input')); $i++) { 
                    if ($request->input('input')[$i] == 'Paper Type') {
                        $is_paperType = 1;
                    }else if ($request->input('input')[$i] == 'Color') {
                        $is_color = 1;
                    }else if ($request->input('input')[$i] == 'Color Ply') {
                        $is_colorFly = 1;
                    }else if ($request->input('input')[$i] == 'Lamination') {
                        $is_lam = 1;
                    }else if ($request->input('input')[$i] == 'Perforation') {
                        $is_per = 1;
                    }else if ($request->input('input')[$i] == 'Substrate') {
                        $is_substrate = 1;
                    }else{
                        $is_corner = 1;
                    }
        }

        DB::table('main_prod')->where('id', $request->input('id'))
        ->update(array('name' => $request->input('name'), 
                    'is_subcat' => $request->input('has'),
                    'description' => $request->input('description'),
                    'is_paperType' => $is_paperType,
                    'is_color' => $is_color,
                    'is_colorFly' => $is_colorFly,
                    'is_lam' => $is_lam,
                    'is_per' => $is_per,
                    'is_substrate' => $is_substrate,
                    'is_corner' => $is_corner
        ));

        return redirect('/admin-products-mainproducts?success=3');
    }

    public function deleteMain(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                DB::table('main_prod')->where('id', $request->input('id'))->delete();
                DB::table('sub_prod')->where('main_id', $request->input('id'))->delete();

             return redirect('/admin-products-mainproducts?success=2');
            }
        }
    }

    public function deleteSub(Request $request) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                DB::table('sub_prod')->where('id', $request->input('id'))->delete();

             return redirect('/admin-products-subproducts?success=2');
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
                $mainprod = DB::table('main_prod')->where('is_subcat', '1')->get();

                return view('admin.pro-subproducts')->with('products',$products)->with('mainprod',$mainprod);
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
                $products = DB::table('main_prod')->where('is_subcat',1)->get();
                return view('admin.pro-subproducts-add')->with('products',$products);
            }
        }
    }

    public function subproductsedit($id) {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $product = DB::table('sub_prod')->where('id',$id)->get();
                $sizes = $sizes = DB::table('selects')
                        ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
                        ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',0)
                        ->where('selects.type','size')->get();
                $paperTypes = checkInputSub($id,$product[0]->is_paperType,'paperType');
                $colorPlys = checkInputSub($id,$product[0]->is_colorFly,'colorPly');
                return view('admin.pro-subproducts-edit')->with('product',$product[0])->with('sizes',$sizes)->with('paperTypes',$paperTypes)->with('colorPlys',$colorPlys);
            }
        }
    }

     public function editSub(Request $request){

        $wew = DB::table('pivot_selectprod')->where('service_id', $request->input('id'))->where('is_main', 0)->delete();
        
        if (count($request->input('sizeInput'))>0) {
                    foreach ($request->input('sizeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'size';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('paperTypeInput'))>0) {
                    foreach ($request->input('paperTypeInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'paperType';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }

                if (count($request->input('colorPlyInput'))>0) {
                    foreach ($request->input('colorPlyInput') as $size) {
                        $count = DB::table('selects')->where('name',$size)->count();
                        if ($count == 0) {
                            $select = new Select();
                            $select->name = $size;
                            $select->type = 'colorPly';
                            $select->save();

                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 0;
                            $pivot->save();
                        }else{
                            $select = DB::table('selects')->where('name',$size)->get();
                            $pivot = new PivotSelectProd();
                            $pivot->select_id = $select[0]->id;
                            $pivot->service_id = $request->input('id');
                            $pivot->is_main = 0;
                            $pivot->save();
                        }
                    }
                }
        $is_paperType = 0;
        $is_color = 0;
        $is_colorFly = 0;
        $is_lam = 0;
        $is_per = 0;
        $is_substrate = 0;
        $is_corner = 0;
        for ($i=0; $i < count($request->input('input')); $i++) { 
                    if ($request->input('input')[$i] == 'Paper Type') {
                        $is_paperType = 1;
                    }else if ($request->input('input')[$i] == 'Color') {
                        $is_color = 1;
                    }else if ($request->input('input')[$i] == 'Color Ply') {
                        $is_colorFly = 1;
                    }else if ($request->input('input')[$i] == 'Lamination') {
                        $is_lam = 1;
                    }else if ($request->input('input')[$i] == 'Perforation') {
                        $is_per = 1;
                    }else if ($request->input('input')[$i] == 'Substrate') {
                        $is_substrate = 1;
                    }else{
                        $is_corner = 1;
                    }
        }

        DB::table('sub_prod')->where('id', $request->input('id'))
        ->update(array('name' => $request->input('product'),
                    'description' => $request->input('description'),
                    'is_paperType' => $is_paperType,
                    'is_color' => $is_color,
                    'is_colorFly' => $is_colorFly,
                    'is_lam' => $is_lam,
                    'is_per' => $is_per,
                    'is_substrate' => $is_substrate,
                    'is_corner' => $is_corner
        ));

        return redirect('/admin-products-subproducts?success=3');
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

    public function materialsadd() {
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

    public function materialsedit() {
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

    public function mainproductsaddauto() {
        if (Auth::guest()) {
            return redirect('/');
        }else{
            if (Auth::user()->type == 'client') {
                return redirect('/');
            }else{
                $size = DB::table('selects')->where('type','size')->get();
                $paperType = DB::table('selects')->where('type','paperType')->get();
                $color = DB::table('selects')->where('type','color')->get();
                $colorPly = DB::table('selects')->where('type','colorPly')->get();

                return [
                    collect($size)->map(function($size) { return ['name' => $size->name]; }),
                    collect($paperType)->map(function($paperType) { return ['name' => $paperType->name]; }),
                    collect($color)->map(function($color) { return ['name' => $color->name]; }),
                    collect($colorPly)->map(function($colorPly) { return ['name' => $colorPly->name]; })
                ];
            }
        }
        

        
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;
use Auth;
use DB;

class ServicesController extends Controller
{
    public function index(){
    	// return view('services-main');

        $arr_post_body = array(
        "message_type" => "SEND",
        "mobile_number" => '639472055426',
        "shortcode" => "2929025642",
        "message_id" => "12345678901234567890123456789012",
        "message" => urlencode("Hi We are from Jimbes Printing! We already Delivered your order! Thank you for patrionazing Jimbes Printing!"),
        "client_id" => "37a3dc6152c57afbe664c02a640f1226ef85d5ab33409866cfab8c7c160bdcac",
        "secret_key" => "7ecf073a12a56781a070fa4a25da3eaf5f24b5a21014117516c400a256c9ff60"
        );
        
        $query_string = "";
        foreach($arr_post_body as $key => $frow)
        {
            $query_string .= '&'.$key.'='.$frow;
        }

        $URL = "https://post.chikka.com/smsapi/request";

        $curl_handler = curl_init();
        curl_setopt($curl_handler, CURLOPT_URL, $URL);
        curl_setopt($curl_handler, CURLOPT_POST, count($arr_post_body));
        curl_setopt($curl_handler, CURLOPT_POSTFIELDS, $query_string);
        curl_setopt($curl_handler, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($curl_handler);
        curl_close($curl_handler);

    	return view('services.serv-land');
    }

    public function serviceMain($id){
        if (Auth::check()) {
            $service = DB::table('main_prod')->where('id',$id)->get();
            $designs = DB::table('designs')->where('service_id',$id)->where('is_main',1)->get();
            $sizes = DB::table('selects')
            ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
            ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',1)
            ->where('selects.type','size')->get();
            $paperTypes = checkInput($id,$service[0]->is_paperType,'paperType');
            $colorPlys = checkInput($id,$service[0]->is_paperType,'colorPly');
            $colors = checkInput($id,$service[0]->is_color,'color');
            // return $sizes;

            $zero = DB::table('materials')->join('pivot_materialprod', 'pivot_materialprod.material_id','=','materials.id')
            ->where('materials.quantity',0)->where('pivot_materialprod.service_id',$id)->where('pivot_materialprod.is_main',1)->count();

            return view('services.service')->with('colors',$colors)->with('zero',$zero)->with('designs',$designs)->with('service',$service[0])->with('sizes',$sizes)->with('paperTypes',$paperTypes)->with('colorPlys',$colorPlys);
            
        }else{
            return redirect('/login?check=1');
        }
    }

    public function serviceSub($id){
        if (Auth::check()) {
            $service = DB::table('sub_prod')->where('id',$id)->get();
            $designs = DB::table('designs')->where('service_id',$id)->where('is_main',0)->get();
            $sizes = DB::table('selects')
            ->join('pivot_selectprod', 'pivot_selectprod.select_id', '=', 'selects.id')
            ->where('pivot_selectprod.service_id',$id)->where('pivot_selectprod.is_main',0)
            ->where('selects.type','size')->get();
            $paperTypes = checkInputSub($id,$service[0]->is_paperType,'paperType');
            $colorPlys = checkInputSub($id,$service[0]->is_paperType,'colorPly');
            $colors = checkInputSub($id,$service[0]->is_color,'color');

            $zero = DB::table('materials')->join('pivot_materialprod', 'pivot_materialprod.material_id','=','materials.id')
            ->where('materials.quantity',0)->where('pivot_materialprod.service_id',$id)->where('pivot_materialprod.is_main',0)->count();

            return view('services.service')->with('colors',$colors)->with('zero',$zero)->with('designs',$designs)->with('service',$service[0])->with('sizes',$sizes)->with('paperTypes',$paperTypes)->with('colorPlys',$colorPlys);
            
        }else{
            return redirect('/login?check=1');
        }
    }


    public function callCalendarsPoster(){
        if (Auth::check()) {
            return view('services.calendars-poster');
            
        }else{
            return redirect('/login?check=1');
        }
    }
    public function callCalendarsMonthly(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.calendars-monthly');
        }
    }
    public function callCalendarsTable(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.calendars-table');
        }
    }
    // --->
    public function callStickersRound(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.stickers-round');
        }
    }
    public function callStickersSquare(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.stickers-square');
        }
    }
     public function callStickersRectangle(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.stickers-rectangle');
        }
    }
    // --->
    public function callInvitations(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.invitations');
        }
    }
    public function callNewsletters(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.newsletters');
        }
    }
    public function callBooks(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.books');
        }
    }
    public function callYearbooks(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.yearbooks');
        }
    }
    // --->
    public function callBusinesscards1Side(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.businesscards-1side');
        }
    }
    public function callBusinesscards2Side(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.businesscards-2side');
        }
    }
    // --->
    public function callGiftwrappers(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.giftwrappers');
        }
    }
    public function callSouvenirPrograms(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.souvenirprograms');
        }
    }
    public function callPaperBags(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.paperbags');
        }
    }

    public function callBagtags(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.bagtags');
        }
    }
    public function callCorporateFolders(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.corporatefolders');
        }
    }
    // --->
    public function callTickets1Side(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.tickets-1side');
        }
    }
    public function callTickets2Side(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.tickets-2side');
        }
    }
    // --->
    public function callPosters(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.posters');
        }
    }
    public function callOfficeforms(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.officeforms');
        }
    }
    public function callCertificates(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.certificates');
        }
    }
    public function callBoxes(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.boxes');
        }
    }
    // --->
    public function callReceiptsCarbon(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.receipts-carbon');
        }
    }
    public function callReceiptsCarbonless(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.receipts-carbonless');
        }
    }
    // --->
    public function callNotebooksWireSoft(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.notebooks-wiresoft');
        }
    }
    public function callNotebooksWireHard(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.notebooks-wirehard');
        }
    }
    public function callNotebooksPerfectSoft(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.notebooks-perfectsoft');
        }
    }
    public function callNotebooksPerfectHard(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.notebooks-perfecthard');
        }
    }
    // --->
    public function callFlyers1Side(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.flyers-1side');
        }
    }
    public function callFlyers2Side(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.flyers-2side');
        }
    }
    public function callBrochuresBifold(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.brochures-bifold');
        }
    }
    public function callBrochuresTrifold(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.brochures-trifold');
        }
    }
    public function callBrochuresQuadfold(){
        if (Auth::guest()) {
            return redirect('/login?check=1');
        }else{
            return view('services.brochures-quadfold');
        }
    }

}

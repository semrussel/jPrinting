<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio;
use Auth;
use Session;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//         $apicode = 'RUSSE582490_6E1RP';
//         $message = 'noworries2017';
//         $number = '639364582490';
//         $url = 'https://www.itexmo.com/php_api/api.php';
// $itexmo = array('1' => $number, '2' => $message, '3' => $apicode);
// $param = array(
//     'http' => array(
//         'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
//         'method'  => 'POST',
//         'content' => http_build_query($itexmo),
//     ),
// );
// $context  = stream_context_create($param);
// return file_get_contents($url, false, $context);
        return view('index');
    }

    public function Login()
    {
        return view('login');
    }

    public function Logout()
    {
        Auth::logout();
        Session::flush();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/login');
    }
}

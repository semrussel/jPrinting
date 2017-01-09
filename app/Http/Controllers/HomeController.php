<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Parser;


class HomeController extends Controller
{
    public function index() {
    	return view('index');
    }

    public function showLogin()
	{
	    // show the form
	    return View('register');
	}

    public function doLogin() {

		alert('AYY');

		// validate the info, create rules for the inputs
		// $rules = array(
		//     'username' => 'required', // make sure the email is an actual email
		//     'password' => 'required|min:3' // password can only be alphanumeric and has to be greater than 3 characters
		// );

		// // run the validation rules on the inputs from the form
		// $validator = Validator::make(Input::all(), $rules);

		// // if the validator fails, redirect back to the form
		// if ($validator->fails()) {
		//     return Redirect::to('index')
		//         ->withErrors($validator) // send back all errors to the login form
		//         ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
		// } else {

		//     // create our user data for the authentication
		//     $userdata = array(
		//         'username'  => Input::get('username'),
		//         'password'  => Input::get('password')
		//     );

		//     // attempt to do the login
		//     if (Auth::attempt($userdata)) {

		//         // validation successful!
		//         // redirect them to the secure section or whatever
		//         // return Redirect::to('secure');
		//         // for now we'll just echo success (even though echoing in a controller is bad)
		//         // echo 'SUCCESS!';
		//         alert('SUCCESS!');

		//     } else {        

		//         // validation not successful, send back to form 
		//         return Redirect::to('index');
		//         alert('NOP!');

		//     }

		// }
	}
}

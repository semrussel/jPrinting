<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;

class EmailController extends Controller
{
    public function send(Request $request){
	    $title = $request->input('title');
        $content = $request->input('content');

        Mail::send('emails.send', ['title' => $title, 'content' => $content], function ($message)
        {

            $message->from('me@gmail.com', 'JBPrinting');

            $message->to('ctreuse109@gmail.com');

        });

        return response()->json(['message' => 'Request completed']);     
	}
}

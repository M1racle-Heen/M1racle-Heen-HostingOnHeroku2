<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;  


class MailController extends Controller
{
    //
    public function send($id){
    	$objectDemo = new \stdClass();
    	$objectDemo -> receiver = 'Saidakmal';
    	$objectDemo -> sender = 'Human';
    	Mail::to($id)->send(new DemoEmail($objectDemo));
    	return redirect()->back();
    }
}

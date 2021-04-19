<?php

namespace App\Http\Controllers;
use Schema;
use Session;

class MainController extends Controller
{
   
    public function changeLocale($locale){
    	Session::put('locale',$locale);
    	return redirect()->back();

    }
}

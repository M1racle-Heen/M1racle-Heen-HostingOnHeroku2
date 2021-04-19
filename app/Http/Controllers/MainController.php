<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
   
    public function changeLocale($locale){
    	Session::put('locale',$locale);
    	return redirect()->back();

    }
}

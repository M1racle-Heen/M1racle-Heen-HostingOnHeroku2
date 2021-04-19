<?php

namespace App\Http\Controllers;


class MainController extends Controller
{
   
    public function changeLocale($locale){
    	\App::setlocale($locale);
    	session()->put('locale',$locale);
    	return redirect()->back();

    }
}

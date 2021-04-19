<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class MainController extends Controller
{
   
    public function changeLocale($locale){
    	\App::setlocale($locale);
    	session()->put('locale',$locale);
    	return redirect()->route('en/');

    }
}

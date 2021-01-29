<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


class WelcomeController extends Controller
{
    public function welcome(){
        $currentRoute=Route::getFacadeRoot()->current()->uri();;

        return view('welcome',compact('currentRoute'));
    }
}

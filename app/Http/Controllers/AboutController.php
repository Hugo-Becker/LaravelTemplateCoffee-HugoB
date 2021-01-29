<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AboutController extends Controller
{
    public function about(){
        $currentRoute=Route::getFacadeRoot()->current()->uri();;
        return view('pages.about',compact('currentRoute'));
    }
}

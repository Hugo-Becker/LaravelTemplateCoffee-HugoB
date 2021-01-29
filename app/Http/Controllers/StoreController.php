<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function store(){
        $currentRoute=Route::getFacadeRoot()->current()->uri();;

        return view('pages.store',compact('currentRoute'));
    }
}

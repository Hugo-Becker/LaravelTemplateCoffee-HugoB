<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductsController extends Controller
{
    public function products(){
        $currentRoute=Route::getFacadeRoot()->current()->uri();;

        return view('pages.products',compact('currentRoute'));
    }
    //
}

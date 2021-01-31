<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class ProductsController extends Controller
{
    public function products(){
        $products=(object)[
            "titre1"=>"Blended to Perfection",
            "titre2"=>"Coffees & Teas",
            "paragraph1"=>"We take pride in our work, and it shows. Every time you order a beverage from us, we guarantee that it will be an experience worth having. Whether it's our world famous Venezuelan Cappuccino, a refreshing iced herbal tea, or something as simple as a cup of speciality sourced black coffee, you will be coming back for more.",
            "titre3"=>"Delicious Treats, Good Eats",
            "titre4"=>"Bakery & Kitchen",
            "paragraph2"=>"Our seasonal menu features delicious snacks, baked goods, and even full meals perfect for breakfast or lunchtime. We source our ingredients from local, oragnic farms whenever possible, alongside premium vendors for specialty goods.",
            "titre5"=>"Oups je l'ai delete",
            "titre6"=>"pareil",
            "paragraph3"=>"Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details."
        ];
        $currentRoute=Route::getFacadeRoot()->current()->uri();;

        return view('pages.products',compact('currentRoute','products'));
    }
    //
}

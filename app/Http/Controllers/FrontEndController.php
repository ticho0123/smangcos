<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    public function katalog(){
        $products = Product::where('approve','=','accept')->get();
        return view('frontend.katalog',compact('products'));
    }

    public function detail($id){
        $product = Product::find($id);
        return view('frontend.detail',compact('product'));
    }

    public function tentang(){
        return view('frontend.tentang');
    }

    public function thanks(){
        return view('frontend.thanks');
    }
}

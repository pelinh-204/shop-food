<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    //
    public function HomeController(){
        $product =Product::all();
        $banner = Banner::all();
        return view('client.home',compact('product','banner'));
    }
    public function DetailController($id){
        $product =Product::with('variant')->where('id',$id)->first();
        return view('client.detail-pro',compact('product'));
    }
}

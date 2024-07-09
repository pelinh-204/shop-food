<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    //
    public function HomeController(){
        return view('client.home');
    }
    public function DetailController(){
        return view('client.detail-pro');
    }
}

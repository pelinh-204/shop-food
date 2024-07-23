<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Carts;
use Faker\Core\Number;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use NumberFormatter;

class CartController extends Controller
{
    public function addCart(Request $request){
        // dd($request->all());
        $name = $_GET['name'];
        $price = $_GET['price'];
        $user_id = $_GET['user_id'];
        $idProduct = $_GET['idProduct'];
        $dataQuantity = $_GET['dataQuantity'];
        $dataColor = $_GET['color'];
        $dataImage = $_GET['image'];
        $variant = $_GET['variant'];
        $total = intval($dataQuantity) * intval($price);
        $cart = new Carts();
        $cart ->name = $name;
        $cart ->price = $price;
        $cart ->user_id = Auth::user()->id;
        $cart ->product_id = $idProduct;
        $cart ->quantity = $dataQuantity;
        $cart ->color = $dataColor;
        $cart ->variant_id = $variant;
        $cart ->image = $dataImage;
        $cart ->total = $total;
        $cart->save();
        return response()->json([
            'quantity'=>$dataQuantity,
            'image'=>$dataImage,
            'color'=>$dataColor
        ]);
    }
    public function CheckCart(){
        $variant_id = $_GET['variant'];
        $check = Carts::where('variant_id',$variant_id)->first();
        if($check){
            return $check;
        }
    }
    public function UpdateCart(){
        $id = $_GET['idCart'];
        $quantity = $_GET['dataQuantity'];
        $total = $_GET['total'];
        $ht = $_GET['slht'];
        $cart = Carts::find($id);
        $cart->quantity = $quantity + $ht;
        $cart->total = $total;
        $cart->save();
    }
}

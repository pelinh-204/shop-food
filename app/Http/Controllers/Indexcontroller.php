<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Carts;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class Indexcontroller extends Controller
{
    //
    public function HomeController(){
        $cart = Carts::all();
        $product =Product::all();
        $productSale =Product::with('sale')->where('sale_id','>',0)->get();
        // return response()->json($productSale);
        $banner = Banner::all();
        $category = Category::all();
        return view('client.home',compact('product','banner','category','cart','productSale'));
    }
    public function DetailController($id){
        $cart = Carts::all();
        $product =Product::with('variant','sale')->where('id',$id)->first();
        $category = Category::all();

        // return response()->json($product);
        return view('client.detail-pro',compact('product','category','cart'));
    }
    public function showCart($id){
        $category = Category::all();
        $cart = Carts::where('user_id',$id)->get();
        //  return response()->json($cart);
        return view('client.cart',compact('category','cart'));
    }
    public function cartQt(){
        $id =$_GET['id'];
        $total = $_GET['tong'];
        $quantity = $_GET['quantitysy'];
        $cart = Carts::find($id);
        $cart->quantity = $quantity;
        $cart->total = $total;
        $cart->save();
    }
    public function checkout($id){
        $cart = Carts::where('user_id',$id)->get();
        $category = Category::all();
        $total = Carts::where('user_id',$id)->sum('total');
        return view('client.checkout',compact('cart','category','total'));
    }
    public function search(Request $request)
    {
        $data = $request->input('query');
        // dd($data);
        $category = Category::all();

        $cart = Carts::all();

        // Tìm kiếm sản phẩm theo tên
        $product = Product::where('name', 'LIKE', "%$data%")->orWhere('description', 'LIKE', "%$data%")->get();
    //    return response()->json($product);
        // Trả về view với kết quả tìm kiếm
        return view('client.search', compact('product','category','cart','data'));
    }
}

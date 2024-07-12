<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Image;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $category = Category::all();
        return view('admin.product.add',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $file = $request->file('file');
        $product = new Product();
        $product->name =$data['name'];
        $product->price =$data['price'];
        $product->description = $data['editor'];
        $product->status =$data['status'];
        $product->category_id =$data['category_id'];

        $path = 'uploads/product';
        $name_file = $file->getClientOriginalName();
        $name_image = current(explode('.',$name_file));
        $real_name =$name_image.'_'.rand(1,1000).'.'.$file->getClientOriginalExtension();
        $file->move($path,$real_name);

        $product->image =$real_name;
        $product->save();
        // xử lí ảnh nhỏ 
        $files = $data['product_variant'];
        foreach($files as $value){
            $variant = new Variant();
            $variant->product_id =$product->id;
            $variant->quantity =$value['quantity'];
            $variant->color =$value['color'];
            $images = $value['img'];
            $name_files = $images->getClientOriginalName();
            $name_images = current(explode('.',$name_files));
            $real_names = $name_images.'_'.rand(1,1000).'.'.$images->getClientOriginalExtension();
            $images->move($path,$real_names);
            $variant->image = $real_names;
            $variant->save();
        }
        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::all();
        $detail = Product::find($id);
        $images = Image::where('product_id',$id)->get();
        return view('admin.product.update',compact('detail','category','images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $file = $request->file('file');
        $product =  Product::find($id);
        $product->name =$data['name'];
        $product->price =$data['price'];
        $product->description = $data['editor'];
        $product->status =$data['status'];
        $product->category_id =$data['category_id'];
        $real_name=$data['file'];

        if($file){
            $size=$file->getSize();
            if($size>0){
                if(file_exists('uploads/product/'.$product->image)){
                    unlink('uploads/product/'.$product->image);
                }
        $path = 'uploads/product/';
        $name_file = $file->getClientOriginalName();
        $name_image = current(explode('.',$name_file));
        $real_name =$name_image.'_'.rand(1,1000).'.'.$file->getClientOriginalExtension();
        $file->move($path,$real_name);
        
        }

    }
    $product->image =$real_name;
    $product->save();
    return redirect()->route('product.index');
        
        // xử lí ảnh nhỏ 
        // foreach($fileThumbnail as $anh){
        //     $image = new Image();
        //     $name_files =$anh->getClientOriginalName();
        //     $name_images =current(explode('.',$name_files));
        //     $real_names = $name_images.'_'.rand(1,100).'.'.$anh->getClientOriginalExtension();
        //     $anh->move($path,$real_names);
        //     $image->product_id =$product->id;
        //     $image->link =$real_names;
        //     $image->save();

        // }
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        if(file_exists('uploads/product/'.$product->image)){
            unlink('uploads/product/'.$product->image);
        }
        $product->delete();
        return redirect()->route('product.index');
    }
}

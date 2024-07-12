<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;

class VariantController extends Controller
{
    public function index(){
        $variant = Variant::all();
        return view('admin.variant.index',compact('variant'));
    }

    public function destroy(string $id){
        $variant = Variant::find($id);
        if(file_exists('upload/product/'.$variant->image)){
            unlink('upload/product/'.$variant->image);
        }
        $variant->delete();
        return redirect()->route('variant.index');
    }

    public function edit(string $id)
    {
        $product = Product::all();
        $detail=Variant::find($id);
        $images = Image::where('product_id',$id)->get();
        return view('admin.variant.update',compact('detail','product','images'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $value = $request->all();
        $variant = Variant::find($id);
        // dd($value);
        $variant->product_id =$value['product_id'];
        $variant->quantity = $value['quantity'];
        $variant->color =$value['color'];
        $real_name =$value['file'];
        $file = $request->file('file');
        if($file){
            $size=$file->getSize();
            if($size>0){
                if(file_exists('upload/product/'.$variant->image)){
                    unlink('upload/product/'.$variant->image);
                }

                $path = 'uploads/product';
                $name_file =$file->getClientOriginalName();
                $name_image=current(explode('.',$name_file));
                $real_name =$name_image.'.'.rand(1,1000).'_'.$file->getClientOriginalExtension();
                $file->move($path,$real_name);
            }
        }
        $variant->image = $real_name;
        $variant->save();
        return redirect()->route('variant.index');
    }
}

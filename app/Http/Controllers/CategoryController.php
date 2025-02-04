<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('id','DESC')->get();
        return view('admin.category.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $category = new Category();
        $category->name =$data['name'];
        // xử lí ảnh
        $file = $request->file('file');
        // dd($file);
        $path = 'uploads/category/';
        $name_file = $file->getClientOriginalName();
        $name_image = current(explode('.',$name_file));
        $real_name =$name_image.'_'.rand(1,100) .'.'.$file->getClientOriginalExtension();
        $file->move($path,$real_name);
        //
        $category->image =$real_name;
        $category->save();
        return redirect()->route('category.index');
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
        $category = Category::find($id);
        // return response()->json($category);
        return view('admin.category.update',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $category =  Category::find($id);
        $category->name =$data['name'];
        $real_name = $data['file'];
        // xử lí ảnh
        $file = $request->file('file');
        if($file){
            $size=$file->getSize();
        if($size>0){
            if(file_exists('uploads/category/'.$category->image)){
                unlink('uploads/category/'.$category->image);
            }
        $path = 'uploads/category/';
        $name_file = $file->getClientOriginalName();
        $name_image = current(explode('.',$name_file));
        $real_name =$name_image.'_'.rand(1,100) .'.'.$file->getClientOriginalExtension();
        $file->move($path,$real_name);
        }
        }
        // dd($file);
        
        //
        $category->image =$real_name;
        $category->save();
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);
        if(file_exists('uploads/category/'.$category->image)){
            unlink('uploads/category/'.$category->image);
        }
        $category->delete();
        return redirect()->route('category.index');
    }
}

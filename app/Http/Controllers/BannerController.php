<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        $banner = Banner::all();
        return view('admin.banner.index',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.banner.add');
    }

    public function store(Request $request){
        $data =$request->all();
        $banner = new Banner();
        $banner->tittle =$data['tittle'];
        $banner->content =$data['content'];
        $file = $request->file('file');
        $path = 'uploads/banner/';
        $name_file =$file->getClientOriginalName();
        $name_image =current(explode('.',$name_file));
        $real_name=$name_image.'.'.rand(1,100).'.'.$file->getClientOriginalExtension();
        $file->move($path,$real_name);

        $banner->img =$real_name;
        $banner->save();
        return redirect()->route('banner.index');
    }

    public function destroy(string $id){
        $banner =Banner::find($id);
        if(file_exists('upload/banner/'.$banner->image)){
            unlink('upload/banner/'.$banner->image);
        }
        $banner->delete();
        return redirect()->route('banner.index');
    }


}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Sale;
use Illuminate\Http\Request;

class SaleController extends Controller

{
    public function index(){
        $sales = Sale::orderBy('id','DESC')->get();
        return view('admin.sale.index',compact('sales'));
    }
    public function create()
    {
      
        return view('admin.sale.add');
    }

    public function store(Request $request){
       $data = $request->all();
       $sale = new Sale();
       $sale->discount =$data['discount'];
       $sale->title =$data['title'];
       $sale->start =$data['start'];
       $sale->end =$data['end'];
       $sale->save();
       return redirect()->route('sale.index');
    }

    public function destroy(string $id){
        $sale = Sale::find($id);
        $sale->delete();
        return redirect()->route('sale.index');
    }

    public function edit(string $id)
    {
        $sale = Sale::find($id);
        return view('admin.sale.update',compact('sale'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
       $sale = Sale::find($id);
       $sale->discount =$data['discount'];
       $sale->title =$data['title'];
       $sale->start =$data['start'];
       $sale->end =$data['end'];
       $sale->save();
       return redirect()->route('sale.index');

    }
}
 




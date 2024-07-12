@extends('admin.layout.main')
@section('maincontent')
<div class="main-content mb-4" style="margin-top: 100px; margin-left:270px;margin-right:20px; ">
<h1>Update Variant</h1>
    <form action="{{route('variant.update',$detail->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Product_Id</label>
            <select name="product_id" id="" class="form-control">
                <option value="" selected>Chọn Id Sản phẩm</option>
                @foreach ($product as $value )
                <option value="{{$value->id}}"{{($value->id==$detail->product_id)?'selected':''}}>{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <input type="hidden" name="file" id="" value="{{$detail->image}}">


        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Quantity</span>
                <input type="text" value="{{$detail->quantity}}" class="form-control" placeholder="Quantity" aria-describedby="addon-wrapping" name="quantity">
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Color</span>
                <input type="text"value="{{$detail->color}}" class="form-control" placeholder="Color" aria-describedby="addon-wrapping" name="color">
            </div>
        </div> <br>

        <img src="{{asset('uploads/product/'.$detail->image)}}" alt="" width="150px" height="150px">
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Image</span>
                <input type="file" class="form-control"  name="file">
            </div>
        </div>

        @foreach ($images as $anh )
        <img src="{{asset('uploads/product/'.$anh->link)}}" alt="" width="150px" height="150px" >
        @endforeach
        
        <div class="col-lg-12 mb-3 mt-4" >
        <a href="{{route('variant.index')}}" class="btn btn-primary">List Variant</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </form>
</div>
@endsection
@extends('admin.layout.main')
@section('maincontent')
<div class="main-content mb-4" style="margin-top: 100px; margin-left:270px;margin-right:20px; ">
<h1>Add Products</h1>
    <form action="{{route('product.update',$detail->id)}}" enctype="multipart/form-data" method="post">
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="">Category_Id</label>
            <select name="category_id" id="" class="form-control">
                <option value="" selected>Chọn Id danh mục</option>
                @foreach ($category as $value )
                <option value="{{$value->id}}"{{($value->id==$detail->category_id)?'selected':''}}>{{$value->name}}</option>
                @endforeach
            </select>
        </div>
<input type="hidden" name="file" id="" value="{{$detail->image}}">
        <div class="mb-3">
            <label for="">Status</label>
            <select name="status" id="" class="form-control">
                <option value="0">Hiển thị</option>
                <option value="1"> Không hiển thị</option>

            </select>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input type="text" value="{{$detail->name}}" class="form-control" placeholder="Product Name" aria-label="Username" aria-describedby="addon-wrapping" name="name">
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Price</span>
                <input type="text"value="{{$detail->price}}" class="form-control" placeholder="Price Product" aria-label="Username" aria-describedby="addon-wrapping" name="price">
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
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Description</span>
                <textarea name="editor" id="editor" >{{$detail->description}}</textarea>
            </div>
        </div>

        <div class="col-lg-12 mb-3 mt-4" >
        <a href="{{route('product.index')}}" class="btn btn-primary">List Product</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </form>
</div>
@endsection
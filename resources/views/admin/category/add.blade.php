@extends('admin.layout.main')
@section('maincontent')
<div class="main-content mb-4" style="margin-top: 100px; margin-left:270px;margin-right:20px; ">
<h1>Add CateGory</h1>
    <form action="{{route('category.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Name</span>
                <input type="text" class="form-control" placeholder="CateGory Name" aria-label="Username" aria-describedby="addon-wrapping" name="name">
            </div>
        </div>
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Upload Img</span>
                <input type="file" class="form-control"  name="file">
            </div>
        </div>
        <div class="col-lg-12 mb-3 mt-4" >
        <a href="{{route('category.index')}}" class="btn btn-primary">List CateGory</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </form>
</div>
@endsection
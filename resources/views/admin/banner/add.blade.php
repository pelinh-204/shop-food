@extends('admin.layout.main')
@section('maincontent')
<div class="main-content mb-4" style="margin-top: 100px; margin-left:270px;margin-right:20px; ">
<h1>Add Banner</h1>
    <form action="{{route('banner.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Tittle</span>
                <input type="text" class="form-control" placeholder="Tittle"  aria-describedby="addon-wrapping" name="tittle">
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Content</span>
                <input type="text" class="form-control" placeholder="Content"  aria-describedby="addon-wrapping" name="content">
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Image</span>
                <input type="file" class="form-control"  name="file">
            </div>
        </div>

        <div class="col-lg-12 mb-3 mt-4" >
        <a href="{{route('banner.index')}}" class="btn btn-primary">List Banner</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </form>
</div>
@endsection
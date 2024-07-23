@extends('admin.layout.main')
@section('maincontent')
<div class="main-content mb-4" style="margin-top: 100px; margin-left:270px;margin-right:20px; ">
<h1>Add Sale</h1>
    <form action="{{route('sale.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Discount</span>
                <input type="text" class="form-control" placeholder="Discount"  aria-describedby="addon-wrapping" name="discount">
            </div>
        </div>
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Tittle</span>
                <input type="text" class="form-control" placeholder="Tittle"  aria-describedby="addon-wrapping" name="tittle">
            </div>
        </div>
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Start</span>
                <input type="date" class="form-control" placeholder="Start"  aria-describedby="addon-wrapping" name="start">
            </div>
        </div>
        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">End</span>
                <input type="date" class="form-control" placeholder="End"  aria-describedby="addon-wrapping" name="end">
            </div>
        </div>
      

       

        <div class="col-lg-12 mb-3 mt-4" >
        <a href="{{route('sale.index')}}" class="btn btn-primary">List Sale</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    </div>
    </form>
</div>
@endsection
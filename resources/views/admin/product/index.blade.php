@extends('admin.layout.main')
@section('maincontent')
<div class="row" style="margin-left: 250px; margin-top:80px">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                 <h5 class="card-title mb-0" >List Product</h5>
                
            </div>
            <div class="card-body">
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10px;">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" id="checkAll" value="option">
                                </div>
                            </th>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Image</th>
                            <th>Description</th>
                            <th>Category_id</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       @foreach ($product as $value )
                       <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{$value->id}}</td>
                            <td>{{$value->name}}</td>
                            <td>{{$value->price}}</td>
                           

                            <td><img src="{{asset('uploads/product/'.$value->image)}}" alt="" width="150px" height="150px"></td>
                            <td>{{$value->description}}</td>
                            <td>{{$value->category->name}}</td>
                            <td style="display:flex;">
                                <a href="{{route('product.edit',$value->id)}}"><button class="btn btn-warning">Update</button></a>
                                <form action="{{route('product.destroy',$value->id)}}" method="post" style=" margin-left:10px;">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" onclick="return confirm('Bạn muốn xóa ?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                       @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div><!--end col-->
</div>
@endsection
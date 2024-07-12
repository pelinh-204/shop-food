@extends('admin.layout.main')
@section('maincontent')
<div class="row" style="margin-left: 250px; margin-top:80px">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                 <h5 class="card-title mb-0" >List Variant</h5>
                
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
                            <th data-ordering="false">ID</th>
                            <th data-ordering="false">Product_id</th>
                            <th data-ordering="false">Quantity</th>
                            <th data-ordering="false">Color</th>
                            <th data-ordering="false">Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       @foreach ($variant as $value )
                       <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{$value->id}}</td>
                            <td>{{$value->product->name}}</td>
                            <td>{{$value->quantity}}</td>
                            <td>{{$value->color}}</td>
                            <td><img src="{{asset('uploads/product/'.$value->image)}}" alt="" width="150px" height="150px"></td>
                            <td style="display:flex;">
                                <a href="{{route('variant.edit',$value->id)}}"><button class="btn btn-warning">Update</button></a>
                                <form action="{{route('variant.destroy',$value->id)}}" method="post" style=" margin-left:10px;">
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
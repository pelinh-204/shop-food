@extends('admin.layout.main')
@section('maincontent')
<div class="row" style="margin-left: 250px; margin-top:80px">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                 <h5 class="card-title mb-0" >List Sale</h5>
                
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
                            <th>Id</th>
                            <th>Discount</th>
                            <th>Title</th>
                            <th>Start</th>
                            <th>End</th>
                            <th>Option</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                       @foreach ($sales as $value)
                       <tr>
                            <th scope="row">
                                <div class="form-check">
                                    <input class="form-check-input fs-15" type="checkbox" name="checkAll" value="option1">
                                </div>
                            </th>
                            <td>{{$value->id}}</td>
                            <td>{{$value->discount}}</td>
                            <td>{{$value->title}}</td>
                            <td>{{$value->start}}</td>
                            <td>{{$value->end}}</td>

                            <td style="display:flex;">
                                <a href="{{route('sale.edit',$value->id)}}"><button class="btn btn-warning">Update</button></a>
                                <form action="{{route('sale.destroy',$value->id)}}" method="post" style=" margin-left:10px;">
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
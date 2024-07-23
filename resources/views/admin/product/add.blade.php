@extends('admin.layout.main')
@section('maincontent')
<div class="main-content mb-4" style="margin-top: 100px; margin-left:270px;margin-right:20px; ">
<h1>Add Products</h1>
    <form action="{{route('product.store')}}" enctype="multipart/form-data" method="post">
        @csrf
        <div class="mb-3">
            <label for="">Category_Id</label>
            <select name="category_id" id="" class="form-control">
                <option value="" selected>Chọn Id danh mục</option>
                @foreach ($category as $value )
                <option value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>

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
                <input type="text" class="form-control" placeholder="Product Name" aria-label="Username" aria-describedby="addon-wrapping" name="name">
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Price</span>
                <input type="text" class="form-control" placeholder="Price Product" aria-label="Username" aria-describedby="addon-wrapping" name="price">
            </div>
        </div>


        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Description</span>
                <textarea name="editor" id="editor"></textarea>
            </div>
        </div>

        <div class="mt-4">
            <div class="input-group flex-nowrap">
                <span class="input-group-text" id="addon-wrapping">Image</span>
                <input type="file" class="form-control"  name="file">
            </div>
        </div>

        <div class="mt-4">
        <label for="">Variant</label>
            <div class="input-group flex-nowrap" id="clonerow">
               <input type="file" name="product_variant[0][img]" id="" class="form-control w-25"><input type="number"name="product_variant[0][quantity] "placeholder="Quantity" class="form-control w-25"><input type="text" placeholder="Color"class="form-control w-25"name="product_variant[0][color]">
            </div>
        </div>  

        <div class="mt-4">
        <label for="">Sale_id</label>
                <select name="sale_id" id="" class="form-control">
                    <option value="" selected> Select Sale</option>
                    @foreach ($sale as $value )
                    <option value="{{$value->id}}">{{$value->discount}}%</option>
                    @endforeach
                </select>
        </div>  

        <div class="col-lg-12 mb-3 mt-4" >
        <a href="{{route('product.index')}}" class="btn btn-primary">List Product</a>
        <button type="submit" class="btn btn-primary">Submit</button>
        <div id="addvariant" class="btn btn-primary">Add variant</div>

    </div>
    </form>
</div>
<script>
    var index =1;
    document.getElementById('addvariant').addEventListener('click', function() {
        var cloneRow = document.getElementById('clonerow');
        var newClone = cloneRow.cloneNode(true);
        newClone.querySelectorAll('input').forEach(input => input.value = ''); // Reset các giá trị của các input
        let news =newClone.querySelectorAll('input');

        news[0].name = 'product_variant['+index+'][img]';
        news[1].name = 'product_variant['+index+'][quantity]';
        news[2].name = 'product_variant['+index+'][color]';
        index ++;
        // Thêm nút xóa vào row được clone
        var removeButton = document.createElement('button');
        removeButton.className = 'btn btn-danger remove';
        removeButton.type = 'button';
        removeButton.innerText = 'Xóa';
        removeButton.addEventListener('click', function() {
            newClone.remove();
        });

        var inputGroupAppend = document.createElement('div');
        inputGroupAppend.className = 'input-group-append';
        inputGroupAppend.appendChild(removeButton);

        newClone.appendChild(inputGroupAppend);

        cloneRow.parentNode.appendChild(newClone);
    });
</script>
@endsection
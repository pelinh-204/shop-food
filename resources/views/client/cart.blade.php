@extends('layout.main')
@section('main')
<main class="main">
    <div class="page-header text-center">
        <div class="container">
            <h1 class="page-title">Shopping Cart<span>Shop</span></h1>
        </div>
    </div>
    <nav aria-label="breadcrumb" class="breadcrumb-nav">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shopping Cart</li>
            </ol>
        </div>
    </nav>

    <div class="page-content">
        <div class="cart">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <table class="table table-cart table-mobile ">
                            <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product</th>
                                    <th>Color</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
                                    <th></th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($cart as $value )
                                <tr>
                                    <td>
                                        <img src="{{asset('uploads/product/'.$value->image)}}" width="180px" height="180px">
                                    </td>
                                    <td>
                                        <h3 class="product-title">
                                            <a href="#">{{$value->name}}</a>
                                        </h3>
                                    </td>
                                    <td class="color-col">{{$value->color}}</td>
                                    <td class="price-col" id="price_update">{{$value->price}}</td>
                                    <td class="quantity-col" id="sl">
                                        <div class="cart-product-quantity">
                                            <input value="{{$value->quantity}}" id="quantityUpdate" data-id="{{$value->id}} " type="number" class="form-control" value="1" min="1" step="1" data-decimals="0" required>
                                        </div>
                                    </td>
                                    <td class="total-col" id="tong">{{$value->total}}</td>
                                    <td class="remove-col"><button class="btn-remove"><i class="icon-close"></i></button></td>

                                </tr>

                                @endforeach
                                <tr>
                                    <td colspan="5" class="summary-title">Cart Total</td>
                                    <td class="total-col" id="tongall"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="cart-bottom">

                            <a href="{{route('checkout',Auth::user()->id)}}" class="btn btn-outline-primary-2 btn-order btn-block w-50">PROCEED TO CHECKOUT</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<script type="module">
    let prices = document.querySelectorAll('#price_update');
    let quantitys = document.querySelectorAll('#quantityUpdate');
    let totals = document.querySelectorAll('#tong');
    let tongall = document.querySelector('#tongall');
    let tt = 0;
    // console.log(price);
    // console.log(price,quantity,total);
    function updatetotalCart() {
        tt = 0;
        for (let i = 0; i < prices.length; i++) {
            const id = quantitys[i].dataset.id;
            const price = prices[i];
            const quantity = quantitys[i];
            const total = totals[i];
            // console.log(price);
            // console.log(quantity);
            // console.log(total);

            let tong = Number(price.innerHTML) * Number(quantity.value);
            const formattedNumber = tong.toLocaleString('vi-VN');
            total.innerHTML = `${formattedNumber} VNĐ`;
            let quantitysy =quantity.value;
            tt += tong;

            $.ajax({
                url: '{{route("cartQt")}}',
                method: 'GET',
                data: {
                    id,
                    tong,
                    quantitysy,
                },
                success: function() {
                    console.log('Thành công');
                }
            })
        }
        const formattt = tt.toLocaleString('vi-VN');
        tongall.innerHTML = `${formattt} VNĐ`
    }
    for (let i = 0; i < quantitys.length; i++) {
        quantitys[i].addEventListener('change', updatetotalCart);
    }
    updatetotalCart();
</script>
@endsection
@extends('layout.main')
@section('main')
<div class="container">
    <div class="heading  mb-3">
        <h2 class="title-lg"> Kết quả tìm kiếm cho : {{$data}}</h2>
    </div>
    < <div class="tab-content tab-content-carousel">
        <div class="tab-pane p-0 fade show active" id="trendy-all-tab" role="tabpanel" aria-labelledby="trendy-all-link">
            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                                "nav": false, 
                                "dots": true,
                                "margin": 20,
                                "loop": false,
                                "responsive": {
                                    "0": {
                                        "items":2
                                    },
                                    "480": {
                                        "items":2
                                    },
                                    "768": {
                                        "items":3
                                    },
                                    "992": {
                                        "items":4
                                    },
                                    "1200": {
                                        "items":4,
                                        "nav": true,
                                        "dots": false
                                    }
                                }
                            }'>
                @if($product->isEmpty())
                <p>No products found.</p>
                @else
                @foreach ($product as $value )
                <div class="product product-11 text-center">
                    <figure class="product-media">
                        <a href="{{route('detailPro',$value->id)}}">
                            <img src="{{asset('uploads/product/'.$value->image)}}" alt="Product image" class="product-image">
                            <img src="{{asset('uploads/product/'.$value->image)}}" alt="Product image" class="product-image-hover">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist"><span>add to wishlist</span></a>
                        </div>
                    </figure>

                    <div class="product-body">
                        <h3 class="product-title"><a href="product.html">{{$value->name}}</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            {{number_format($value->price)}}
                        </div><!-- End .product-price -->
                    </div><!-- End .product-body -->
                    <div class="product-action">
                        <a href="#" class="btn-product btn-cart"><span>Add to cart</span></a>
                    </div><!-- End .product-action -->
                </div>
                @endforeach
                @endif
            </div>
        </div>
</div>
@endsection
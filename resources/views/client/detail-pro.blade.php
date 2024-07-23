@extends('layout.main')
@section('main')
<style>
    .bovien {
        border: 2px solid red;
    }

    .span {

        border-radius: 3px;
        width: 50px;
        margin-left: 2px;


    }



    button {
        /* padding: 10px 10px;
     */
        background-color: white;
        border: 1px solid lightgray;
        width: 40px;
        height: 40px;
        font-size: 16px;
        cursor: pointer;
    }

    #numberInput {
        width: 60px;
        height: 40px;
        text-align: center;
        margin: 0 10px;
    }

    .span img {
        margin-left: 15px;
    }

    .color-rectangle {
        display: inline-block;
        position: relative;
        margin: 5px;
        width: 90px;
        /* Điều chỉnh kích thước của hình chữ nhật */
        height: 50px;
        /* border: 2px solid #aaa; Viền mặc định */
        border-radius: 4px;
        /* Góc bo viền */
    }

    /* Hide the radio button */
    .color-rectangle input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Style the label as the text */
    .color-rectangle label {
        display: block;
        width: 100%;
        height: 100%;
        text-align: center;
        line-height: 45px;
        /* Căn giữa văn bản theo chiều cao của hình chữ nhật */
        color: #333;
        /* Màu chữ */
        font-weight: bold;
        font-size: 16px;
        border: 3px solid gray;
        border-radius: 4px;

    }

    /* Style the border when radio button is checked */
    .color-rectangle input:checked+label {
        color: #333;
        /* Màu chữ khi được chọn */
        border: 3px solid red;
        border-radius: 4px;
    }

    .product-variant {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    }
</style>
<main class="main">
    <nav aria-label="breadcrumb" class="breadcrumb-nav border-0 mb-0">
        <div class="container d-flex align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Products</a></li>
                <li class="breadcrumb-item active" aria-current="page">Default</li>
            </ol>

            <nav class="product-pager ml-auto" aria-label="Product">
                <a class="product-pager-link product-pager-prev" href="#" aria-label="Previous" tabindex="-1">
                    <i class="icon-angle-left"></i>
                    <span>Prev</span>
                </a>

                <a class="product-pager-link product-pager-next" href="#" aria-label="Next" tabindex="-1">
                    <span>Next</span>
                    <i class="icon-angle-right"></i>
                </a>
            </nav><!-- End .pager-nav -->
        </div><!-- End .container -->
    </nav><!-- End .breadcrumb-nav -->

    <div class="page-content">
        <div class="container">
            <div class="product-details-top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-gallery product-gallery-vertical">
                            <div class="row">
                                <figure class="product-main-image">
                                    <img id="product-zoom" src="{{asset('uploads/product/'.$product->image)}}" data-zoom-image="{{asset('uploads/product/'.$product->image)}}" alt="product image">

                                    <a href="#" id="btn-product-gallery" class="btn-product-gallery">
                                        <i class="icon-arrows"></i>
                                    </a>
                                </figure><!-- End .product-main-image -->

                                <div id="product-zoom-gallery" class="product-image-gallery">
                                    @foreach ($product->variant as $item)
                                    <a class="product-gallery-item " href="#" data-image="{{asset('uploads/product/'.$item->image)}}" data-zoom-image="{{asset('uploads/product/'.$item->image)}}">
                                        <img src="{{asset('uploads/product/'.$item->image)}}" alt="product cross">
                                    </a>
                                    @endforeach
                                </div><!-- End .product-image-gallery -->
                            </div><!-- End .row -->
                        </div><!-- End .product-gallery -->
                    </div><!-- End .col-md-6 -->

                    <div class="col-md-6">
                        <div class="product-details">
                            <h1 class="product-title">{{$product->name}}</h1>

                            <div class="ratings-container">
                                <div class="ratings">
                                    <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                </div><!-- End .ratings -->
                                <a class="ratings-text" href="#product-review-link" id="review-link">( 2 Reviews )</a>
                            </div><!-- End .rating-container -->

                            <div class="product-price">
                                <span style="color: red; margin-left:10px;">
                                    @if($product->sale_id >0)
                                    <strike style="color:black;">{{ number_format($product->price) }}</strike>

                                    @endif
                                    @php
                                    if ($product->sale_id >0) {
                                    $amount = (intval($product->sale->discount) / 100) * intval($product->price);
                                    $real = $product->price - $amount;
                                    echo number_format($real, 0, ',', '.') . ' VNĐ';
                                    } else {
                                    echo number_format($product->price, 0, ',', '.') . ' VNĐ';
                                    }
                                    @endphp
                                </span>

                            </div>

                            <div class="product-content">
                                <p>{!! $product->description !!} </p>
                            </div><!-- End .product-content -->

                            <div class="details-filter-row details-row-size">
                                <label>Color:</label>

                                <div class="product-variant">

                                    @foreach ($product->variant as $key => $item)
                                    <div class="color-rectangle">
                                        <input type="radio" name="color-option" id="color-{{$key}}" data-color="{{$item->color}}" data-variant="{{$item->id}}" data-quantity="{{$item->quantity}}" data-image="{{$item->image}}">
                                        <label for="color-{{$key}}">{{$item->color}}</label>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            <div id="stocks"></div>
                            <!-- <form action="{{route('addCart')}}" method="POST"> -->
                            <!-- @csrf -->
                            <input type="hidden" id="name" name="name" value="{{$product->name}}">
                           @if ($product->sale_id>0)
                            @php
                            $amout = intval($product->sale->discount)/100 * intval($product->price);
                            $real = $product->price - $amount;
                            @endphp
                            <input type="hidden" id="price" name="price" value="{{$real}}">
                           @else
                           <input type="hidden" id="price" name="price" value="{{$product->price}}">
                           @endif
                            <input type="hidden" id="user_id" name="user_id" value="1">
                            <input type="hidden" id="idProduct" name="idproduct" value="{{$product->id}}">
                            <input type="hidden" id="Color" name="color">
                            <input type="hidden" id="dataQuantity" name="quantity" value="1">
                            <input type="hidden" id="Image" name="image">
                            <input type="hidden" id="variant">

                            <div class="details-filter-row details-row-size containers">
                                <button type="button" id="decrementButton">-</button>
                                <input type="number" id="numberInput" value="1" min="1" readonly>
                                <button type="button" id="incrementButton">+</button>
                            </div><!-- End .details-filter-row -->

                            <div class="product-details-action">
                               @if(Auth::user())
                               <button id="addToCart" class="btn-product btn-cart"><span>add to cart</span></button>

                               @else
                               <button onclick="alert('Bạn phải đăng nhập')" class="btn-product btn-cart"><span>add to cart</span></button>
@endif
                                <div class="details-action-wrapper">
                                    <a href="#" class="btn-product btn-wishlist" title="Wishlist"><span>Add to Wishlist</span></a>
                                    <a href="#" class="btn-product btn-compare" title="Compare"><span>Add to Compare</span></a>
                                </div><!-- End .details-action-wrapper -->
                            </div><!-- End .product-details-action -->
                            <!-- </form> -->
                            <!-- <button id="cart">add</button> -->
                            <script type="module">
                                $('#addToCart').click(function() {
                                    let name = $('#name').val();
                                    let price = $('#price').val();
                                    let user_id = $('#user_id').val();
                                    let idProduct = $('#idProduct').val();
                                    let dataQuantity = $('#dataQuantity').val();
                                    let color = $('#Color').val();
                                    let image = $('#Image').val();
                                    let variant = $('#variant').val();
                                    $.ajax({
                                        url: '{{route("CheckCart")}}',
                                        method: 'GET',
                                        data: {
                                            variant
                                        },
                                        success: function(data) {
                                            // console.log(data);
                                            let idCart = data.id;
                                            let prices = data.price;
                                            let tong = price * dataQuantity;
                                            let total = Number(data.total) + tong;
                                            let slht = data.quantity;

                                            if (data) {
                                                $.ajax({
                                                    url: '{{route("UpdateCart")}}',
                                                    method: 'GET',
                                                    data: {
                                                        idCart,
                                                        dataQuantity,
                                                        total,
                                                        slht
                                                    },
                                                    success: function() {
                                                        alert('Thêm vào giỏ hàng thành công');
                                                    }
                                                })
                                            } else {
                                                $.ajax({
                                                    url: '{{route("addCart")}}',
                                                    method: 'GET',
                                                    data: {
                                                        name,
                                                        price,
                                                        user_id,
                                                        idProduct,
                                                        dataQuantity,
                                                        color,
                                                        image,
                                                        variant
                                                    },
                                                    success: function() {
                                                        alert('Thêm vào giỏ hàng thành công');
                                                    }
                                                })
                                            }
                                        }
                                    })

                                })
                            </script>
                            <div class="product-details-footer">
                                <div class="product-cat">
                                    <span>Category:</span>
                                    <a href="#">Women</a>,
                                    <a href="#">Dresses</a>,
                                    <a href="#">Yellow</a>
                                </div><!-- End .product-cat -->

                                <div class="social-icons social-icons-sm">
                                    <span class="social-label">Share:</span>
                                    <a href="#" class="social-icon" title="Facebook" target="_blank"><i class="icon-facebook-f"></i></a>
                                    <a href="#" class="social-icon" title="Twitter" target="_blank"><i class="icon-twitter"></i></a>
                                    <a href="#" class="social-icon" title="Instagram" target="_blank"><i class="icon-instagram"></i></a>
                                    <a href="#" class="social-icon" title="Pinterest" target="_blank"><i class="icon-pinterest"></i></a>
                                </div>
                            </div><!-- End .product-details-footer -->
                        </div><!-- End .product-details -->
                    </div><!-- End .col-md-6 -->
                </div><!-- End .row -->
            </div><!-- End .product-details-top -->

            <div class="product-details-tab">
                <ul class="nav nav-pills justify-content-center" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="product-desc-link" data-toggle="tab" href="#product-desc-tab" role="tab" aria-controls="product-desc-tab" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-info-link" data-toggle="tab" href="#product-info-tab" role="tab" aria-controls="product-info-tab" aria-selected="false">Additional information</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-shipping-link" data-toggle="tab" href="#product-shipping-tab" role="tab" aria-controls="product-shipping-tab" aria-selected="false">Shipping & Returns</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="product-review-link" data-toggle="tab" href="#product-review-tab" role="tab" aria-controls="product-review-tab" aria-selected="false">Reviews (2)</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="product-desc-tab" role="tabpanel" aria-labelledby="product-desc-link">
                        <div class="product-desc-content">
                            <h3>Product Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                            <ul>
                                <li>Nunc nec porttitor turpis. In eu risus enim. In vitae mollis elit. </li>
                                <li>Vivamus finibus vel mauris ut vehicula.</li>
                                <li>Nullam a magna porttitor, dictum risus nec, faucibus sapien.</li>
                            </ul>

                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis. Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. </p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-info-tab" role="tabpanel" aria-labelledby="product-info-link">
                        <div class="product-desc-content">
                            <h3>Information</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. Suspendisse urna viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum. Aliquam porttitor mauris sit amet orci. </p>

                            <h3>Fabric & care</h3>
                            <ul>
                                <li>Faux suede fabric</li>
                                <li>Gold tone metal hoop handles.</li>
                                <li>RI branding</li>
                                <li>Snake print trim interior </li>
                                <li>Adjustable cross body strap</li>
                                <li> Height: 31cm; Width: 32cm; Depth: 12cm; Handle Drop: 61cm</li>
                            </ul>

                            <h3>Size</h3>
                            <p>one size</p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-shipping-tab" role="tabpanel" aria-labelledby="product-shipping-link">
                        <div class="product-desc-content">
                            <h3>Delivery & returns</h3>
                            <p>We deliver to over 100 countries around the world. For full details of the delivery options we offer, please view our <a href="#">Delivery information</a><br>
                                We hope you’ll love every purchase, but if you ever need to return an item you can do so within a month of receipt. For full details of how to make a return, please view our <a href="#">Returns information</a></p>
                        </div><!-- End .product-desc-content -->
                    </div><!-- .End .tab-pane -->
                    <div class="tab-pane fade" id="product-review-tab" role="tabpanel" aria-labelledby="product-review-link">
                        <div class="reviews">
                            <h3>Reviews (2)</h3>
                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">Samanta J.</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">6 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Good, perfect size</h4>

                                        <div class="review-content">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus cum dolores assumenda asperiores facilis porro reprehenderit animi culpa atque blanditiis commodi perspiciatis doloremque, possimus, explicabo, autem fugit beatae quae voluptas!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (2)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->

                            <div class="review">
                                <div class="row no-gutters">
                                    <div class="col-auto">
                                        <h4><a href="#">John Doe</a></h4>
                                        <div class="ratings-container">
                                            <div class="ratings">
                                                <div class="ratings-val" style="width: 100%;"></div><!-- End .ratings-val -->
                                            </div><!-- End .ratings -->
                                        </div><!-- End .rating-container -->
                                        <span class="review-date">5 days ago</span>
                                    </div><!-- End .col -->
                                    <div class="col">
                                        <h4>Very good</h4>

                                        <div class="review-content">
                                            <p>Sed, molestias, tempore? Ex dolor esse iure hic veniam laborum blanditiis laudantium iste amet. Cum non voluptate eos enim, ab cumque nam, modi, quas iure illum repellendus, blanditiis perspiciatis beatae!</p>
                                        </div><!-- End .review-content -->

                                        <div class="review-action">
                                            <a href="#"><i class="icon-thumbs-up"></i>Helpful (0)</a>
                                            <a href="#"><i class="icon-thumbs-down"></i>Unhelpful (0)</a>
                                        </div><!-- End .review-action -->
                                    </div><!-- End .col-auto -->
                                </div><!-- End .row -->
                            </div><!-- End .review -->
                        </div><!-- End .reviews -->
                    </div><!-- .End .tab-pane -->
                </div><!-- End .tab-content -->
            </div><!-- End .product-details-tab -->

            <h2 class="title text-center mb-4">You May Also Like</h2><!-- End .title text-center -->

            <div class="owl-carousel owl-simple carousel-equal-height carousel-with-shadow" data-toggle="owl" data-owl-options='{
                            "nav": false, 
                            "dots": true,
                            "margin": 20,
                            "loop": false,
                            "responsive": {
                                "0": {
                                    "items":1
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
                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <span class="product-label label-new">New</span>
                        <a href="product.html">
                            <img src="" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Women</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Brown paperbag waist <br>pencil skirt</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $60.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-thumbs">
                            <a href="#" class="active">
                                <img src="" alt="product desc">
                            </a>
                            <a href="#">
                                <img src="" alt="product desc">
                            </a>

                            <a href="#">
                                <img src="" alt="product desc">
                            </a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <span class="product-label label-out">Out of Stock</span>
                        <a href="product.html">
                            <img src="" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Jackets</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Khaki utility boiler jumpsuit</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            <span class="out-price">$120.00</span>
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 6 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <span class="product-label label-top">Top</span>
                        <a href="product.html">
                            <img src="" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Shoes</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Light brown studded Wide fit wedges</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $110.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 80%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 1 Reviews )</span>
                        </div><!-- End .rating-container -->

                        <div class="product-nav product-nav-thumbs">
                            <a href="#" class="active">
                                <img src="" alt="product desc">
                            </a>
                            <a href="#">
                                <img src="" alt="product desc">
                            </a>

                            <a href="#">
                                <img src="" alt="product desc">
                            </a>
                        </div><!-- End .product-nav -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Jumpers</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Yellow button front tea top</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $56.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 0%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 0 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->

                <div class="product product-7 text-center">
                    <figure class="product-media">
                        <a href="product.html">
                            <img src="" alt="Product image" class="product-image">
                        </a>

                        <div class="product-action-vertical">
                            <a href="#" class="btn-product-icon btn-wishlist btn-expandable"><span>add to wishlist</span></a>
                            <a href="popup/quickView.html" class="btn-product-icon btn-quickview" title="Quick view"><span>Quick view</span></a>
                            <a href="#" class="btn-product-icon btn-compare" title="Compare"><span>Compare</span></a>
                        </div><!-- End .product-action-vertical -->

                        <div class="product-action">
                            <a href="#" class="btn-product btn-cart"><span>add to cart</span></a>
                        </div><!-- End .product-action -->
                    </figure><!-- End .product-media -->

                    <div class="product-body">
                        <div class="product-cat">
                            <a href="#">Jeans</a>
                        </div><!-- End .product-cat -->
                        <h3 class="product-title"><a href="product.html">Blue utility pinafore denim dress</a></h3><!-- End .product-title -->
                        <div class="product-price">
                            $76.00
                        </div><!-- End .product-price -->
                        <div class="ratings-container">
                            <div class="ratings">
                                <div class="ratings-val" style="width: 20%;"></div><!-- End .ratings-val -->
                            </div><!-- End .ratings -->
                            <span class="ratings-text">( 2 Reviews )</span>
                        </div><!-- End .rating-container -->
                    </div><!-- End .product-body -->
                </div><!-- End .product -->
            </div><!-- End .owl-carousel -->
        </div><!-- End .container -->

    </div><!-- End .page-content -->

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let variants = document.querySelectorAll('.span');

            variants.forEach(function(variant) {
                variant.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Remove active class from all spans
                    variants.forEach(function(v) {
                        v.classList.remove('bovien');
                    });

                    // Log data-price of the clicked span
                    let quantity = this.dataset.price;
                    console.log(quantity);

                    // Add active class to the clicked span
                    this.classList.add('bovien');

                    // Update the stock element if needed

                });
            });
        });
    </script>
    <script>
        var max = 0;
        const colorOptions = document.querySelectorAll('input[name="color-option"]');
        for (const input of colorOptions) {
            // console.log(input)
            input.addEventListener('click', function() {
                var quantity = input.dataset.quantity;
                var color = input.dataset.color;
                var image = input.dataset.image;
                var variant = input.dataset.variant;
                document.getElementById('Color').value = color;
                document.getElementById('variant').value = variant;

                document.getElementById('Image').value = image;
                max = quantity;
                // console.log(quantity, color, image);
                let stock = document.querySelector('#stocks');
                if (stock) {
                    stock.innerText = `Stock : ${quantity} items`; // or any logic you want
                }
            })
        }
        document.addEventListener("DOMContentLoaded", function() {
            const numberInput = document.getElementById('numberInput');
            const incrementButton = document.getElementById('incrementButton');
            const decrementButton = document.getElementById('decrementButton');

            // Xử lý khi click vào nút tăng (+)
            incrementButton.addEventListener('click', function() {
                let value = parseInt(numberInput.value);

                if (max == 0) {
                    alert('Bạn chưa chọn màu?');
                    numberInput.value = 1;
                    document.getElementById('dataQuantity').value = 1;

                    return false;
                } else if (value == max) {
                    alert(`Shop chỉ còn ${max} sản phẩm`);
                    document.getElementById('dataQuantity').value = max;

                    numberInput.value = max;
                    return false;
                } else {
                    numberInput.value = value + 1;
                    document.getElementById('dataQuantity').value = numberInput.value;
                }
            });

            // Xử lý khi click vào nút giảm (-)
            decrementButton.addEventListener('click', function() {
                let value = parseInt(numberInput.value);
                if (value == 1) {
                    alert('Số lượng sản phẩm không thể nhỏ hơn 1');
                    numberInput.value = value + 1;
                }
            });


            // Xử lý khi click vào nút giảm (-)
            decrementButton.addEventListener('click', function() {
                let currentValue = parseInt(numberInput.value) - 1;
                document.getElementById('dataQuantity').value = currentValue;

                if (currentValue >= 0) {
                    numberInput.value = currentValue.toString();
                }
            });
        });
    </script>

    let name = $('#name').val();
    let price = $('#price').val();
    let user_id = $('#user_id').val();
    let idProduct = $('#idProduct').val();
    let dataQuantity = $('#dataQuantity').val();
    let dataColor = document.getElementById('Color');
    let dataImage = document.getElementById('Image');

    $('#addToCart').click(function() {
    console.log(dataColor);

    // $.ajax({
    // url:'{{route("addCart")}}',
    // method:'GET',
    // data:{
    // name,
    // price,
    // user_id,
    // idProduct,
    // dataQuantity,
    // dataImage,
    // dataColor
    // },
    // success:function(){
    // alert('Thêm vào giỏ hàng thành công');
    // }
    })
    });

    // })
    </script> -->
</main><!-- End .main -->
@endsection
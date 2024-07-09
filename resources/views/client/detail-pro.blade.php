@extends('layout.main')
@section('main')
<main>
            <!-- breadcrumb start -->
            <section class="breadcrumb-area">
                <div class="container">
                    <div class="col">
                        <div class="row">
                            <div class="breadcrumb-index">
                                <!-- breadcrumb-list start -->
                                <ul class="breadcrumb-ul">
                                    <li class="breadcrumb-li">
                                        <a class="breadcrumb-link" href="index.html">Home</a>
                                    </li>
                                    <li class="breadcrumb-li">
                                        <span class="breadcrumb-text">Areca palm</span>
                                    </li>
                                </ul>
                                <!-- breadcrumb-list end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb end -->
            <!-- pro-detail-page start -->
            <section class="product-details-page pro-style7 bg-color section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="pro-details-pos pro-details-right-pos">
                                <!-- Product slider start -->
                                <div class="product-detail-slider product-details-tb product-details product-details-sticky">
                                    <!-- Product slider start -->
                                    <div class="product-detail-img product-detail-img-bottom">
                                        <div class="product-img-top">
                                            <button class="full-view"><i class="bi bi-arrows-fullscreen"></i></button>
                                            <!-- blog slick slider start -->
                                            <div class="slider-big-7 slick-slider">
                                                <div class="slick-slide ">
                                                    <a href="{{asset('img/product/home1-pro-8.jpg')}}" class="product-single">
                                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('img/product/home1-pro-8.jpg');">
                                                            <img src="img/product/home1-pro-8.jpg" class="img-fluid" alt="pro-1">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="img/product/home1-pro-9.jpg" class="product-single">
                                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('img/product/home1-pro-9.jpg');">
                                                            <img src="{{asset('img/product/home1-pro-9.jpg')}}" class="img-fluid" alt="pro-2">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="img/product/home1-pro-10.jpg" class="product-single">
                                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('img/product/home1-pro-10.jpg');">
                                                            <img src="{{asset('img/product/home1-pro-10.jpg')}}" class="img-fluid" alt="p-3">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="img/product/home1-pro-11.jpg" class="product-single">
                                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('img/product/home1-pro-11.jpg');">
                                                            <img src="{{asset('img/product/home1-pro-11.jpg')}}" class="img-fluid" alt="pro-4">
                                                        </figure>
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="img/product/home1-pro-12.jpg" class="product-single">
                                                        <figure class="zoom" onmousemove="zoom(event)" style="background-image: url('img/product/home1-pro-12.jpg');">
                                                            <img src="{{asset('img/product/home1-pro-12.jpg')}}" class="img-fluid" alt="pro-5">
                                                        </figure>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- blog slick slider end -->
                                        <!-- small slick-slider start -->
                                        <div class="pro-slider">
                                            <div class="slider-small-7 pro-detail-slider small-slider">
                                                <div class="slick-slide ">
                                                    <a href="javascript:void(0)" class="product-single--thumbnail">
                                                        <img src="{{asset('img/product/home1-pro-8.jpg')}}" class="img-fluid" alt="pro-1">
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="javascript:void(0)" class="product-single--thumbnail">
                                                        <img src="{{asset('img/product/home1-pro-9.jpg')}}" class="img-fluid" alt="pro-2">
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="javascript:void(0)" class="product-single--thumbnail">
                                                        <img src="{{asset('img/product/home1-pro-10.jpg')}}" class="img-fluid" alt="pro-3">
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="javascript:void(0)" class="product-single--thumbnail">
                                                        <img src="{{asset('img/product/home1-pro-11.jpg')}}" class="img-fluid" alt="pro-4">
                                                    </a>
                                                </div>
                                                <div class="slick-slide ">
                                                    <a href="javascript:void(0)" class="product-single--thumbnail">
                                                        <img src="{{asset('img/product/home1-pro-12.jpg')}}" class="img-fluid" alt="pro-5">
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- small slick-slider end -->
                                    </div>
                                    <!-- Product slider end -->
                                </div>
                                <!-- peoduct detail start -->
                                <div class="product-details-wrap product-details-tb product-details">
                                    <div class="product-details-info">
                                        <div class="pro-nprist">
                                            <div class="product-info">
                                                <!-- product-title start -->
                                                <div class="product-title">
                                                    <h2>Areca palm</h2>
                                                </div>
                                                <!-- product-title end -->
                                            </div>
                                            <div class="product-info">
                                                <!-- product-rating start -->
                                                <div class="product-ratting">
                                                    <span class="pro-ratting">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </span>
                                                    <span class="spr-badge-caption">2 Reviews</span>
                                                </div>
                                                <!-- product-rating end -->
                                            </div>
                                            <div class="product-info">
                                                <div class="pro-prlb pro-sale">
                                                    <div class="price-box">
                                                        <span class="new-price">Rs. 22.00</span>
                                                        <span class="old-price">Rs. 45.00</span>
                                                        <span class="percent-count">22</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-inventory">
                                                    <div class="stock-inventory stock-more">
                                                        <p class="text-success">Hurry up! only
                                                            <span class="available-stock bg-success">51</span>
                                                            <span>products left in stock!</span>
                                                        </p>
                                                    </div>
                                                    <div class="stock-inventory stock-zero collapse">
                                                        <p class="text-danger">Unfortunately
                                                            <span class="available-stock bg-danger">51</span>
                                                            <span>products left in stock!</span>
                                                        </p>
                                                    </div>
                                                    <div class="product-variant">
                                                        <h6>Availability:</h6>
                                                        <span class="stock-qty in-stock text-success">
                                                            <span>In stock<i class="bi bi-check2"></i></span>
                                                        </span>
                                                        <span class="stock-qty out-stock text-danger collapse">
                                                            <span>Out of stock</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="pro-detail-action">
                                                    <form method="get" class="cart">
                                                        <div class="product-variant-option">
                                                            <div class="swatch-variant">
                                                                <div class="swatch clearfix Color">
                                                                    <div class="header">
                                                                        <h6>
                                                                        <span>Color:</span>
                                                                        <span class="data-value">Black</span>
                                                                        </h6>
                                                                    </div>
                                                                    <div class="variant-wrap">
                                                                        <div class="variant-property">
                                                                            <div class="swatch-element color Black">
                                                                                <input type="radio" name="option-0" value="Black" checked>
                                                                                <label>Black</label>
                                                                            </div>
                                                                            <div class="swatch-element color Gray">
                                                                                <input type="radio" name="option-0" value="Gray">
                                                                                <label>Gray</label>
                                                                            </div>
                                                                            <div class="swatch-element color Gold">
                                                                                <input type="radio" name="option-0" value="Gold">
                                                                                <label>Gold</label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <form method="post" class="cart">
                                                    <div class="pro-detail-button">
                                                        <div class="product-quantity-button">
                                                            <div class="product-quantity-action">
                                                                <h6>Quantity:</h6>
                                                                <div class="product-quantity">
                                                                    <div class="cart-plus-minus">
                                                                        <button class="dec qtybutton minus"><i class="feather-minus"></i></button>
                                                                        <input type="text" name="quantity" value="1">
                                                                        <button class="inc qtybutton plus"><i class="feather-plus"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn add-to-cart ajax-spin-cart">
                                                            <span class="cart-title">Add to cart</span>
                                                            </button>
                                                        </div>
                                                        <a href="cart-empty.html" class="btn btn-cart btn-theme">
                                                            <span>Buy now</span>
                                                        </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="product-info">
                                                <div class="form-group">
                                                    <a href="#deliver-modal" data-bs-toggle="modal">Delivery &amp; return</a>
                                                    <a href="#que-modal" data-bs-toggle="modal">Ask a question</a>
                                                </div>
                                            </div>
                                            <div class="modal fade deliver-modal" id="deliver-modal" tabindex="-1" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="pop-close" data-bs-dismiss="modal" aria-label="Close"><i class="feather-x"></i></button>
                                                            <div class="delivery-block">
                                                                <div class="space-block">
                                                                    <h4>Delivery</h4>
                                                                    <p>All orders shipped with UPS Express.</p>
                                                                    <p>Always free shipping for orders over US $250.</p>
                                                                    <p>All orders are shipped with a UPS tracking number.</p>
                                                                </div>
                                                                <div class="space-block">
                                                                    <h4>Returns</h4>
                                                                    <p>Items returned within 14 days of their original shipment date in same as new condition will be eligible for a full refund or store credit.</p>
                                                                    <p>Refunds will be charged back to the original form of payment used for purchase.</p>
                                                                    <p>Customer is responsible for shipping charges when making returns and shipping/handling fees of original purchase is non-refundable.</p>
                                                                    <p>All sale items are final purchases.</p>
                                                                </div>
                                                                <div class="space-block">
                                                                    <h4>Help</h4>
                                                                    <p>Give us a shout if you have any other questions and/or concerns.</p>
                                                                    <p>Email:<a href="mailto:contact@domain.com">demo@gmail.com</a></p>
                                                                    <p>Phone:<a href="tel:+1(23)456789">+1 (23) 456 789</a></p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade que-modal" id="que-modal" aria-modal="true" tabindex="-1" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">
                                                        <div class="modal-body">
                                                            <button type="button" class="pop-close" data-bs-dismiss="modal" aria-label="Close"><i
                                                            class="feather-x"></i></button>
                                                            <div class="product-form-list">
                                                                <div class="single-product-wrap">
                                                                    <div class="product-image">
                                                                        <a class="pro-img" href="collection.html">
                                                                            <img class="img-fluid img1 resp-img1" src="img/product/home1-pro-15.jpg"
                                                                            alt="p-1">
                                                                            <img class="img-fluid img2 resp-img2" src="img/product/home1-pro-16.jpg"
                                                                            alt="p-2">
                                                                        </a>
                                                                    </div>
                                                                    <div class="product-content">
                                                                        <div class="pro-title-price">
                                                                            <h6><a href="product-template.html">Castle cactus</a></h6>
                                                                            <div class="product-price">
                                                                                <div class="price-box">
                                                                                    <span class="new-price">Rs. 24.00</span>
                                                                                    <span class="old-price">Rs. 29.00</span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="ask-form">
                                                                <h6>Ask a question</h6>
                                                                <form method="post" class="contact-form">
                                                                    <input type="hidden" name="contact[product url]" value="">
                                                                    <div class="form-grp">
                                                                        <input type="text" name="contact[name]" required="" placeholder="Your name*">
                                                                        <input type="text" name="contact[phone]" placeholder="Your phone number">
                                                                        <input type="email" name="contact[email]" required="" placeholder="Your email*">
                                                                        <textarea name="contact[question]" rows="4" required=""
                                                                        placeholder="Your message*"></textarea>
                                                                        <p>* Required fields</p>
                                                                        <button type="submit" class="btn-style2">Submit Now</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <p><span>🚚</span> Item will be delivered on or before <span id="ten-days-ahead">Mar 3 2024</span></p>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-actions">
                                                    <!-- pro-deatail wishlist start -->
                                                    <div class="pro-aff-che">
                                                        <a href="wishlist-product.html" class="wishlist">
                                                            <span class="wishlist-icon action-wishlist tile-actions--btn wishlist-btn">
                                                                <span class="add-wishlist"><i class="bi bi-heart"></i></span>
                                                            </span>
                                                            <span class="wishlist-text">Wishlist</span>
                                                        </a>
                                                    </div>
                                                    <!-- pro-deatail wishlist end -->
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-sku">
                                                    <h6>SKU:</h6>
                                                    <span class="variant-sku">abccd-18</span>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="share-icons">
                                                    <h6>Share:</h6>
                                                    <div class="pro-social">
                                                        <ul class="social-icon">
                                                            <li>
                                                                <a href="https://www.facebook.com/" class="facebook"><i class="fab fa-facebook-f"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://twitter.com/" class="twitter"><i class="fab fa-twitter"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://web.telegram.org/" class="twitter"><i class="fab fa-telegram"></i></a>
                                                            </li>
                                                            <li>
                                                                <a href="https://in.pinterest.com/" class="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <div class="product-payment-image">
                                                    <ul class="payment-icon">
                                                        <li>
                                                            <a href="index.html"><svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><svg xmlns="http://www.w3.org/2000/svg" role="img" aria-labelledby="pi-american-express" viewBox="0 0 38 24" width="38" height="24"><title id="pi-american-express">American Express</title><path fill="#000" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3Z" opacity=".07"></path><path fill="#006FCF" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32Z"></path><path fill="#FFF" d="M22.012 19.936v-8.421L37 11.528v2.326l-1.732 1.852L37 17.573v2.375h-2.766l-1.47-1.622-1.46 1.628-9.292-.02Z"></path><path fill="#006FCF" d="M23.013 19.012v-6.57h5.572v1.513h-3.768v1.028h3.678v1.488h-3.678v1.01h3.768v1.531h-5.572Z"></path><path fill="#006FCF" d="m28.557 19.012 3.083-3.289-3.083-3.282h2.386l1.884 2.083 1.89-2.082H37v.051l-3.017 3.23L37 18.92v.093h-2.307l-1.917-2.103-1.898 2.104h-2.321Z"></path><path fill="#FFF" d="M22.71 4.04h3.614l1.269 2.881V4.04h4.46l.77 2.159.771-2.159H37v8.421H19l3.71-8.421Z"></path><path fill="#006FCF" d="m23.395 4.955-2.916 6.566h2l.55-1.315h2.98l.55 1.315h2.05l-2.904-6.566h-2.31Zm.25 3.777.875-2.09.873 2.09h-1.748Z"></path><path fill="#006FCF" d="M28.581 11.52V4.953l2.811.01L32.84 9l1.456-4.046H37v6.565l-1.74.016v-4.51l-1.644 4.494h-1.59L30.35 7.01v4.51h-1.768Z"></path></svg></a>
                                                        </li>
                                                        <li>
                                                            <a href="index.html"><svg viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" width="38" height="24" role="img" aria-labelledby="pi-paypal"><title id="pi-paypal">PayPal</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path fill="#003087" d="M23.9 8.3c.2-1 0-1.7-.6-2.3-.6-.7-1.7-1-3.1-1h-4.1c-.3 0-.5.2-.6.5L14 15.6c0 .2.1.4.3.4H17l.4-3.4 1.8-2.2 4.7-2.1z"></path><path fill="#3086C8" d="M23.9 8.3l-.2.2c-.5 2.8-2.2 3.8-4.6 3.8H18c-.3 0-.5.2-.6.5l-.6 3.9-.2 1c0 .2.1.4.3.4H19c.3 0 .5-.2.5-.4v-.1l.4-2.4v-.1c0-.2.3-.4.5-.4h.3c2.1 0 3.7-.8 4.1-3.2.2-1 .1-1.8-.4-2.4-.1-.5-.3-.7-.5-.8z"></path><path fill="#012169" d="M23.3 8.1c-.1-.1-.2-.1-.3-.1-.1 0-.2 0-.3-.1-.3-.1-.7-.1-1.1-.1h-3c-.1 0-.2 0-.2.1-.2.1-.3.2-.3.4l-.7 4.4v.1c0-.3.3-.5.6-.5h1.3c2.5 0 4.1-1 4.6-3.8v-.2c-.1-.1-.3-.2-.5-.2h-.1z"></path></svg></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- peoduct detail end -->
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- pro-detail-page end -->
            <!-- collapse-tab start -->
            <section class="product-description-tab pro-style7 section-pt">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="product-tab collpase-tab">
                                <ul class="tab" role="tablist" id="collapse-tab">
                                    <li role="presentation">
                                        <a href="#description" class="tab-title active collapsed" data-bs-toggle="collapse" aria-expanded="true">
                                            <h6 class="tab-name">Description</h6>
                                            <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                        </a>
                                        <div class="collapse show" id="description" data-bs-parent="#collapse-tab" role ="tab" aria-expanded="true">
                                            <div class="description-review-text">
                                                <div class="product-description">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                    <h6>About this item</h6>
                                                    <ul>
                                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                                                        <li>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                                        <li>As Cicero would put it, “Um, not so fast.”</li>
                                                        <li>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</li>
                                                        <li>Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</li>
                                                        <li>Nor is there anyone who loves or pursues or desires to obtain pain of itself.</li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="presentation">
                                        <a href="#additional-info" class="tab-title collapsed" data-bs-toggle="collapse">
                                            <h6 class="tab-name">Additional info</h6>
                                            <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                        </a>
                                        <div class="collapse" id="additional-info" data-bs-parent="#collapse-tab">
                                            <div class="description-review-text">
                                                <div class="product-additional-info">
                                                    <table>
                                                        <tbody>
                                                            <tr class="product-info">
                                                                <th>Vendor</th>
                                                                <td>
                                                                    <a href="javascript:void(0)">Panno</a>
                                                                </td>
                                                            </tr>
                                                            <tr class="product-info">
                                                                <th>Type</th>
                                                                <td>
                                                                    <a href="javascript:void(0)">Plant</a>
                                                                </td>
                                                            </tr>
                                                            <tr class="product-info">
                                                                <th>Color</th>
                                                                <td>Black, Gray, Gold</td>
                                                            </tr>
                                                            <tr class="product-info">
                                                                <th>Sku</th>
                                                                <td>abccd-13</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="presentation">
                                        <a href="#other-content" class="tab-title collapsed" data-bs-toggle="collapse">
                                            <h6 class="tab-name">Other content</h6>
                                            <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                        </a>
                                        <div class="collapse" id="other-content" data-bs-parent="#collapse-tab">
                                            <div class="description-review-text">
                                                <div class="product-custom-content">
                                                    <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler text can be very useful when the focus is meant to be on design, not content.</p>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="presentation">
                                        <a href="#reviews" class="tab-title collapsed" data-bs-toggle="collapse">
                                            <h6 class="tab-name">Reviews</h6>
                                            <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                        </a>
                                        <div class="collapse" id="reviews" data-bs-parent="#collapse-tab">
                                            <div class="description-review-text">
                                                <div id="product-reviews">
                                                    <div class="spr-container">
                                                        <div class="spr-header">
                                                            <h2 class="spr-header-title">Customer reviews</h2>
                                                            <div class="spr-summary rte">
                                                                <span class="spr-summary-caption">
                                                                    <span class="spr-summary-caption">No reviews yet</span>
                                                                </span>
                                                                <span class="spr-summary-actions">
                                                                    <a href="#add-review" data-bs-toggle="collapse" class="spr-summary-actions-newreview">Write a review</a>
                                                                </span>
                                                            </div>
                                                            <!-- product-rating end -->
                                                        </div>
                                                        <div class="spr-content">
                                                            <!-- spar-from start -->
                                                            <div class="spr-form collapse" id="add-review">
                                                                <form method="post" class="new-review-form">
                                                                    <h3 class="spr-form-title">Write a review</h3>
                                                                    <fieldset class="spr-form-contact">
                                                                        <div class="spr-form-contact-name">
                                                                            <label class="spr-form-label">Name</label>
                                                                            <input type="text" name="q" class="spr-form-input spr-form-input-text " placeholder="Enter your name">
                                                                        </div>
                                                                        <div class="spr-form-contact-email">
                                                                            <label class="spr-form-label">Email address</label>
                                                                            <input type="email" name="q" class="spr-form-input spr-form-input-email" placeholder="john.smith@example.com">
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="spr-form-review">
                                                                        <div class="spr-form-review-rating">
                                                                            <label class="spr-form-label">Rating</label>
                                                                            <div class="product-ratting">
                                                                                <span class="pro-ratting">
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star"></i>
                                                                                    <i class="fas fa-star-half-alt"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <div class="spr-form-review-title">
                                                                            <label class="spr-form-label">Review title</label>
                                                                            <input type="text" name="q" class="spr-form-input spr-form-input-text " placeholder="Give your review a title">
                                                                        </div>
                                                                        <div class="spr-form-review-body">
                                                                            <label class="spr-form-label">Body of review
                                                                                <span>
                                                                                    <span class="spr-form-review-body-charactersremaining">(1500)</span>
                                                                                </span>
                                                                            </label>
                                                                            <div class="spr-form-input">
                                                                                <textarea class="spr-form-input spr-form-input-textarea" placeholder="Write your comments here" rows="10"></textarea>
                                                                            </div>
                                                                        </div>
                                                                    </fieldset>
                                                                    <fieldset class="spr-form-actions">
                                                                        <input type="submit" name="q" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
                                                                    </fieldset>
                                                                </form>
                                                            </div>
                                                            <!-- spar-from end -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li role="presentation">
                                        <a href="#collapse-video" class="tab-title collapsed" data-bs-toggle="collapse" role="tab" aria-expanded="false">
                                            <h6 class="tab-name">Video</h6>
                                            <span class="tab-icon"><i class="bi bi-plus"></i></span>
                                        </a>
                                        <div class="collapse" id="collapse-video" data-bs-parent="#collapse-tab">
                                            <div class="description-review-text">
                                                <div class="video">
                                                    <div class="video-wrapper">
                                                        <iframe src="https://www.youtube.com/embed/0Aja_yP93PY" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- collapse-tab end -->
            <!-- product start -->
            <section class="product-tab section-ptb">
                <div class="collection-category">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col">
                                <div class="section-capture tab">
                                    <div class="section-title">
                                        <h2><span>Popular product</span></h2>
                                    </div>
                                </div>
                                <div class="collection-wrap">
                                    <div class="collection-slider swiper" id="new-product">
                                        <div class="swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-1.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-2.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Strelitzia nicolai</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 44.00</span>
                                                                            <span class="old-price">Rs. 49.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Strelitzia</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-3.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-4.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Aloe vera plant</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 61.00</span>
                                                                            <span class="old-price">Rs. 69.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Aloe vera</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-5.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-6.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Chinese evergreen</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 24.00</span>
                                                                            <span class="old-price">Rs. 29.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Evergreen</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-7.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-8.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Wheat grass</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 21.00</span>
                                                                            <span class="old-price">Rs. 25.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Grass</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-9.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-10.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Castle cactus</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 25.00</span>
                                                                            <span class="old-price">Rs. 35.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Castle</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-11.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-12.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Bird of paradise</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 21.00</span>
                                                                            <span class="old-price">Rs. 25.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Paradise</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-13.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-14.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Snake plant</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 54.00</span>
                                                                            <span class="old-price">Rs. 65.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Snake</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-15.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-16.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Areca palm</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 61.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Palm</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="single-product-wrap">
                                                    <div class="product-image banner-hover">
                                                        <a href="product-template.html" class="pro-img">
                                                            <img src="img/product/home1-pro-17.jpg" class="img-fluid img1 mobile-img1" alt="p1">
                                                            <img src="img/product/home1-pro-18.jpg" class="img-fluid img2 mobile-img2" alt="p2">
                                                        </a>
                                                        <div class="product-action product-cart-btn">
                                                            <a href="#add-to-cart" class="add-to-cart">
                                                                <span class="cart-title">
                                                                    <span class="add-c-title">
                                                                        <span class="tooltip-text">Add to cart</span>
                                                                        <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                        <span class="add-title">Add to cart</span>
                                                                    </span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="product-action">
                                                            <a href="wishlist-product.html" class="wishlist">
                                                                <span class="tooltip-text">Wishlist</span>
                                                                <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                            </a>
                                                            <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                <span class="tooltip-text">Quickview</span>
                                                                <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="product-caption">
                                                        <div class="product-content">
                                                            <div class="product-title">
                                                                <div class="pro-title-price">
                                                                    <h6><a href="product-template.html">Howea forsteriana</a></h6>
                                                                    <div class="product-price">
                                                                        <div class="price-box">
                                                                            <span class="new-price">Rs. 22.00</span>
                                                                            <span class="old-price">Rs. 45.00</span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="product-name">
                                                                    <a class="product-type" href="collection.html">Howea</a>
                                                                    <a class="product-vendor" href="collection.html">Panno</a>
                                                                </div>
                                                            </div>
                                                            <div class="product-ratting">
                                                                <span class="pro-ratting">
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                    <i class="fa-regular fa-star"></i>
                                                                </span>
                                                            </div>
                                                            <div class="product-description">
                                                                <p>The purpose of lorem ipsum is to create a natural looking block of text (sentence, paragraph, page, etc.) that doesn't distract from the layout. A practice not without controversy, laying out pages with meaningless filler...</p>
                                                            </div>
                                                            <div class="product-action">
                                                                <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                                    <span class="tooltip-text">Quickview</span>
                                                                    <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                                </a>
                                                                <a href="#add-to-cart" class="add-to-cart" data-bs-toggle="modal" data-bs-target="#add-to-cart">
                                                                    <span class="tooltip-text">Add to cart</span>
                                                                    <span class="pro-action-icon"><i class="feather-shopping-bag"></i></span>
                                                                </a>
                                                                <a href="wishlist-product.html" class="wishlist">
                                                                    <span class="tooltip-text">Wishlist</span>
                                                                    <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="collection-button">
                                            <a href="collection.html" class="btn btn-style">View product</a>
                                        </div>
                                    </div>
                                    <div class="swiper-buttons">
                                        <div class="swiper-buttons-wrap">
                                            <button class="swiper-prev swiper-prev-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="15 18 9 12 15 6"></polyline></svg></span></button>
                                            <button class="swiper-next swiper-next-new"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><polyline points="9 18 15 12 9 6"></polyline></svg></span></button>
                                        </div>
                                    </div>
                                    <div class="swiper-dots">
                                        <div class="swiper-pagination swiper-pagination-new"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- product end -->
        </main>
@endsection
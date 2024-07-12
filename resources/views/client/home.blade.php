@extends('layout.main')
@section('main')
<main id="main-content">
    <!-- main-slider start -->
    <section class="slider-content">
        <div class="home-slider owl-carousel owl-theme" id="home-slider5">
            <div class="item">
                <div class="slider-image-info">
                    <div class="slider-image">
                        <img src="{{asset('img/banner/ban5.jpg')}}"  alt="slider1" width="980px" height="550px">
                    </div>
                    <!-- <div class="container slider-text-content">
                        <div class="slider-text-info slider-content-right slider-text-left">
                            <h2><span>Filled with nutrients</span></h2>
                            <div class="slider-price">
                                <span class="slider-review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </span>
                                <h2 class="price-text">
                                    <span>$24.00</span>
                                    <span>$37.00</span>
                                </h2>
                            </div>
                            <div class="main-btn">
                                <div class="slider-link">
                                    <a href="collection.html.html" class="btn btn-style">Shop now</a>
                                    <a href="collection.html.html" class="btn btn-style3">All product</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="slider-image-info">
                    <div class="slider-image">
                        <img src="{{ asset('img/banner/ban1.jpg') }} " alt="slider2"width="980px" height="550px">
                    </div>
                    <!-- <div class="container slider-text-content">
                        <div class="slider-text-info slider-content-right slider-text-left">
                            <h2><span>Filled with nutrients</span></h2>
                            <div class="slider-price">
                                <span class="slider-review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </span>
                                <h2 class="price-text">
                                    <span>$24.00</span>
                                    <span>$37.00</span>
                                </h2>
                            </div>
                            <div class="main-btn">
                                <div class="slider-link">
                                    <a href="collection.html.html" class="btn btn-style">Shop now</a>
                                    <a href="collection.html.html" class="btn btn-style3">All product</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="slider-image-info">
                    <div class="slider-image">
                        <img src="{{asset('img/banner/ban3.jpg')}}"width="980px" height="550px" alt="slider3">
                    </div>
                    <!-- <div class="container slider-text-content">
                        <div class="slider-text-info slider-content-right slider-text-left">
                            <h2><span>Filled with nutrients</span></h2>
                            <div class="slider-price">
                                <span class="slider-review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </span>
                                <h2 class="price-text">
                                    <span>$24.00</span>
                                    <span>$37.00</span>
                                </h2>
                            </div>
                            <div class="main-btn">
                                <div class="slider-link">
                                    <a href="collection.html.html" class="btn btn-style">Shop now</a>
                                    <a href="collection.html.html" class="btn btn-style3">All product</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="item">
                <div class="slider-image-info">
                    <div class="slider-image">
                        <img src="{{asset('img/banner/ban4.jpg')}}" width="980px" height="550px" alt="slider3">
                    </div>
                    <!-- <div class="container slider-text-content">
                        <div class="slider-text-info slider-content-right slider-text-left">
                            <h2><span>Filled with nutrients</span></h2>
                            <div class="slider-price">
                                <span class="slider-review">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </span>
                                <h2 class="price-text">
                                    <span>$24.00</span>
                                    <span>$37.00</span>
                                </h2>
                            </div>
                            <div class="main-btn">
                                <div class="slider-link">
                                    <a href="collection.html.html" class="btn btn-style">Shop now</a>
                                    <a href="collection.html.html" class="btn btn-style3">All product</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- main-slider end -->
    <!-- brand-logo start -->
    <div class="brand-logo section-pt mb-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brand-logo-wrap">
                        <div class="brand-logo-slider owl-carousel owl-theme" id="brand-logo5">
                            <div class="item">
                                <a href="index5.html">
                                    <span class="brand-img">
                                        <img src="{{asset('img/brand-logo/home5-brand-logo1.png')}}" class="img-fluid" alt="brand-logo1">
                                    </span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="index5.html">
                                    <span class="brand-img">
                                        <img src="{{asset('img/brand-logo/home5-brand-logo2.png')}}" class="img-fluid" alt="brand-logo2">
                                    </span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="index5.html">
                                    <span class="brand-img">
                                        <img src="{{asset('img/brand-logo/home5-brand-logo3.png')}}" class="img-fluid" alt="brand-logo3">
                                    </span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="index5.html">
                                    <span class="brand-img">
                                        <img src="{{asset('img/brand-logo/home5-brand-logo4.png')}}" class="img-fluid" alt="brand-logo4">
                                    </span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="index5.html">
                                    <span class="brand-img">
                                        <img src="{{asset('img/brand-logo/home5-brand-logo5.png')}}" class="img-fluid" alt="brand-logo5">
                                    </span>
                                </a>
                            </div>
                            <div class="item">
                                <a href="index5.html">
                                    <span class="brand-img">
                                        <img src="{{asset('img/brand-logo/home5-brand-logo6.png')}}" class="img-fluid" alt="brand-logo6">
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brand-logo end -->
    <!-- banner-grid start -->
    <section class="banner-grid section-ptb">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="banner-content">
                                <ul class="banner-ul">
                                    <li class="banner-li">
                                        <div class="banner-wrap">
                                            <a href="collection.html" class="banner-img">
                                                <img src="{{asset('img/banner/b3.jpg')}}" class="img-fluid" alt="banner1">
                                            </a>
                                            <div class="banner-wrapper banner-right">
                                                <div class="banner-info">
                                                    <div class="banner-sub-title">
                                                        <span>Get 30% off</span>
                                                    </div>
                                                    <h2>Túi da mềm chất lượng</h2>
                                                    <div class="banner-link">
                                                        <a href="collection.html" class="btn btn-style">Shop now</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="banner-li">
                                        <div class="banner-wrap">
                                            <a href="collection.html" class="banner-img">
                                                <img src="{{asset('img/banner/b2.jpg')}}" class="img-fluid" alt="banner2">
                                            </a>
                                            <div class="banner-wrapper banner-left">
                                                <div class="banner-info">
                                                    <div class="banner-sub-title">
                                                        <span>Get 25% off</span>
                                                    </div>
                                                    <h2>Túi xách thời trang</h2>
                                                    <div class="banner-link">
                                                        <a href="collection.html" class="btn btn-style">Shop now</a>
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
    <!-- banner-grid end -->
    <section class="slider-category section-ptb ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-capture">
                        <div class="section-title">
                            <h2>Juice category</h2>
                        </div>
                    </div>
                    <div class="category-wrapper">
                        <div class="swiper" id="category-slider5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="category-item">
                                        <a href="collection.html">
                                            <div class="category-block">
                                                <div class="cat-image">
                                                    <span class="image">
                                                        <img src="{{asset('img/cat/home5-cate1.png')}}" class="img-fluid" alt="cat1">
                                                    </span>
                                                </div>
                                                <div class="category-content">
                                                    <div class="category-text">
                                                        <div class="title-block">
                                                            <span class="cat-title">Pineapple juice</span>
                                                        </div>
                                                        <div class="label-block">
                                                            <span>8</span>
                                                            <span>Items</span>
                                                        </div>
                                                    </div>
                                                    <div class="category-button">
                                                        <span class="button-block"><i class="feather-arrow-up-right"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="category-item">
                                        <a href="collection.html">
                                            <div class="category-block">
                                                <div class="cat-image">
                                                    <img src="{{asset('img/cat/home5-cate2.png')}}" class="img-fluid" alt="cat2">
                                                </div>
                                                <div class="category-content">
                                                    <div class="category-text">
                                                        <div class="title-block">
                                                            <span class="cat-title">Ginger juice</span>
                                                        </div>
                                                        <div class="label-block">
                                                            <span>8</span>
                                                            <span>Items</span>
                                                        </div>
                                                    </div>
                                                    <div class="category-button">
                                                        <span class="button-block"><i class="feather-arrow-up-right"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="category-item">
                                        <a href="collection.html">
                                            <div class="category-block">
                                                <div class="cat-image">
                                                    <img src="{{asset('img/cat/home5-cate3.png')}}" class="img-fluid" alt="cat3">
                                                </div>
                                                <div class="category-content">
                                                    <div class="category-text">
                                                        <div class="title-block">
                                                            <span class="cat-title">Beetroot juice</span>
                                                        </div>
                                                        <div class="label-block">
                                                            <span>8</span>
                                                            <span>Items</span>
                                                        </div>
                                                    </div>
                                                    <div class="category-button">
                                                        <span class="button-block"><i class="feather-arrow-up-right"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="category-item">
                                        <a href="collection.html">
                                            <div class="category-block">
                                                <div class="cat-image">
                                                    <img src="{{asset('img/cat/home5-cate4.png')}}" class="img-fluid" alt="cat4">
                                                </div>
                                                <div class="category-content">
                                                    <div class="category-text">
                                                        <div class="title-block">
                                                            <span class="cat-title">Watermelon juice</span>
                                                        </div>
                                                        <div class="label-block">
                                                            <span>8</span>
                                                            <span>Items</span>
                                                        </div>
                                                    </div>
                                                    <div class="category-button">
                                                        <span class="button-block"><i class="feather-arrow-up-right"></i></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- product start -->
    <section class="product-tab section-ptb">
        <div class="collection-category">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="section-capture tab">
                            <div class="section-title">
                                <h2><span>Juice products</span></h2>
                            </div>
                        </div>
                        <div class="collection-wrap">
                            <div class="collection-slider swiper" id="new-product5">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">
                                                    <img src="{{asset('img/product/home5-pro-1.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-2.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
                                                <div class="product-action">
                                                    <a href="#quickview" class="quickview" data-bs-toggle="modal" data-bs-target="#quickview">
                                                        <span class="tooltip-text">Quickview</span>
                                                        <span class="pro-action-icon"><i class="feather-eye"></i></span>
                                                    </a>
                                                    <a href="wishlist-product.html" class="wishlist">
                                                        <span class="tooltip-text">Wishlist</span>
                                                        <span class="pro-action-icon"><i class="feather-heart"></i></span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-caption">
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Apple avocado juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$11.00</span>
                                                                    <span class="old-price">$19.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-3.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-4.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Apple pineapple juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$25.00</span>
                                                                    <span class="old-price">$20.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-5.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-6.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Butternut carrot juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$22.00</span>
                                                                    <span class="old-price">$30.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-7.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-8.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Cacao banana juic</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$18.00</span>
                                                                    <span class="old-price">$25.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-9.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-10.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Celery lemon juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$61.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-11.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-12.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Cold juice pack</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$54.00</span>
                                                                    <span class="old-price">$65.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-13.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-14.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Cucumber lemon juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$25.00</span>
                                                                    <span class="old-price">$45.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-15.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-16.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Lemon ginger juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$25.00</span>
                                                                    <span class="old-price">$35.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-17.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-18.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Lemon spirulina juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$69.00</span>
                                                                    <span class="old-price">$79.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-19.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-20.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Apple avocado juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$11.00</span>
                                                                    <span class="old-price">$19.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-21.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-22.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Apple avocado juice</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$11.00</span>
                                                                    <span class="old-price">$19.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                    <div class="swiper-slide">
                                        <div class="single-product-wrap">
                                            <div class="product-image">
                                                <a href="{{route('detailPro')}}" class="pro-img">

                                                    <img src="{{asset('img/product/home5-pro-23.jpg')}}" class="img-fluid img1 mobile-img1" alt="p1">
                                                    <img src="{{asset('img/product/home5-pro-5.jpg')}}" class="img-fluid img2 mobile-img2" alt="p2">
                                                </a>
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
                                                <div class="product-info">
                                                    <div class="product-content">
                                                        <div class="product-title">
                                                            <h6><a href="product-template.html">Cacao banana juic</a></h6>
                                                        </div>
                                                        <div class="price-cart">
                                                            <div class="product-price">
                                                                <div class="price-box">
                                                                    <span class="new-price">$77.00</span>
                                                                    <span class="old-price">$80.00</span>
                                                                </div>
                                                            </div>
                                                            <div class="cart-btn">
                                                                <a href="#add-to-cart" class="add-to-cart">
                                                                    <span class="cart-title">
                                                                        <span class="add-c-title">
                                                                            <span class="cart-icon"><i class="feather-shopping-bag"></i></span>
                                                                            <span class="add-title">Add to cart</span>
                                                                        </span>
                                                                    </span>
                                                                </a>
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
                                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type</p>
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
                                </div>
                                <div class="collection-button">
                                    <a href="collection.html" class="btn btn-style">View product</a>
                                </div>
                            </div>
                            <div class="swiper-buttons">
                                <div class="swiper-buttons-wrap">
                                    <button class="swiper-prev swiper-prev-new5"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                <polyline points="15 18 9 12 15 6"></polyline>
                                            </svg></span></button>
                                    <button class="swiper-next swiper-next-new5"><span><svg viewBox="0 0 24 24" width="16" height="16" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
                                                <polyline points="9 18 15 12 9 6"></polyline>
                                            </svg></span></button>
                                </div>
                            </div>
                            <div class="swiper-dots">
                                <div class="swiper-pagination swiper-pagination-new5"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- product end -->
    <!-- instagram-area start -->
    <section class="instagram section-ptb bt">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-capture">
                        <div class="section-title">
                            <div class="section-cont-title">
                                <h2><span>Panno instagram</span></h2>
                            </div>
                        </div>
                    </div>
                    <div class="insta-slider">
                        <div class="instagram-slider owl-carousel owl-theme" id="instagram-slider5">
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-1.jpg')}}" class="img-fluid" alt="insta-1">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-2.jpg')}}" class="img-fluid" alt="insta-2">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-3.jpg')}}" class="img-fluid" alt="insta-3">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-4.jpg')}}" class="img-fluid" alt="insta-4">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-5.jpg')}}" class="img-fluid" alt="insta-5">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-6.jpg')}}" class="img-fluid" alt="insta-6">
                                    </a>
                                </div>
                            </div>
                            <div class="item">
                                <div class="insta-content banner-hover">
                                    <a href="index5-2.html" class="insta-img banner-img">
                                        <img src="{{asset('img/insta/home5-insta-7.jpg')}}" class="img-fluid" alt="insta-7">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- instagram-area end -->
</main>
@endsection
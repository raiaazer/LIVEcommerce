<template>
    <main class="main">
        <section class="intro-section">
            <div class="container">
                <div class="grid row">
                    <div class="grid-item col-lg-8 mb-2">
                        <div class="banner banner1" style="background-color: #eee;">
                            <figure>
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/banners/banner-1.jpg`)" alt="banner" width="779"
                                     height="464">
                            </figure>

                            <div class="banner-layer banner-layer-middle banner-layer-left">
                                <div class="appear-animate" data-animation-name="bounceInLeft"
                                     data-animation-delay="100">
                                    <h3 class="text-body m-b-1">Save Big Sale</h3>
                                    <h4 class="d-flex align-items-center text-uppercase">50%<small
                                        class="d-inline-block">Off</small></h4>
                                    <h5>
                                            <span class="d-inline-block align-top ls-n-20 text-uppercase">Starting
                                                At</span>
                                        <b
                                            class="coupon-sale-text d-inline-block ls-n-20 text-primary mb-0"><sup>$</sup>199<sup>99</sup></b>
                                    </h5>
                                    <a href="demo20-shop.html" class="btn btn-sm text-uppercase ls-10">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-item col-lg-4 mb-2">
                        <div class="find-form d-flex flex-column justify-content-center">
                            <h3 class="line-height-1 ls-n-10 text-center text-uppercase text-white m-b-3">Find A
                                Product</h3>
                            <form class="mb-0" action="#" method="get">
                                <div class="select-custom">
                                    <select class="form-control">
                                        <option>Select a category</option>
                                        <option>Accessories</option>
                                        <option>&nbsp;&nbsp;Caps</option>
                                        <option>&nbsp;&nbsp;Watches</option>
                                        <option>Beauty</option>
                                        <option>Decor</option>
                                        <option>Fashion</option>
                                        <option>Shoes</option>
                                        <option>Footwear</option>
                                        <option>&nbsp;&nbsp;Headphone</option>
                                        <option>&nbsp;&nbsp;Toys</option>
                                    </select>
                                </div>
                                <div class="select-custom mb-0">
                                    <select class="form-control mb-0">
                                        <option>By brand</option>
                                        <option>Adidas</option>
                                        <option>Calvin Klein</option>
                                        <option>Diesel</option>
                                        <option>Lacoste</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="grid-item col-lg-4 mb-2">
                        <div class="banner banner2 appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <figure>
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/banners/banner-2.jpg`)" alt="banner">
                            </figure>

                            <div class="banner-layer banner-layer-middle banner-layer-right text-right">
                                <h3 class="ls-10 text-uppercase m-b-3">Electronic<br>Deals</h3>
                                <div class="coupon-sale-text d-inline-block text-left">
                                    <h4 class="font1 d-block text-white bg-dark ls-10">Exclusive COUPON</h4>
                                    <h5 class="mb-0 font1 d-inline-block bg-dark"><i class="text-dark ls-0">UP
                                        TO</i><b class="text-white">$100</b><sub class="text-dark">OFF</sub>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid-col-sizer col-1">
                    </div>
                </div>
            </div>
        </section>

        <section class="category-section mb-3">
            <div class="container">
                <h2 class="section-title ls-n-10 text-center text-uppercase">Featured Categories</h2>

                <div class="grid row">
                    <div class="grid-item col-sm-4 col-md-3">
                        <div class="product-category appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <a href="demo20-shop.html">
                                <figure>
                                    <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/categories/cat-1.jpg`)"
                                         alt="category" width="280" height="240">
                                </figure>
                                <div class="category-content">
                                    <h3>Fashion</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item col-sm-8 col-md-6">
                        <div class="product-category appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <a href="demo20-shop.html">
                                <figure>
                                    <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/categories/cat-2.jpg`)"
                                         alt="category" width="580" height="240">
                                </figure>
                                <div class="category-content">
                                    <h3>Furniture</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item col-sm-5 col-md-3">
                        <div class="product-category appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <a href="demo20-shop.html">
                                <figure>
                                    <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/categories/cat-3.jpg`)"
                                         alt="category" width="280" height="240">
                                </figure>
                                <div class="category-content">
                                    <h3>Decore</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item col-sm-7 col-md-4">
                        <div class="product-category appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <a href="demo20-shop.html">
                                <figure>
                                    <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/categories/cat-4.jpg`)"
                                         alt="category" width="380" height="240">
                                </figure>
                                <div class="category-content">
                                    <h3>Accessories</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item col-sm-4 col-md-3">
                        <div class="product-category appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <a href="demo20-shop.html">
                                <figure>
                                    <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/categories/cat-5.jpg`)"
                                         alt="category" width="280" height="240">
                                </figure>
                                <div class="category-content">
                                    <h3>Mobile</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid-item col-sm-8 col-md-5">
                        <div class="product-category appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="200" style="background-color: #eee;">
                            <a href="demo20-shop.html">
                                <figure>
                                    <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/categories/cat-6.jpg`)"
                                         alt="category" width="480" height="240">
                                </figure>
                                <div class="category-content">
                                    <h3>Footwear</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="grid-col-sizer col-1"></div>
                </div>
            </div>
        </section>

        <section class="featured-products-section">
            <div class="container">
                <h2 class="section-title ls-n-10 text-center text-uppercase m-b-3">Featured Products</h2>

                <div class="featured-products owl-carousel owl-theme nav-outer show-nav-hover nav-image-center appear-animate"
                     data-owl-options="{
                        'margin': 20,
                        'dots': false,
                        'nav': true
                    }" data-animation-name="fadeIn" data-animation-delay="200">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo20-product.html">
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/product-1.jpg`)" width="280"
                                     height="280" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo20-shop.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="demo20-product.html">Brown Food Recipient</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$56.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo20-product.html">
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/product-2.jpg`)" width="280"
                                     height="280" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo20-shop.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="demo20-product.html">Modern White Chair</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:100%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$76.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo20-product.html">
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/product-3.jpg`)" width="280"
                                     height="280" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo20-shop.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="demo20-product.html">Black Metal Light Bulb</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$56.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo20-product.html">
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/product-4.jpg`)" width="280"
                                     height="280" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="demo20-product.html" class="btn-icon btn-add-cart"><i
                                    class="fa fa-arrow-right"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo20-shop.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="demo20-product.html">A White Chair</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$199.00 &ndash; $200.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo20-product.html">
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/products/product-5.jpg`)" width="280"
                                     height="280" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                    class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="demo20-shop.html" class="product-category">category</a>
                                </div>
                            </div>
                            <h3 class="product-title">
                                <a href="demo20-product.html">Black Chair Top</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:85%"></span><!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$88.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
            </div>
        </section>

        <section class="newsletter-section">
            <div class="container">
                <h2 class="section-title ls-n-10 text-center text-uppercase m-b-4">Offers and Deals</h2>

                <div class="row">
                    <div class="col-md-6 mb-2">
                        <div class="banner banner3 h-100 appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="300" style="background-color: #eee;">
                            <figure>
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/banners/banner-3.jpg`)" alt="banner" width="530"
                                     height="249">
                            </figure>

                            <div class="banner-layer banner-layer-middle banner-layer-left">
                                <h3 class="m-b-1">Exclusive Shoes</h3>
                                <h4 class="text-uppercase mb-4">50% Off</h4>
                                <a href="demo20-shop.html" class="btn">Shop Now</a>
                            </div>

                            <div class="banner-layer banner-layer-right">
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/banners/brand1.png`)" alt="brand" width="105"
                                     height="45">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 mb-2">
                        <div class="banner banner4 appear-animate" data-animation-name="fadeIn"
                             data-animation-delay="600" style="background-color: #eee;">
                            <figure>
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/banners/banner-4.jpg`)" alt="banner" width="580"
                                     height="301">
                            </figure>

                            <div class="banner-layer banner-layer-middle banner-layer-right text-center">
                                <h6 class="heading-border text-dark text-uppercase m-b-2">Amazing</h6>
                                <h3 class="ls-n-10 text-uppercase m-b-3">Collection</h3>
                                <h5 class="text-uppercase">Check our discounts</h5>
                                <a href="demo20-shop.html" class="btn">Shop Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="banner banner5" style="background-color: #eee;">
                            <figure>
                                <img :src="baseURL(`frontend/assets/images/demoes/demo20/banners/banner-5.png`)" alt="banner"
                                     width="1180" height="300">
                            </figure>

                            <div class="banner-layer banner-layer-middle text-center">
                                <div class="widget-newsletter appear-animate" data-animation-name="fadeInUpShorter"
                                     data-animation-delay="200">
                                    <h4 class="mt-0 m-b-1">Subscribe To Our Newsletter</h4>
                                    <p class="font2 text-body m-b-4">Get all the latest information on events, sales
                                        and offers.</p>

                                    <form action="#" class="d-flex mb-0 mx-auto">
                                        <input type="email" class="form-control mb-0" placeholder="Email address"
                                               required>

                                        <input type="submit" class="btn btn-dark" value="Subscribe">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="brands-section">
            <div class="container">
                <div class="brands-slider owl-carousel owl-theme" data-owl-options="{
                        'margin': 0
                    }">
                    <img :src="baseURL(`frontend/assets/images/brands/small/brand1.png`)" width="130" height="56" alt="brand">
                    <img :src="baseURL(`frontend/assets/images/brands/small/brand2.png`)" width="130" height="56" alt="brand">
                    <img :src="baseURL(`frontend/assets/images/brands/small/brand3.png`)" width="130" height="56" alt="brand">
                    <img :src="baseURL(`frontend/assets/images/brands/small/brand4.png`)" width="130" height="56" alt="brand">
                    <img :src="baseURL(`frontend/assets/images/brands/small/brand5.png`)" width="130" height="56" alt="brand">
                    <img :src="baseURL(`frontend/assets/images/brands/small/brand6.png`)" width="130" height="56" alt="brand">
                </div>
            </div>
        </div>
    </main><!-- End .main -->
</template>
<script setup>
import Main from "../Layouts/Main.vue";
import {baseURL} from "../Helpers/Path.js";
</script>

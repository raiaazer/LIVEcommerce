<template>
    <main class="main">
        <div class="category-banner-container bg-gray">
            <div class="category-banner banner text-uppercase" style="background: no-repeat 60%/cover url('baseURL(`frontend/assets/images/banners/banner-top.jpg`)');">
                <div class="container position-relative">
                    <div class="row">
                        <div class="pl-lg-5 pb-5 pb-md-0 col-sm-5 col-xl-4 col-lg-4 offset-1">
                            <h3>Electronic<br>Deals</h3>
                            <a href="category.html" class="btn btn-dark">Get Yours!</a>
                        </div>
                        <div class="pl-lg-3 col-sm-4 offset-sm-0 offset-1 pt-3">
                            <div class="coupon-sale-content">
                                <h4 class="m-b-1 coupon-sale-text bg-white text-transform-none">Exclusive COUPON
                                </h4>
                                <h5 class="mb-2 coupon-sale-text d-block ls-10 p-0"><i class="ls-0">UP TO</i><b class="text-dark">$100</b> OFF</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-nav">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="demo4.html"><i class="icon-home"></i></a></li>
                    <li class="breadcrumb-item"><a href="#">Men</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Accessories</li>
                </ol>
            </nav>

            <div class="row">
                <div class="col-lg-9 main-content">
                    <nav class="toolbox sticky-header" data-sticky-options="{'mobile': true}">
                        <div class="toolbox-left">
                            <a href="#" class="sidebar-toggle">
                                <svg data-name="Layer 3" id="Layer_3" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                                    <line x1="15" x2="26" y1="9" y2="9" class="cls-1"></line>
                                    <line x1="6" x2="9" y1="9" y2="9" class="cls-1"></line>
                                    <line x1="23" x2="26" y1="16" y2="16" class="cls-1"></line>
                                    <line x1="6" x2="17" y1="16" y2="16" class="cls-1"></line>
                                    <line x1="17" x2="26" y1="23" y2="23" class="cls-1"></line>
                                    <line x1="6" x2="11" y1="23" y2="23" class="cls-1"></line>
                                    <path
                                        d="M14.5,8.92A2.6,2.6,0,0,1,12,11.5,2.6,2.6,0,0,1,9.5,8.92a2.5,2.5,0,0,1,5,0Z"
                                        class="cls-2"></path>
                                    <path d="M22.5,15.92a2.5,2.5,0,1,1-5,0,2.5,2.5,0,0,1,5,0Z" class="cls-2"></path>
                                    <path d="M21,16a1,1,0,1,1-2,0,1,1,0,0,1,2,0Z" class="cls-3"></path>
                                    <path
                                        d="M16.5,22.92A2.6,2.6,0,0,1,14,25.5a2.6,2.6,0,0,1-2.5-2.58,2.5,2.5,0,0,1,5,0Z"
                                        class="cls-2"></path>
                                </svg>
                                <span>Filter</span>
                            </a>

                            <div class="toolbox-item toolbox-sort">
                                <label>Sort By:</label>

                                <div class="select-custom">
                                    <select name="orderby" class="form-control">
                                        <option value="menu_order" selected="selected">Default sorting</option>
                                        <option value="popularity">Sort by popularity</option>
                                        <option value="rating">Sort by average rating</option>
                                        <option value="date">Sort by newness</option>
                                        <option value="price">Sort by price: low to high</option>
                                        <option value="price-desc">Sort by price: high to low</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->


                            </div>
                            <!-- End .toolbox-item -->
                        </div>
                        <!-- End .toolbox-left -->

                        <div class="toolbox-right">
                            <div class="toolbox-item toolbox-show">
                                <label>Show:</label>

                                <div class="select-custom">
                                    <select name="count" class="form-control">
                                        <option value="12">12</option>
                                        <option value="24">24</option>
                                        <option value="36">36</option>
                                    </select>
                                </div>
                                <!-- End .select-custom -->
                            </div>
                            <!-- End .toolbox-item -->

                            <div class="toolbox-item layout-modes">
                                <a href="category.html" class="layout-btn btn-grid active" title="Grid">
                                    <i class="icon-mode-grid"></i>
                                </a>
                                <a href="category-list.html" class="layout-btn btn-list" title="List">
                                    <i class="icon-mode-list"></i>
                                </a>
                            </div>
                            <!-- End .layout-modes -->
                        </div>
                        <!-- End .toolbox-right -->
                    </nav>

                    <div class="row">
<!--                            Vue.js Product-->
<!--                        <div class="col-6 col-sm-4">-->
<!--                            <div class="product-default">-->
<!--                                <figure>-->
<!--                                    <a href="product.html">-->
<!--                                        <img :src="baseURL('frontend/assets/images/products/product-1.jpg')" width="280" height="280" alt="product" />-->
<!--                                        <img :src="baseURL('frontend/assets/images/products/product-1-2.jpg')" width="280" height="280" alt="product" />-->
<!--                                    </a>-->

<!--                                    <div class="label-group">-->
<!--                                        <div class="product-label label-hot">HOT</div>-->
<!--                                        <div class="product-label label-sale">-20%</div>-->
<!--                                    </div>-->
<!--                                </figure>-->

<!--                                <div class="product-details">-->
<!--                                    <div class="category-wrap">-->
<!--                                        <div class="category-list">-->
<!--                                            <a href="category.html" class="product-category">Category</a>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                    <h3 class="product-title">-->
<!--                                        <a href="product.html">Ultimate 3D Bluetooth Speaker</a>-->
<!--                                    </h3>-->

<!--                                    <div class="ratings-container">-->
<!--                                        <div class="product-ratings">-->
<!--                                            <span class="ratings" style="width: 100%"></span>-->
<!--                                            <span class="tooltiptext tooltip-top"></span>-->
<!--                                        </div>-->
<!--                                    </div>-->

<!--                                    <div class="price-box">-->
<!--                                        <span class="old-price">$90.00</span>-->
<!--                                        <span class="product-price">$70.00</span>-->
<!--                                    </div>-->

<!--                                    <div class="product-action">-->
<!--                                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i class="icon-heart"></i></a>-->
<!--                                        <a href="javascript:void(0)" @click="addToCart" class="btn-icon btn-add-cart">-->
<!--                                            <i class="fa fa-arrow-right"></i><span>SELECT OPTIONS</span>-->
<!--                                        </a>-->
<!--                                        <a href="ajax/product-quick-view.html" class="btn-quickview" title="Quick View">-->
<!--                                            <i class="fas fa-external-link-alt"></i>-->
<!--                                        </a>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                            End Vue.js Product-->


                        <div v-for="product in products.data" :key="product.id" class="col-6 col-sm-4">
                            <div class="product-default">
                                <figure>
                                    <Link :href="productsRoute">
                                        <img :src="product.image1" width="280" height="280" alt="product" />
                                        <img :src="product.image2" width="280" height="280" alt="product" />
                                    </Link>
                                    <div class="label-group">
                                        <div class="product-label label-hot">HOT</div>
                                        <div class="product-label label-sale">-20%</div>
                                    </div>
                                </figure>
                                <div class="product-details">
                                    <div class="category-wrap">
                                        <div class="category-list">
                                        <a href="#">{{ product.name }}</a>
                                        </div>
                                    </div>
                                    <div class="price-box">
                                        <span class="old-price" v-if="product.old_price">${{ product.old_price }}</span>
                                        <span class="product-price">${{ product.price }}</span>
                                    </div>
                                    <div class="product-action">
                                        <button class="btn btn-primary btn-add-cart" @click="addToCart(product)">
                                            <i class="icon-shopping-cart"></i> ADD TO CART
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End .col-sm-4 -->
                    </div>
                    <!-- End .row -->

<!--                    <nav class="toolbox toolbox-pagination">-->
<!--                        <div class="toolbox-item toolbox-show">-->
<!--                            <label>Show:</label>-->

<!--                            <div class="select-custom">-->
<!--                                <select name="count" class="form-control">-->
<!--                                    <option value="12">12</option>-->
<!--                                    <option value="24">24</option>-->
<!--                                    <option value="36">36</option>-->
<!--                                </select>-->
<!--                            </div>-->
<!--                            &lt;!&ndash; End .select-custom &ndash;&gt;-->
<!--                        </div>-->
<!--                        &lt;!&ndash; End .toolbox-item &ndash;&gt;-->

<!--                        <ul class="pagination toolbox-item">-->
<!--                            <li class="page-item disabled">-->
<!--                                <a class="page-link page-link-btn" href="#"><i class="icon-angle-left"></i></a>-->
<!--                            </li>-->
<!--                            <li class="page-item active">-->
<!--                                <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>-->
<!--                            </li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">2</a></li>-->
<!--                            <li class="page-item"><a class="page-link" href="#">3</a></li>-->
<!--                            <li class="page-item"><span class="page-link">...</span></li>-->
<!--                            <li class="page-item">-->
<!--                                <a class="page-link page-link-btn" href="#"><i class="icon-angle-right"></i></a>-->
<!--                            </li>-->
<!--                        </ul>-->
<!--                    </nav>-->
                    <!-- Pagination Controls -->
                    <!-- Pagination -->
                    <nav class="toolbox toolbox-pagination">
                        <div class="toolbox-item toolbox-show">
                            <label>Show:</label>
                            <div class="select-custom">
                                <select name="count" class="form-control" @change="changePerPage($event)">
                                    <option value="12" :selected="perPage === 12">12</option>
                                    <option value="24" :selected="perPage === 24">24</option>
                                    <option value="36" :selected="perPage === 36">36</option>
                                </select>
                            </div>
                        </div>

                        <ul class="pagination toolbox-item">
                            <li class="page-item" :class="{ disabled: !products.prev_page_url }">
                                <Link class="page-link page-link-btn" :href="products.prev_page_url">
                                    <i class="icon-angle-left"></i>
                                </Link>
                            </li>
                            <li v-for="page in paginationLinks" :key="page.label" class="page-item" :class="{ active: page.active }">
                                <Link class="page-link" :href="page.url" v-if="page.url">
                                    {{ page.label }}
                                </Link>
                                <span v-else class="page-link">{{ page.label }}</span>
                            </li>
                            <li class="page-item" :class="{ disabled: !products.next_page_url }">
                                <Link class="page-link page-link-btn" :href="products.next_page_url">
                                    <i class="icon-angle-right"></i>
                                </Link>
                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- End .col-lg-9 -->

                <div class="sidebar-overlay"></div>
                <aside class="sidebar-shop col-lg-3 order-lg-first mobile-sidebar">
                    <div class="sidebar-wrapper">
                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-2" role="button" aria-expanded="true" aria-controls="widget-body-2">Categories</a>
                            </h3>

                            <div class="collapse show" id="widget-body-2">
                                <div class="widget-body">
                                    <ul class="cat-list">
                                        <li>
                                            <a href="#widget-category-1" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="widget-category-1">
                                                Accessories<span class="products-count">(3)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse show" id="widget-category-1">
                                                <ul class="cat-sublist">
                                                    <li>Caps<span class="products-count">(1)</span></li>
                                                    <li>Watches<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-2" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-2">
                                                Dress<span class="products-count">(4)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-2">
                                                <ul class="cat-sublist">
                                                    <li>Clothing<span class="products-count">(4)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-3" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-3">
                                                Electronics<span class="products-count">(2)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-3">
                                                <ul class="cat-sublist">
                                                    <li>Headphone<span class="products-count">(1)</span></li>
                                                    <li>Watch<span class="products-count">(1)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="#widget-category-4" class="collapsed" data-toggle="collapse" role="button" aria-expanded="false" aria-controls="widget-category-4">
                                                Fashion<span class="products-count">(6)</span>
                                                <span class="toggle"></span>
                                            </a>
                                            <div class="collapse" id="widget-category-4">
                                                <ul class="cat-sublist">
                                                    <li>Shoes<span class="products-count">(4)</span></li>
                                                    <li>Bag<span class="products-count">(2)</span></li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li><a href="#">Music<span class="products-count">(2)</span></a></li>
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-3" role="button" aria-expanded="true" aria-controls="widget-body-3">Price</a>
                            </h3>

                            <div class="collapse show" id="widget-body-3">
                                <div class="widget-body pb-0">
                                    <form action="#">
                                        <div class="price-slider-wrapper">
                                            <div id="price-slider"></div>
                                            <!-- End #price-slider -->
                                        </div>
                                        <!-- End .price-slider-wrapper -->

                                        <div class="filter-price-action d-flex align-items-center justify-content-between flex-wrap">
                                            <div class="filter-price-text">
                                                Price:
                                                <span id="filter-price-range"></span>
                                            </div>
                                            <!-- End .filter-price-text -->

                                            <button type="submit" class="btn btn-primary">Filter</button>
                                        </div>
                                        <!-- End .filter-price-action -->
                                    </form>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-color">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-4" role="button" aria-expanded="true" aria-controls="widget-body-4">Color</a>
                            </h3>

                            <div class="collapse show" id="widget-body-4">
                                <div class="widget-body pb-0">
                                    <ul class="config-swatch-list">
                                        <li class="active">
                                            <a href="#" style="background-color: #000;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #0188cc;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #81d742;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #6085a5;"></a>
                                        </li>
                                        <li>
                                            <a href="#" style="background-color: #ab6e6e;"></a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-size">
                            <h3 class="widget-title">
                                <a data-toggle="collapse" href="#widget-body-5" role="button" aria-expanded="true" aria-controls="widget-body-5">Sizes</a>
                            </h3>

                            <div class="collapse show" id="widget-body-5">
                                <div class="widget-body pb-0">
                                    <ul class="config-size-list">
                                        <li class="active"><a href="#">XL</a></li>
                                        <li><a href="#">L</a></li>
                                        <li><a href="#">M</a></li>
                                        <li><a href="#">S</a></li>
                                    </ul>
                                </div>
                                <!-- End .widget-body -->
                            </div>
                            <!-- End .collapse -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-featured">
                            <h3 class="widget-title">Featured</h3>

                            <div class="widget-body">
                                <div class="owl-carousel widget-featured-products">
                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-4.jpg`)" width="75" height="75" alt="product" />
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-4-2.jpg`)" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Blue Backpack for
                                                    the Young - S</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-5.jpg`)" width="75" height="75" alt="product" />
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-5-2.jpg`)" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Casual Spring Blue
                                                    Shoes</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-6.jpg`)" width="75" height="75" alt="product" />
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-6-2.jpg`)" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Men Black Gentle
                                                    Belt</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                    </div>
                                    <!-- End .featured-col -->

                                    <div class="featured-col">
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-1.jpg`)" width="75" height="75" alt="product" />
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-1-2.jpg`)" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Ultimate 3D
                                                    Bluetooth Speaker</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-2.jpg`)" width="75" height="75" alt="product" />
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-2-2.jpg`)" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Brown Women Casual
                                                    HandBag</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                        <div class="product-default left-details product-widget">
                                            <figure>
                                                <a href="product.html">
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-3.jpg`)" width="75" height="75" alt="product" />
                                                    <img :src="baseURL(`frontend/assets/images/products/small/product-3-2.jpg`)" width="75" height="75" alt="product" />
                                                </a>
                                            </figure>
                                            <div class="product-details">
                                                <h3 class="product-title"> <a href="product.html">Circled Ultimate
                                                    3D Speaker</a> </h3>
                                                <div class="ratings-container">
                                                    <div class="product-ratings">
                                                        <span class="ratings" style="width:100%"></span>
                                                        <!-- End .ratings -->
                                                        <span class="tooltiptext tooltip-top"></span>
                                                    </div>
                                                    <!-- End .product-ratings -->
                                                </div>
                                                <!-- End .product-container -->
                                                <div class="price-box">
                                                    <span class="product-price">$49.00</span>
                                                </div>
                                                <!-- End .price-box -->
                                            </div>
                                            <!-- End .product-details -->
                                        </div>
                                    </div>
                                    <!-- End .featured-col -->
                                </div>
                                <!-- End .widget-featured-slider -->
                            </div>
                            <!-- End .widget-body -->
                        </div>
                        <!-- End .widget -->

                        <div class="widget widget-block">
                            <h3 class="widget-title">Custom HTML Block</h3>
                            <h5>This is a custom sub-title.</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi. Etiam non tellus </p>
                        </div>
                        <!-- End .widget -->
                    </div>
                    <!-- End .sidebar-wrapper -->
                </aside>
                <!-- End .col-lg-3 -->
            </div>
            <!-- End .row -->
        </div>
        <!-- End .container -->

        <div class="mb-4"></div>
        <!-- margin -->
    </main><!-- End .main -->
</template>
<script setup>
import Main from "../Layouts/Main.vue";
import {baseURL} from "../Helpers/Path.js";
import {router, useForm} from '@inertiajs/vue3';
import { usePage } from "@inertiajs/vue3";
import { Inertia } from "@inertiajs/inertia";
import { ref, computed } from "vue";
import { Link } from '@inertiajs/vue3';
import Products from "@/Pages/Products.vue";

// const { products } = usePage().props;
const products = computed(()=> usePage().props.products);
const productsRoute = '/Products';

const perPage = ref(12);

const form = useForm({
    product_id: null, // Dynamically populated
    name: "",
    price: 0,
    quantity: 1, // Default quantity
    image1: "",
    image2: "",
});

const paginationLinks = computed(() => {
    return products.value?.links?.map((link) => ({
        label: link.label.replace('&laquo;', '«').replace('&raquo;', '»'),
        url: link.url,
        active: link.active,
    })) || [];
});

const addToCart = (product) => {
    form.product_id = product.id;
    form.name = product.name;
    form.price = product.price;
    form.image1 = product.image1;
    form.image2 = product.image2;
    console.log(product);

    // Submit the form to add the product to the cart
    form.post("/cart/add", {
        // onSuccess: () => {
        //     alert(`Product "${product.name}" added to cart!`);
        // },
        onSuccess: () => {
            // Update the cartProducts array after successfully adding the product
            const existingProduct = cartProducts.value.find((p) => p.id === product.id);
            if (existingProduct) {
                // If the product is already in the cart, update the quantity
                existingProduct.quantity += 1;
            } else {
                // If it's a new product, add it to the cart
                cartProducts.value.push({
                    id: product.id,
                    name: product.name,
                    price: product.price,
                    image1: product.image1,
                    image2: product.image2,
                    quantity: 1,
                });
            }
            alert(`Product "${product.name}" added to cart!`);
        }
    });
};

// Function to update the cart products array
// const updateCartProduct = (productId, newQuantity) => {
//     const product = cartProducts.value.find((p) => p.id === productId);
//     if (product) {
//         product.quantity = newQuantity; // Update the quantity
//         if (newQuantity === 0) {
//             // Remove the product if quantity is 0
//             cartProducts.value = cartProducts.value.filter((p) => p.id !== productId);
//         }
//     }
// };

const changePerPage = (event) => {
    const newPerPage = parseInt(event.target.value, 10);
    Inertia.visit(window.location.href.split('?')[0], {
        method: "get",
        data: { per_page: newPerPage },
    });
};

</script>

<template>
    <div class="top-notice p-0">
        <div class="owl-carousel info-boxes-slider" data-owl-options="{
				'items': 1,
                'dots': false,
                'loop': false,
				'responsive': {
					'768': {
						'items': 2
					},
					'992': {
						'items': 3
					}
				}
			}">
            <div class="info-box info-box-icon-left">
                <i class="icon-shipping"></i>

                <div class="info-box-content">
                    <h4>Free Shipping on Orders Over $99</h4>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->

            <div class="info-box info-box-icon-left bg-dark">
                <i class="icon-money"></i>

                <div class="info-box-content">
                    <h4>Up to 40% OFF on Selected Items</h4>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->

            <div class="info-box info-box-icon-left">
                <i class="icon-secure-payment"></i>

                <div class="info-box-content">
                    <h4>100% Secure Payment</h4>
                </div><!-- End .info-box-content -->
            </div><!-- End .info-box -->
        </div><!-- End .owl-carousel -->
    </div>

    <header class="header">
        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="header-left">
                    <div
                        class="header-search header-search-inline header-search-category d-block header-icon text-dark">
                        <a href="#" class="search-toggle btn p-0 icon-search-3" role="button">
                        </a>

                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q" placeholder="Search..."
                                       required="">
                                <button class="btn icon-magnifier p-0" type="submit"></button>
                            </div><!-- End .header-search-wrapper -->
                        </form>
                    </div>
                </div><!-- End .header-dropdown -->

                <div class="header-right ml-0 ml-lg-auto">
                    <div class="header-dropdowns">
                        <div class="header-dropdown">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div>
                        </div><!-- End .header-menu -->

                        <div class="header-dropdown">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropdown -->

                        <div class="header-dropdown dropdown-expanded d-none d-lg-block">
                            <a href="#">Links</a>
                            <div class="header-menu">
                                <ul class="mb-0 d-none d-lg-flex">
                                    <li><a href="demo20-about.html">About Us</a></li>
                                    <li><a href="demo20-contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Log In</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <a href="login.html" class="header-icon login-link text-dark"><i class="icon-user-2"></i></a>

                    <a href="#" class="header-icon position-relative">
                        <i class="icon-wishlist-2 text-dark"></i>
                        <span class="badge-circle">0</span>
                    </a>

                    <div class="dropdown cart-dropdown">
                        <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="minicart-icon"></i>
                            <span class="cart-count badge-circle">3</span>
                        </a>

                        <div class="cart-overlay"></div>

                        <div class="dropdown-menu mobile-cart">
                            <a href="#" title="Close (Esc)" class="btn-close">×</a>

                            <div class="dropdownmenu-wrapper custom-scrollbar">
                                <div class="dropdown-cart-header">Shopping Cart</div>
                                <!-- End .dropdown-cart-header -->

                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo20-product.html">Ultimate 3D Bluetooth Speaker</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $99.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo20-product.html" class="product-image">
                                                <img :src="baseURL(`frontend/assets/images/products/product-1.jpg`)" alt="product"
                                                     width="80" height="80">
                                            </a>

                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo20-product.html">Brown Women Casual HandBag</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo20-product.html" class="product-image">
                                                <img :src="baseURL(`frontend/assets/images/products/product-2.jpg`)" alt="product"
                                                     width="80" height="80">
                                            </a>

                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo20-product.html">Circled Ultimate 3D Speaker</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo20-product.html" class="product-image">
                                                <img :src="baseURL(`frontend/assets/images/products/product-3.jpg`)" alt="product"
                                                     width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>SUBTOTAL:</span>

                                    <span class="cart-total-price float-right">$134.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                        Cart</a>
                                    <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdownmenu-wrapper -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .dropdown -->
                </div><!-- End .header-right -->
            </div><!-- End .container -->
        </div><!-- End .header-top -->
        <div class="header-middle sticky-header">
            <div class="container">
                <div class="header-left d-none d-lg-flex justify-content-center">
                    <nav class="main-nav">
                        <ul class="menu">
                            <li class="active">
                                <Link :href="homeRoute">Home</Link>
                            </li>
                            <li>
                                <Link :href="categoriesRoute"> Categories </Link>
                            </li>
                            <li>
                                <Link :href="productsRoute">Products</Link>
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="demo20-about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="demo20-contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-center ml-0">
                    <button class="mobile-menu-toggler mr-2" type="button">
                        <i class="fas fa-bars"></i>
                    </button>
                        <Link :href="homeRoute" class="logo">
                            <img :src="baseURL(`frontend/assets/images/logo-black.png`)" alt="Porto Logo" width="101" height="40">
                        </Link>
                </div>

                <div class="header-right justify-content-center ml-0">
                    <nav class="main-nav">
                        <ul class="menu">
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="demo20-about.html">About Us</a></li>
                            <li><a href="#">Elements</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right d-lg-none">
                    <div
                        class="header-icon header-search header-search-popup header-search-category d-none d-sm-block header-icon text-dark">
                        <a href="#" class="search-toggle btn p-0" role="button">
                            <i class="icon-search-3"></i>
                        </a>

                        <form action="#" method="get">
                            <div class="header-search-wrapper">
                                <input type="search" class="form-control" name="q" id="q1" placeholder="Search..."
                                       required="">
                                <button class="btn icon-magnifier p-0" type="submit"></button>
                            </div>
                        </form>
                    </div>

                    <a href="login.html" class="header-icon login-link text-dark"><i class="icon-user-2"></i></a>

                    <a href="#" class="header-icon position-relative">
                        <i class="icon-wishlist-2 text-dark"></i>
                        <span class="badge-circle">0</span>
                    </a>

                    <div class="dropdown cart-dropdown">
                        <a href="#" title="Cart" class="dropdown-toggle cart-toggle" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                            <i class="minicart-icon"></i>
                            <span class="cart-count badge-circle">3</span>
                        </a>

                        <div class="cart-overlay"></div>

                        <div class="dropdown-menu mobile-cart">
                            <a href="#" title="Close (Esc)" class="btn-close">×</a>

                            <div class="dropdownmenu-wrapper custom-scrollbar">
                                <div class="dropdown-cart-header">Shopping Cart</div>

                                <div class="dropdown-cart-products">
                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo20-product.html">Ultimate 3D Bluetooth Speaker</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $99.00
                                                </span>
                                        </div>

                                        <figure class="product-image-container">
                                            <a href="demo20-product.html" class="product-image">
                                                <img :src="baseURL(`assets/images/products/product-1.jpg`)" alt="product"
                                                     width="80" height="80">
                                            </a>

                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div>

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo20-product.html">Brown Women Casual HandBag</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo20-product.html" class="product-image">
                                                <img :src="baseURL(`frontend/assets/images/products/product-2.jpg`)" alt="product"
                                                     width="80" height="80">
                                            </a>

                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div><!-- End .product -->

                                    <div class="product">
                                        <div class="product-details">
                                            <h4 class="product-title">
                                                <a href="demo20-product.html">Circled Ultimate 3D Speaker</a>
                                            </h4>

                                            <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                        </div><!-- End .product-details -->

                                        <figure class="product-image-container">
                                            <a href="demo20-product.html" class="product-image">
                                                <img :src="baseURL(`frontend/assets/images/products/product-3.jpg`)" alt="product"
                                                     width="80" height="80">
                                            </a>
                                            <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                        </figure>
                                    </div><!-- End .product -->
                                </div><!-- End .cart-product -->

                                <div class="dropdown-cart-total">
                                    <span>SUBTOTAL:</span>

                                    <span class="cart-total-price float-right">$134.00</span>
                                </div><!-- End .dropdown-cart-total -->

                                <div class="dropdown-cart-action">
                                    <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                        Cart</a>
                                    <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                </div><!-- End .dropdown-cart-total -->
                            </div><!-- End .dropdownmenu-wrapper -->
                        </div><!-- End .dropdown-menu -->
                    </div><!-- End .dropdown -->
                </div>
            </div>
        </div>
    </header><!-- End .header -->
</template>
<script setup>
import {baseURL} from "@/Helpers/Path.js";
import { Link } from '@inertiajs/vue3';


const categoriesRoute = '/Categories';
const homeRoute = '/';
const productsRoute = '/Products';

// defineExpose({
//     categoriesRoute,
// });
// defineExpose({
//     homeRoute,
// });
</script>

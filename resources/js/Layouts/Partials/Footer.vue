<template>
    <footer>
        <div class="footer-top">
            <div class="container-fluid">
                <div class="instagram-section mb-2 appear-animate" data-animation-name="fadeInDownShorter"
                     data-animation-delay="200">
                    <h2 class="section-title ls-n-10 text-center text-uppercase m-b-1">From Our Instagram</h2>
                    <h6 class="text-body text-center font-weight-normal m-b-4   ">@portoecommerce</h6>

                    <div class="instagram-feed-carousel owl-carousel owl-theme" data-owl-options="{
                            'margin': 20,
                            'loop': false,
                            'responsive': {
                                '1800': {
                                    'items': 9
                                }
                            }
                        }">
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-1.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-2.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-3.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-4.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-5.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-6.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-7.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-8.jpg`)" alt="instagram">
                        </div>
                        <div class="instagram">
                            <img :src="baseURL(`frontend/assets/images/demoes/demo20/instagrams/instagram-9.jpg`)" alt="instagram">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer font2">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-2 d-flex align-items-center">
                            <a href="demo20.html">
                                <img :src="baseURL(`frontend/assets/images/logo-footer.png`)" alt="Logo" class="logo mb-3">
                            </a>
                        </div>
                        <div class="col-lg-5 col-xl-6 d-flex align-items-center">
                            <ul class="links mb-3">
                                <li><a href="demo20-about.html">About Us</a></li>
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="#">Order Tracking</a></li>
                                <li><a href="demo20-contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-5 col-xl-4 d-flex justify-content-lg-end align-items-end">
                            <div class="footer-question mb-3">
                                <h6 class="text-white m-b-1">QUESTIONS?</h6>
                                <h3 class="m-b-1"><a href="tel:1-888-123-456" class="text-white">1-888-123-456</a>
                                </h3>
                            </div>

                            <div class="social-icons mb-3">
                                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"></a>
                                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"></a>
                                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank"></a>
                            </div><!-- End .social-icons -->
                        </div>
                    </div>
                </div>

                <div class="footer-bottom d-sm-flex align-items-center">
                    <div class="footer-left">
                        <span class="footer-copyright">Porto eCommerce. © 2021. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons mr-0">
                                <span class="payment-icon visa"
                                      style="background-image: url(frontend/assets/images/payments/payment-visa.svg)"></span>
                            <span class="payment-icon paypal"
                                  style="background-image: url(frontend/assets/images/payments/payment-paypal.svg)"></span>
                            <span class="payment-icon stripe"
                                  style="background-image: url(frontend/assets/images/payments/payment-stripe.png)"></span>
                            <span class="payment-icon verisign"
                                  style="background-image:  url(frontend/assets/images/payments/payment-verisign.svg)"></span>
                        </div>
                    </div>
                </div><!-- End .footer-bottom -->
            </div>
        </div>
    </footer>
</template>
<script setup>
import {baseURL} from "@/Helpers/Path.js";
</script>

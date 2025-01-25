<template>

    <div class="page-wrapper">

        <Header />

        <slot />

        <Footer />
    </div>

<!--    <div class="loading-overlay">-->
<!--        <div class="bounce-loader">-->
<!--            <div class="bounce1"></div>-->
<!--            <div class="bounce2"></div>-->
<!--            <div class="bounce3"></div>-->
<!--        </div>-->
<!--    </div>-->

    <Navbar />

<!--    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"-->
<!--         :style="{ background: `#f1f1f1 no-repeat center/cover url(${baseURL('frontend/assets/images/newsletter_popup_bg.jpg')})` }"-->
<!--    >-->
<!--        <div class="newsletter-popup-content">-->
<!--            <img :src="baseURL(`frontend/assets/images/logo-black.png`)" alt="Logo" class="logo-newsletter" width="111" height="44">-->
<!--            <h2>Subscribe to newsletter</h2>-->

<!--            <p>-->
<!--                Subscribe to the Porto mailing list to receive updates on new-->
<!--                arrivals, special offers and our promotions.-->
<!--            </p>-->

<!--            <form action="#">-->
<!--                <div class="input-group">-->
<!--                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"-->
<!--                           placeholder="Your email address" required />-->
<!--                    <input type="submit" class="btn btn-primary" value="Submit" />-->
<!--                </div>-->
<!--            </form>-->
<!--            <div class="newsletter-subscribe">-->
<!--                <div class="custom-control custom-checkbox">-->
<!--                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />-->
<!--                    <label for="show-again" class="custom-control-label">-->
<!--                        Don't show this popup again-->
<!--                    </label>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>&lt;!&ndash; End .newsletter-popup-content &ndash;&gt;-->

<!--        <button title="Close (Esc)" type="button" class="mfp-close">-->
<!--            ×-->
<!--        </button>-->
<!--    </div>&lt;!&ndash; End .newsletter-popup &ndash;&gt;-->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

</template>
<script setup>
import Navbar from "../Layouts/Partials/Navbar.vue";
import Header from "../Layouts/Partials/Header.vue";
import Footer from "../Layouts/Partials/Footer.vue";
</script>


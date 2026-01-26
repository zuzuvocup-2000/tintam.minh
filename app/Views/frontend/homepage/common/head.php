<?php
$css = [
    ASSET_FRONTEND . 'select2.min.css',
    ASSET_FRONTEND . 'uikit/css/uikit.modify.css',
    ASSET_FRONTEND . 'minh.css',
    ASSET_FRONTEND . 'style.css',
    ASSET_FRONTEND . 'plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css',
    ASSET_FRONTEND . 'plugins/toastr/toastr.css',
];
?>
<link href="" rel="stylesheet" />
<?php foreach ($css as $key => $val) {
    echo '<link href="' . $val . '" rel="stylesheet">';
} ?>
<link rel='stylesheet' id='select2-css' href='wp-content/plugins/woocommerce/assets/css/select2.css?ver=7.4.1' type='text/css' media='all' />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.css" />
<link rel="stylesheet" href="wp-includes/css/dist/block-library/style.min.css?ver=5.2.7" />
<link
    rel="stylesheet"
    href="wp-content/plugins/faq-schema-for-pages-and-posts//css/jquery-ui.css?ver=2.0.0"
/>
<link
    rel="stylesheet"
    href="wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=2.6.11"
/>
<link
    rel="stylesheet"
    href="wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=2.6.11"
/>
<link
    rel="stylesheet"
    href="wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=2.6.11"
/>
<link rel="stylesheet" href="wp-includes/css/dashicons.min.css?ver=5.2.7" />
<link rel="stylesheet" href="wp-content/uploads/titan-framework-mobmenu-css.css?ver=5.2.7" />
<link
    rel="stylesheet"
    href="//fonts.googleapis.com/css?family=Dosis%3Ainherit%2C400&amp;subset=latin%2Clatin-ext&amp;ver=5.2.7"
/>
<link
    rel="stylesheet"
    href="//fonts.googleapis.com/css?family=Roboto%3Ainherit%2C400&amp;subset=latin%2Clatin-ext&amp;ver=5.2.7"
/>
<link
    rel="stylesheet"
    href="wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1"
/>
<link rel="stylesheet" href="wp-content/plugins/sw_core/css/jquery.fancybox.css" />
<link rel="stylesheet" href="wp-content/plugins/mobile-menu/css/mobmenu.css?ver=5.2.7" />
<link
    rel="stylesheet"
    href="wp-content/plugins/mobile-menu/css/mobmenu-icons.css?ver=5.2.7"
/>
<link rel="stylesheet" href="wp-content/themes/zshop/css/bootstrap.min.css" />
<link rel="stylesheet" href="wp-content/themes/zshop/css/app-default.css" />
<link rel="stylesheet" href="wp-content/themes/zshop/css/style-mobile.css" />
<link rel="stylesheet" href="wp-content/themes/zshop/css/app-responsive.css" />
<link
    rel="stylesheet"
    media="only screen and (min-width: 1200px)"
    href="app-fonts/app-fonts.css"
/><link rel="stylesheet" href="wp-content/themes/zshop/style-mobi.css" /><link
    rel="stylesheet"
    href="wp-content/themes/zshop/style-tool.css"
/><link href="fonts/metro-icons.css" rel="stylesheet" />
<link
    rel="stylesheet"
    href="wp-content/plugins/transition-slider-lite/css/style.min.css?ver=2.14.1"
/><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css?ver=2.14.1" /><link
    rel="stylesheet"
    href="wp-content/plugins/js_composer/assets/lib/prettyphoto/css/prettyPhoto.min.css?ver=5.0.1"
/><link
    rel="stylesheet"
    href="wp-content/plugins/js_composer/assets/lib/owl-carousel2-dist/assets/owl.min.css?ver=5.0.1"
/><link
    rel="stylesheet"
    href="wp-content/plugins/js_composer/assets/lib/bower/animate-css/animate.min.css?ver=5.0.1"
/>
<script type="text/javascript" src="wp-includes/js/jquery/jquery.js?ver=1.12.4-wp"></script>
<script data-no-minify="1" data-cfasync="false">
    (function (w, d) {
        function a() {
            var b = d.createElement("script");
            b.async = !0;
            b.src = "wp-content/plugins/wp-rocket/inc/front/js/lazyload.1.0.5.min.js";
            var a = d.getElementsByTagName("script")[0];
            a.parentNode.insertBefore(b, a);
        }
        w.attachEvent ? w.attachEvent("onload", a) : w.addEventListener("load", a, !1);
    })(window, document);
</script>
<link type="text/css" rel="stylesheet" href="font/elusive-fonts/css/elusive-icons.min.css" />
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-51085847-2"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "UA-51085847-2");
</script>
<script>
    !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
            n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
    })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
    fbq("init", "2631271870455184");
    fbq("track", "PageView");

    fbq("track", "Contact");
    fbq("track", "FindLocation");
    fbq("track", "ViewContent");
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.js"></script>
<script src="public/frontend/script.min.js"></script>
<script src="public/frontend/js/jquery-3.1.1.min.js" type="text/javascript"></script>
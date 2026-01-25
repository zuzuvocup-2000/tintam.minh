<?php
    $footer_menu = get_menu(array('keyword' => 'footer-menu', 'language' => $language, 'output' => 'array'));
    $video = get_slide(['keyword' => 'video', 'language' => $language]);
    $vtv = get_slide(['keyword' => 'vtv', 'language' => $language]);
?>
<footer id="footer" class="footer default theme-clearfix">
    <div class="main-footer">
        <div class="video-youtube">
            <div class="title-videos">➤ <?php 
                $catTitle = (isset($video[0]['cat_title']) && !empty($video[0]['cat_title'])) ? $video[0]['cat_title'] : 'Kênh video tư vấn hỗ trợ khách hàng:';
                echo htmlspecialchars($catTitle);
            ?></div>
            <div class="main-video">
                <?php if(isset($video) && is_array($video) && count($video)): ?>
                    <?php foreach($video as $index => $video_item): 
                        $videoUrl = !empty($video_item['canonical']) ? $video_item['canonical'] : '#';
                        $videoTitle = !empty($video_item['title']) ? $video_item['title'] : '';
                        $videoAlt = !empty($video_item['alt']) ? $video_item['alt'] : $videoTitle;
                        $imageUrl = '';
                        if(!empty($video_item['image'])) {
                            if(strpos($video_item['image'], 'http') === 0) {
                                $imageUrl = $video_item['image'];
                            } else {
                                $imageUrl = BASE_URL . ltrim($video_item['image'], '/');
                            }
                        } else {
                            // Extract video ID from YouTube URL
                            preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $videoUrl, $matches);
                            if(!empty($matches[1])) {
                                $imageUrl = 'https://img.youtube.com/vi/' . $matches[1] . '/mqdefault.jpg';
                            }
                        }
                        $listClass = ($index >= 4) ? 'list-video video-an' : 'list-video';
                    ?>
                    <ul class="<?php echo $listClass; ?>">
                        <li class="col-video">
                            <a
                                href="<?php echo htmlspecialchars($videoUrl); ?>"
                                target="_blank"
                                rel="nofollow"
                                title="<?php echo htmlspecialchars($videoTitle); ?>"
                            >
                                <?php if($imageUrl): ?>
                                <img
                                    src="<?php echo htmlspecialchars($imageUrl); ?>"
                                    alt="<?php echo htmlspecialchars($videoAlt); ?>"
                                    class="imgs-video"
                                    height="130px"
                                />
                                <?php endif; ?>
                                <p class="tenvideo"><?php echo htmlspecialchars($videoTitle); ?></p>
                                <span class="p-video"></span>
                            </a>
                        </li>
                    </ul>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <p class="kenhyoutube">
                <a
                    href="<?php echo isset($video[0]['cat_description']) && !empty($video[0]['cat_description']) ? htmlspecialchars($video[0]['cat_description']) : ''; ?>"
                    rel="nofollow"
                    target="_blank"
                    >Xem thêm video Youtube ›</a
                >
            </p>
            <div class="bao-chi kenhfooter no-line">
                <?php if(isset($vtv) && is_array($vtv) && count($vtv)): 
                    $firstItem = $vtv[0];
                    $catTitle = !empty($firstItem['cat_title']) ? $firstItem['cat_title'] : 'Kênh truyền thông chia sẻ';
                    $catDescription = !empty($firstItem['cat_description']) ? trim($firstItem['cat_description']) : '';
                ?>
                <div class="name-baochi">
                    <p class="name-ngan"><?php echo htmlspecialchars($catTitle); ?></p>
                    <hr class="line-intro" />
                    <?php if(!empty($catDescription)): ?>
                    <p class="name-dai">
                        <span class="iconbao"></span> <?php echo ($catDescription); ?> <span class="iconbao"></span>
                    </p>
                    <?php endif; ?>
                </div>
                <div class="img-baochi">
                    <?php foreach($vtv as $vtv_item): 
                        $vtvUrl = !empty($vtv_item['canonical']) ? $vtv_item['canonical'] : '#';
                        $vtvAlt = !empty($vtv_item['alt']) ? $vtv_item['alt'] : (!empty($vtv_item['title']) ? $vtv_item['title'] : '');
                        $imageUrl = '';
                        if(!empty($vtv_item['image'])) {
                            if(strpos($vtv_item['image'], 'http') === 0) {
                                $imageUrl = $vtv_item['image'];
                            } else {
                                $imageUrl = BASE_URL . ltrim($vtv_item['image'], '/');
                            }
                        }
                    ?>
                    <?php if($imageUrl): ?>
                    <p class="p-imgbao">
                        <a
                            href="<?php echo htmlspecialchars($vtvUrl); ?>"
                            rel="nofollow"
                            target="_blank"
                        >
                            <img
                                src="<?php echo htmlspecialchars($imageUrl); ?>"
                                border="0"
                                alt="<?php echo htmlspecialchars($vtvAlt); ?>"
                            /><br />
                            <span class="xembao">Xem chi tiết&gt;&gt;</span>
                        </a>
                    </p>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="container2 footer-main" id="lien-he">
        <style type="text/css">
            .mienbac span {
                background: #da7800 url(wp-content/themes/zshop/img/page5-bg.png)
                    center 0 repeat !important;
            }
            .sh-address h4 {
                font-size: 14px !important;
                font-weight: 600;
                line-height: inherit;
            }
            .footer-content-new {
                width: 1300px;
                margin: 0 auto;
                display: table;
                border-left: 0px solid #ddd;
                border-right: 0px solid #ddd;
            }
            .title-video-new {
                width: 100%;
                text-transform: uppercase;
                height: 42px;
                line-height: 35px;
                padding: 4px 1% 4px 1%;
                font-size: 19px;
                color: #fff;
                background: #03b145;
                clear: both;
            }
            .colfooter {
                margin-bottom: 30px;
                width: 33.33%;
                float: left;
                padding: 0px;
            }
            .sh-image img {
                width: 100%;
                height: 180px;
            }
            .sh-image {
                position: relative;
                width: 30%;
                float: left;
                padding: 0 3% 0 0;
            }
            .fshowroom {
                margin: 28px 0px 0 0px;
            }
            .footer-border {
                width: 95%;
                padding: 0 0 15px 0;
                display: table;
                margin: 0 auto;
                border: 1px solid #bdbdbd;
                font-size: 14px;
                background: #ebebeb;
            }
            .sh-address {
                width: 67%;
                position: relative;
                float: left;
            }
            .fbox-label {
                position: absolute;
                top: 0px;
                font-family: Arial, sans-serif;
                color: #f10000;
                font-weight: 600;
                font-size: 16px;
                width: 113px;
                margin: 0 auto;
                text-align: center;
                height: 119px;
                background: rgba(238, 238, 238, 0.8);
                padding-top: 61px;
            }
            .fbox-label2 {
                text-decoration: underline;
                position: absolute;
                top: 0px;
                font-family: Arial, sans-serif;
                color: #ff4900;
                font-weight: 600;
                font-size: 16px;
                width: 113px;
                margin: 0 auto;
                text-align: center;
                height: 105px;
                background: rgba(238, 238, 238, 0.8);
                padding-top: 75px;
            }
            .sh-address p,
            .sh-address h4 {
                margin: 0;
            }
            .sh-address p {
                text-align: left;
            }

            .sh-address-tp {
                color: #f00;
                font-weight: 600;
            }
            .sh-address-tp span {
                text-transform: uppercase;
            }
            .fa3x {
                font-size: 14px !important;
            }
            .fa-car.fa3x {
                color: #1198b6;
            }
            .fa2x {
                font-size: 22px !important;
                margin-top: -4px;
            }
            .fa-icon-dc {
                color: #ff0000;
                float: left;
                margin-right: 6px;
            }
            .f-tel a {
                color: #313131;
                text-decoration: none;
            }
            .sh-map {
                cursor: pointer;
                position: absolute;
                bottom: -18px;
                right: 0;
                text-align: center;
                padding: 5px 8px;
                background: none;
                font-size: 11px;
            }
            .sh-map a {
                color: #cd0000;
            }
            .gandiachi {
                font-style: italic;
                color: #009c48;
                font-size: 13.4px;
            }
            .sh-address-vn span {
                background: #1a9e4c url(wp-content/themes/zshop/img/page5-bg.png)
                    center 0 repeat;
                padding: 5px 9px;
                color: #fff;
                margin-left: 0px;
                /* display: none; */
            }
            .sh-address-vn img {
                vertical-align: middle;
                margin-top: -3px;
                margin-right: 4px;
            }
            .sh-address-vn {
                margin: 4px 0 16px -1px !important;
            }
            @media (max-width: 1024px) and (min-width: 680px) {
                .fbox-label {
                    padding-top: 44px;
                }

                .footer-content-new {
                    width: 100% !important;
                }
                .colfooter {
                    width: 50% !important;
                }
                .sh-map {
                    display: none;
                }
                .footer-border {
                    padding-bottom: 12px;
                }
                .sh-image img {
                    height: 154px;
                    padding-top: 0px;
                }
            }
            @media screen and (max-width: 650px) {
                .footer-content-new {
                    width: 100% !important;
                }
                .colfooter {
                    width: 100% !important;
                }
                .sh-map {
                    display: none;
                }
                .footer-border {
                    padding-bottom: 12px;
                }
                .sh-image img {
                    height: 154px;
                    padding-top: 17px;
                }
            }
            .nhanvien hr {
                width: 32%;
                margin: 25px auto -5px;
                height: 2px;
                background-color: #ff981c;
                border: none;
                border-bottom: 1px solid #e27b00;
            }
            .dcmap {
                line-height: initial;
                font-weight: 600;
                font-family: sans-serif;
            }
        </style>
        <div id="footerjs"></div>
    </div>
</footer>
<style>
    footer {
        padding-bottom: 33px;
    }
    .a-white {
        color: #fff !important;
    }
    .a-yellow {
        color: #ff0 !important;
    }
    .Footer {
        padding-bottom: 50px;
    }
    .cfooter2 {
        clear: both;
        background: #fff;
        padding-top: 0;
        position: relative;
    }
    .cfooter2 p {
        line-height: initial;
        color: #fff;
        font-size: 15px;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .footer2-top {
        clear: both;
        display: -webkit-box;
        padding: 35px 0 7px 0;
        background-size: cover;
    }
    .f-bank span.icon {
        float: left;
    }
    p.f-tel,
    .sh-address h4 {
        font-family: Arial, sans-serif !important;
    }
    .f-bank li {
        font-family: Arial, sans-serif !important;
        width: 25%;
        list-style: none;
        float: left;
        display: flex;
    }
    .f-logo {
        text-align: center;
        clear: both;
    }
    .f-bank {
        clear: both;
        display: table;
        padding: 0 20px 15px;
    }
    .f-bank p {
        width: 100%;
        font-size: 16px;
        color: #e8141b;
    }
    .f-bank span.icon {
        float: left;
        margin-right: 6px;
    }
    .f-logo img {
        width: 210px;
    }
    .f-bank li + li {
        border-left: 1px dashed #bdbdbd;
        padding-left: 30px;
    }
    .f-bank ul {
        margin: 0;
        width: 100%;
    }
    .footer2-top a {
        color: #3a3a3c;
        margin: 0;
        padding: 0;
        vertical-align: baseline;
        background: transparent;
        text-decoration: none;
    }
    img.hotline-full {
        top: 17px;
        position: absolute;
        left: 0;
        /* height: 60px; */
    }
    .footer2-top .container {
        margin-top: 20px;
        margin: auto;
        padding: 0 0px;
    }
    .footer2-top .column.span-4 {
        font-size: 15px;
        float: left;
        width: 24%;
        margin-right: 2%;
        margin-bottom: 0;
        position: relative;
        max-width: 100%;
    }
    .column.span-4.row_banking {
        width: 46%;
    }
    .row_plus {
        margin-right: 0% !important;
    }

    .fa {
        display: inline-block;
        font: normal normal normal 14px/1;
        font-family: FontAwesome !important;
    }
    p.f2-title {
        font-size: 18px;
        color: #fff;
        margin: 0;
        text-transform: uppercase;
        margin-bottom: 10px;
    }
    .mst span {
        border: 1px dashed #d2d2d2;
        padding: 1px 6px;
        letter-spacing: 7.5px;
    }
    .AdvPayBottom .head {
        text-align: left;
        font-size: 21px;
        margin-bottom: 13px;
        text-transform: uppercase;
        color: #009a48;
        font-weight: 600;
    }
    .AdvPayBottom .icon {
        float: left;
        margin-right: 8px;
    }
    .AdvPayBottom .desc {
        line-height: 21px;
        text-align: left;
        color: #fff;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    .baoqc {
        margin: 13px 0;
    }
    .baoqc img {
        margin-top: 3px;
        border: 2px solid #fff;
    }
    .desc u {
        font-weight: 600;
        color: #000000;
    }
    .link-noibo ul {
        padding: 0;
        margin: 0;
    }
    .link-noibo a {
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
        color: #00d061;
        border: 1px solid #999;
        float: left;
        margin: 5px;
        padding: 3px 5px;
    }
    .link-noibo a:hover {
        background: #e2f3f1;
        color: #414141;
        transition: all 0.4s;
    }
    .link-noibo li {
        list-style: none;
    }
    p.cdma {
        margin: 5px;
        padding-top: 8px;
    }
    .footer2-bottom {
        padding: 18px;
        background: #112532;
    }
    .footer2-bottom p {
        margin: 0;
        font-size: 11px;
        line-height: 15px;
        text-align: center;
        color: #ffffff78;
    }
    .footer2-bottom .a-white {
        letter-spacing: 1px;
        color: #ffffff78 !important;
    }
    @media screen and (max-width: 320px) {
    }
    @media (max-width: 1024px) and (min-width: 680px) {
        .column.span-4.row_plus {
            width: 100% !important;
        }
        .footer2-top .column.span-4.row_banking {
            padding: 20px 0% 15px;
        }
        img.hotline-full {
            width: initial;
        }
        .footer2-top {
            padding: 35px 0 20px 0;
        }
        .footer2-top .container {
            width: 98%;
            padding: 0 0px;
        }
        .footer2-top .column.span-4 {
            letter-spacing: -0.3px;
            float: left;
            width: 46%;
            padding: 20px 3% 0;
            border-bottom: 0px dashed #999;
            margin-right: 0;
            clear: inherit;
        }
        img.hotline-full {
            left: -76px;
        }
        h6.f2-title {
            font-size: 20px;
            font-weight: 600;
        }
        .column.span-4.row_plus {
            border-bottom: 0px solid #eee;
        }
        .footer2-bottom {
            padding: 10px 10px 60px !important;
        }
        .Footer {
            padding-bottom: 0;
        }
    }

    @media screen and (max-width: 650px) {
        .FooterContent {
            padding-bottom: 12px;
        }
        img.hotline-full {
            width: 100%;
        }
        .footer2-top {
            padding: 35px 0 0px 0;
        }
        .footer2-top .container {
            width: 98%;
            padding: 0 0px;
        }
        .footer2-top .column.span-4 {
            letter-spacing: -0.3px;
            float: left;
            width: 100%;
            padding: 20px 3% 15px;
            border-bottom: 1px dashed #999;
            margin-right: 0;
            clear: both;
        }
        img.hotline-full {
            left: -76px;
        }
        h6.f2-title {
            font-size: 20px;
            font-weight: 600;
        }
        .column.span-4.row_plus {
            border-bottom: 0px solid #eee;
        }
        .footer2-bottom {
            padding: 18px 6px 55px;
        }
    }
    span.fbolds {
        letter-spacing: -0.9px;
    }
</style>
<div class="cfooter2">
    <div class="f-logo"><img src="<?php echo $general['homepage_logo']; ?>" /></div>
    <div class="footer2-top">
        <a href="tel:<?php echo $general['contact_hotline']?>"
            ><img
                class="hotline-full"
                src="<?php echo $general['homepage_logo_ft']; ?>"
                title="Hotline : 0913.106.109"
        /></a>
        <div class="container clearfix">
            <div class="column span-4 row_address">
                <p class="f2-title"><?php echo $general['homepage_company']; ?></p>
                <p class="mst">
                    <i class="fa fa-qrcode"></i> Mã số thuế:
                    <span><a class="a-white" href="tel:0309891432"><?php echo $general['homepage_gpkd']; ?></a></span>
                </p>
                <p><i class="fa fa-map-marker"></i> <?php echo $general['contact_address']; ?></p>
                <p>
                    <i class="fa fa-fax"></i> <a class="a-yellow" href="tel:<?php echo $general['contact_hotline']?>"><?php echo $general['contact_hotline']?></a>
                    (Tổng đài tư vấn)
                </p>
                <p><i class="fa fa-envelope-o"></i> <?php echo $general['contact_email']; ?></p>
                <hr style="border-top: 1px solid #ffffff45" />
                <p class="f2-title">THÔNG TIN</p>
                <?php 
                $footer_menu_data = isset($footer_menu['data']) ? $footer_menu['data'] : (isset($main_nav['data']) ? $main_nav['data'] : []);
                if(is_array($footer_menu_data) && count($footer_menu_data)): 
                ?>
                    <?php foreach($footer_menu_data as $menu_item): 
                        $menuUrl = !empty($menu_item['canonical']) ? $menu_item['canonical'] : '#';
                    ?>
                    <p>
                        <i class="fa fa-caret-right"></i>
                        <a class="a-white" href="<?php echo htmlspecialchars($menuUrl); ?>"
                            ><?php echo htmlspecialchars($menu_item['title']); ?></a
                        >
                    </p>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
            <div class="column span-4 row_banking">
                <p class="f3-title">
                    <?php echo $general['homepage_introduce']; ?>
                </p>
                <p>
                    <?php echo $general['contact_map']; ?>
                </p>
            </div>
            <div class="column span-4 row_plus">
                <p class="f2-title">Giờ làm việc:</p>
                <style>
                    .giolam,
                    .hanhchinh,
                    .ngoaigioi {
                        width: 98.5%;
                    }
                    .hanhchinh {
                        background: #2a9700;
                        background: -webkit-gradient(
                            linear,
                            0% 0%,
                            0% 100%,
                            from(#30ad00),
                            to(#2a9700)
                        );
                        background: -webkit-linear-gradient(top, #30ad00, #2a9700);
                        background: -moz-linear-gradient(top, #30ad00, #2a9700);
                        background: -ms-linear-gradient(top, #30ad00, #2a9700);
                        background: -o-linear-gradient(top, #30ad00, #2a9700);
                        padding: 5px 0px 4px 0;
                    }
                    .hanhchinh p.gio1 {
                        font-weight: 600;
                        border: 1px dashed #f2f2f2;
                        border-left: 0px;
                        width: max-content;
                        margin: 5px 0px;
                        padding: 3px 20px;
                    }
                    .hanhchinh p {
                        padding: 0;
                        margin: 0;
                    }
                    .giolam {
                        margin: 0px 0 15px 5px;
                    }
                    .h_col1,
                    .h_col2 {
                        width: 49%;
                        float: left;
                    }
                    .h_col2 {
                        border-left: 1px solid #ccc;
                    }
                    p.gio1 {
                        padding: 4px 10px;
                    }
                    p.gio2 {
                        padding: 0 25px;
                    }
                    p.gio2.gio22 {
                        padding: 3px 25px;
                    }
                    .ngoaigioi {
                        background: #f2f2f2;
                        display: inline-table;
                        padding: 0px 0px;
                    }
                    .gio1 span {
                        margin: 0 14px;
                    }
                    .ngoaigioi .gio1.hname {
                        border-bottom: 1px solid #ccc;
                    }
                    .ngoaigioi p {
                        color: #333;
                        margin: 0;
                    }
                    .gio-padding.htitle {
                        padding: 5px 10px;
                        color: #ff0000;
                        font-weight: 600;
                    }
                    .h_col1 .gio-padding p {
                        padding: 1px 0;
                    }
                    .gio-padding {
                        padding: 5px 10px 5px 25px;
                    }
                    .gio-padding p:first-child,
                    .h_row1 .gio1,
                    .h_row2 .gio1 {
                        font-weight: 600;
                        font-size: 15.5px;
                        color: #0a85a0;
                    }
                    .h_row1 {
                        border-bottom: 1px solid #ccc;
                    }

                    .gio2:before {
                        content: "\f017";
                        font: normal normal normal 14px/1 FontAwesome;
                        font-size: inherit;
                        margin-right: 5px;
                    }

                    .h_col1 div p:first-child:before {
                        content: "\f041";
                        font-family: FontAwesome;
                        font-size: 18px;
                        color: #f00;
                        margin-right: 5px;
                    }
                    .h_col1 div p:before {
                        content: "\f178";
                        font: normal normal normal 14px/1 FontAwesome;
                        font-size: inherit;
                        margin-right: 5px;
                        color: #009600;
                    }
                    .h_row1 .gio1,
                    .h_row2 .gio1 {
                        padding: 4px 8px 0;
                        font-size: 15.4px;
                        letter-spacing: -0.5px;
                        color: #0a85a0;
                    }
                    .h_row1 .gio2,
                    .h_row2 .gio2 {
                        padding: 0px 10px 4px;
                    }
                    p.f3-title {
                        font-size: 14px;
                        line-height: 1.3em;
                        margin-bottom: 15px;
                        color: #bfbfbf;
                    }
                </style>
                <?php echo $general['contact_time']; ?>
            </div>
        </div>
    </div>
    <div class="footer2-bottom">
        <p>C<?php echo $general['homepage_copyright']; ?></p>
        <p>
            <?php echo $general['homepage_copydescription']; ?>
        </p>
    </div>
</div>
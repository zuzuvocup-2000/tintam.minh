<?php
$contact = get_slide(['keyword' => 'contact', 'language' => $language]);
$showroom = get_slide(['keyword' => 'showroom', 'language' => $language]);
?>
<div class="revo_breadcrumbs">
    <div class="container">
        <div class="listing-title">
            <h1><span>Liên hệ</span></h1>
        </div>
        <div class="breadcrumbs custom-font theme-clearfix">
            <ul class="breadcrumb">
                <li><a href="https://tintam.vn">Trang chủ</a><span class="go-page"></span></li>
                <li class="active">
                    <span><a href="https://tintam.vn/lien-he">Liên hệ</a></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="post-4053 page type-page status-publish hentry">
                <div class="entry-content tintuc-news">
                    <div class="entry-summary">
                        <div id="result" style="margin: 0 auto">
                            <?php if(isset($showroom) && is_array($showroom) && count($showroom)) { ?>
                            <div id="footerjs">
                                <div class="footer-content-new tshowroom">
                                    <p class="title-video-new">
                                        <i
                                            style="color: #fff !important; margin-top: 5px"
                                            class="fa fa-building fa2x fa-icon-dc"
                                        ></i>
                                        <?php echo $showroom[0]['cat_title']; ?>:
                                    </p>
                                    <p class="nhanvien">
                                        <img
                                            width="100%"
                                            src="<?php echo $showroom[0]['image']; ?>"
                                            alt="<?php echo $showroom[0]['cat_title']; ?>"
                                        />
                                    </p>
                                    
                                    <div class="fshowroom">
                                        <?php foreach ($showroom as $key => $value) { ?>
                                        <?php if($key == 0) {continue; } ?>
                                        <div class="colfooter fcol1">
                                            <div class="footer-border">
                                                <div class="sh-image">
                                                    <img
                                                        src="<?php echo $value['image']; ?>"
                                                        alt="<?php echo $value['title']; ?>"
                                                    />
                                                </div>
                                                <div class="sh-address">
                                                    <p class="sh-address-vn">
                                                        <span
                                                            ><img
                                                                src="public/frontend/img/icon18.png"
                                                                border="0"
                                                                alt="<?php echo $value['title']; ?>"
                                                            /><?php echo $value['alt']; ?></span
                                                        >
                                                    </p>
                                                    <p class="sh-address-tp">
                                                        <i class="fa fa-map-marker fa2x fa-icon-dc"></i>
                                                        <span>Showroom</span> <?php echo $value['title']; ?>:
                                                    </p>
                                                    <p class="dcmap"><?php echo $value['canonical']; ?></p>
                                                    <p class="f-tel">
                                                        Hotline:<a class="emobi" href="tel:<?php echo $value['description']; ?>"> <?php echo $value['description']; ?></a>
                                                    </p>
                                                    <span class="sh-map"
                                                        ><a
                                                            href="<?php echo $value['content']; ?>"
                                                            rel="nofollow"
                                                            target="_blank"
                                                            >Xem Bản đồ lớn</a
                                                        ></span
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            <?php if(isset($contact) && is_array($contact) && count($contact)) { ?>
                            <!-- Kho -->
                            <div class="fr-contact-main tintamkho" style="margin-bottom: 0px/">
                                <div class="main-contact">
                                    <div class="text-chinhanh iconcn2">
                                        <a class="i-color" chonicon=""><?php echo $contact[0]['cat_title'] ?>:&nbsp; </a>
                                    </div>
                                </div>
                                <div class="main-contact-kho">
                                  <?php foreach ($contact as $key => $value) { ?>
                                    <img
                                        width="750"
                                        alt="công ty may rèm cửa tphcm"
                                        border="0"
                                        src="<?php echo $value['image']; ?>"
                                    />
                                    <?php if(isset($value['title']) && $value['title']) { ?>
                                    <p chonicon-xanh=""><?php echo $value['title']; ?></p>
                                    <?php } ?>
                                    <br />
                                  <?php } ?>
                                </div>
                            </div>
                            <?php } ?>
                            <!-- #kho -->
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

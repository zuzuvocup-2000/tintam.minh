<?php
$model = new App\Models\AutoloadModel();
$productHot = $model->_get_where(array(
    'select' => 'tb1.id, tb1.viewed,  tb1.created_at ,tb1.productid, tb1.image,tb1.price,tb1.rate, tb1.price_promotion,  tb1.album, tb3.title, tb3.canonical, tb3.description, tb3.content',
    'table' => 'product as tb1',
    'where' => [
        'tb1.deleted_at' => 0,
        'tb1.publish' => 1,
        'tb1.hot' => 1,
    ],
    'join' => [
        [
            'object_relationship as tb2',
            'tb1.id = tb2.objectid AND tb2.module = "product" ',
            'inner'
        ],
        [
            'product_translate as tb3',
            'tb1.id = tb3.objectid AND tb3.module = "product" AND tb3.language = \'' . currentLanguage() . '\' ',
            'inner'
        ],
    ],
    'limit' => 3,
    'order_by' =>  'tb1.created_at desc',
    'group_by' => 'tb1.id'
), TRUE);
$criteria = get_slide(['keyword' => 'criteria', 'language' => $language]);
?>
<div class="container">
    <div class="row detail-products">
        <div id="contents-detail" class="content col-lg-12 col-md-12 col-sm-12" role="main">
            <div id="container">
                <div id="content" role="main">
                    <div class="single-product clearfix">
                        <div
                            id="product-6548"
                            class="post-6548 product type-product status-publish has-post-thumbnail product_cat-rem-cao-cap first instock sale shipping-taxable purchasable product-type-simple"
                        >
                            <div class="product_detail row ctsp">
                                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                    <div class="slider_img_productd">
                                        <?php if(!empty($object['price_promotion']) && $object['price_promotion'] < $object['price']):
                                            $salePercent = round((($object['price'] - $object['price_promotion']) / $object['price']) * 100);
                                        ?>
                                            <div class="sale-off">-<?php echo $salePercent; ?>%</div>
                                        <?php endif; ?>

                                        <?php
                                        $swiperId = 'swiper-product-' . $object['id'];
                                        $swiperThumbsId = 'swiper-thumbs-product-' . $object['id'];
                                        $album = $object['album'];
                                        if(is_string($album)) $album = json_decode($album, true);
                                        if(!empty($album)):
                                        ?>
                                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper <?php echo $swiperId; ?>">
                                            <div class="swiper-wrapper">
                                                <?php foreach($album as $img):
                                                    $imgUrl = (strpos($img, 'http') === 0) ? $img : BASE_URL . ltrim($img, '/');
                                                ?>
                                                <div class="swiper-slide">
                                                    <a href="<?php echo htmlspecialchars($imgUrl); ?>" data-uk-lightbox="{group:'gallerys'}" data-caption="<?php echo htmlspecialchars($object['title']); ?>">
                                                        <img src="<?php echo htmlspecialchars($imgUrl); ?>" />
                                                    </a>
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                            <div class="swiper-button-next"></div>
                                            <div class="swiper-button-prev"></div>
                                        </div>
                                        <div thumbsSlider="" class="swiper <?php echo $swiperThumbsId; ?>" style="margin-top: 10px;">
                                            <div class="swiper-wrapper">
                                                <?php foreach($album as $img):
                                                    $imgUrl = (strpos($img, 'http') === 0) ? $img : BASE_URL . ltrim($img, '/');
                                                ?>
                                                <div class="swiper-slide">
                                                    <img src="<?php echo htmlspecialchars($imgUrl); ?>" />
                                                </div>
                                                <?php endforeach; ?>
                                            </div>
                                        </div>
                                        <script>
                                            var swiperThumbs<?php echo $object['id']; ?> = new Swiper(".<?php echo $swiperThumbsId; ?>", {
                                                spaceBetween: 10,
                                                slidesPerView: 4,
                                                freeMode: true,
                                                watchSlidesProgress: true,
                                            });
                                            var swiperMain<?php echo $object['id']; ?> = new Swiper(".<?php echo $swiperId; ?>", {
                                                spaceBetween: 10,
                                                navigation: {
                                                    nextEl: ".<?php echo $swiperId; ?> .swiper-button-next",
                                                    prevEl: ".<?php echo $swiperId; ?> .swiper-button-prev",
                                                },
                                                thumbs: {
                                                    swiper: swiperThumbs<?php echo $object['id']; ?>,
                                                },
                                            });
                                        </script>
                                        <?php else: ?>
                                            <img src="<?php echo $object['image']; ?>" class="img-responsive" />
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-6 col-sm-12 col-xs-12 clear_xs">
                                    <div class="ctsp-note">
                                        <span class="span-ctsp-note"></span>
                                        <p>
                                            <strong>TÍN TÂM</strong> thương hiệu được Khách hàng tin
                                            dùng
                                        </p>
                                    </div>
                                    <div class="content_product_detail">
                                        <h1 itemprop="name" class="product_title entry-title">
                                            <?php echo $object['title']; ?>
                                        </h1>
                                        <div
                                            itemprop="offers"
                                            itemscope=""
                                            itemtype="http://schema.org/Offer"
                                        >
                                            <p class="price">
                                                <?php if(!empty($object['price_promotion']) && $object['price_promotion'] < $object['price']): ?>
                                                    <del><span class="woocommerce-Price-amount amount"><?php echo number_format($object['price'], 0, ',', '.'); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></del>
                                                    <ins><span class="woocommerce-Price-amount amount"><?php echo number_format($object['price_promotion'], 0, ',', '.'); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                                                <?php else: ?>
                                                    <ins><span class="woocommerce-Price-amount amount"><?php echo number_format($object['price'], 0, ',', '.'); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                                                <?php endif; ?>
                                            </p>
                                            <meta itemprop="price" content="<?php echo !empty($object['price_promotion']) ? $object['price_promotion'] : $object['price']; ?>" /><meta
                                                itemprop="priceCurrency"
                                                content="VND"
                                            /><link
                                                itemprop="availability"
                                                href="https://schema.org/InStock"
                                            />
                                        </div>
                                        <table class="table-ttsp">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <i
                                                            class="fa fa-check-circle-o"
                                                            aria-hidden="true"
                                                        ></i>
                                                        Sản xuất và phân phối:
                                                        <font color="#313131">titaco</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i
                                                            class="fa fa-check-circle-o"
                                                            aria-hidden="true"
                                                        ></i>
                                                        Kích thước:
                                                        <font color="#313131">Theo yêu cầu</font>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <i
                                                            class="fa fa-check-circle-o"
                                                            aria-hidden="true"
                                                        ></i>
                                                        Bảo hành:
                                                        <font color="#f00">Vui lòng liên hệ</font>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="soluong">Số lượng:</div>
                                        <div class="product-quantity mb10">
                                            <div class="uk-flex">
                                                <button class="btn_num num_1 button button_qty button_quantity_cart" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro ) &amp;&amp; qtypro > 1 ) result.value--;return false;" type="button">
                                                    <i class="fa fa-minus-circle"></i>
                                                </button>
                                                <input type="text" id="qtym" name="quantity" value="1" maxlength="3" class="form-control prd_quantity input-quantity" onkeypress="if ( isNaN(this.value + String.fromCharCode(event.keyCode) )) return false;" onchange="if(this.value == 0)this.value=1;">
                                                <button class="btn_num num_2 button button_qty button_quantity_cart" onclick="var result = document.getElementById('qtym'); var qtypro = result.value; if( !isNaN( qtypro )) result.value++;return false;" type="button">
                                                    <i class="fa fa-plus-circle"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="addcart-sp">
											<a href="" title="" class="btn-addcart btn-buy full" data-sku="SKU_<?php echo $object['id']; ?>" data-sku="SKU_<?php echo $object['id']; ?>" data-attr="<?php echo isset($version['data']['id']) ? $version['data']['id'] : 0; ?>">Thêm vào giỏ hàng</a>
										</div>
                                        <div class="div_call">
                                            <div class="call-div1">
                                                <i class="fa fa-phone" aria-hidden="true"></i>
                                            </div>
                                            <div class="call-div2">
                                                <p class="p-call-top">HOTLINE HỖ TRỢ SẢN PHẨM</p>
                                                <p class="p-call-mid"><?php echo $general['contact_hotline']; ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tabs clearfix">
                            <div class="tabbable">
                                <ul class="nav nav-tabs">
                                    <li class="description_tab active">
                                        <a href="#tab-description" data-toggle="tab">Mô tả</a>
                                    </li>
                                </ul>
                                <div class="clear"></div>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-description">
                                        <?php echo $object['content']; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-single-product theme-clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="lienquan" class="related products">
        <div class="sp-related">
            <p><i class="fa fa-cart-plus" aria-hidden="true"></i> Các sản phẩm tương tự:</p>
        </div>
        <ul class="products-loop row grid clearfix">
        <?php if(isset($product_general) && is_array($product_general) && count($product_general)):
            foreach($product_general as $key => $val):
                $productUrl = base_url($val['canonical']);
                $productImage = (strpos($val['image'], 'http') === 0) ? $val['image'] : BASE_URL . ltrim($val['image'], '/');
                $sale = FALSE;
                if($val['price_promotion'] != 0 && $val['price_promotion'] < $val['price']){
                    $sale = TRUE;
                    $salePercent = round((($val['price'] - $val['price_promotion']) / $val['price']) * 100);
                }
                $class = '';
                if($key == 0) $class .= ' first clear_lg clear_md clear_sm';
                if(($key + 1) == count($product_general)) $class .= ' last';
        ?>
        <li class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 <?php echo $class; ?> post-<?php echo $val['id']; ?> product type-product status-publish has-post-thumbnail product_cat-rem-cao-cap instock <?php echo ($sale) ? 'sale' : ''; ?> shipping-taxable purchasable product-type-simple">
            <div class="products-entry item-wrap clearfix">
                <div class="item-detail">
                    <div class="item-img products-thumb">
                        <?php if($sale): ?>
                            <span class="onsale">Giảm giá!</span>
                            <div class="sale-off">-<?php echo $salePercent; ?>%</div>
                        <?php endif; ?>
                        <a href="<?php echo $productUrl; ?>">
                            <div class="product-thumb-hover">
                                <img width="300" height="300" src="<?php echo $productImage; ?>" class="attachment-shop_catalog size-shop_catalog wp-post-image" alt="<?php echo $val['title']; ?>" />
                            </div>
                        </a>
                    </div>
                    <div class="item-content products-content">
                        <h4>
                            <a href="<?php echo $productUrl; ?>" title="<?php echo $val['title']; ?>"><?php echo $val['title']; ?></a>
                        </h4>
                        <div class="reviews-content"><div class="star"></div></div>
                        <span class="item-price">
                            <?php if($sale): ?>
                                <del><span class="woocommerce-Price-amount amount"><?php echo number_format($val['price'], 0, ',', '.'); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></del>
                                <ins><span class="woocommerce-Price-amount amount"><?php echo number_format($val['price_promotion'], 0, ',', '.'); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                            <?php else: ?>
                                <ins><span class="woocommerce-Price-amount amount"><?php echo number_format($val['price'], 0, ',', '.'); ?><span class="woocommerce-Price-currencySymbol">₫</span></span></ins>
                            <?php endif; ?>
                        </span>
                        <div class="item-bottom clearfix">
                            <a rel="nofollow" href="<?php echo $productUrl; ?>?add-to-cart=<?php echo $val['id']; ?>" data-quantity="1" data-product_id="<?php echo $val['id']; ?>" data-product_sku="" class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm vào giỏ</a>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <?php endforeach; endif; ?>
    </ul>
        <p style="height: 8px"></p>
        <div class="widget-1 widget-first widget text-20 widget_text hotlines-chinhanh" id="text-20">
            <div class="widget-inner">
                <div class="textwidget">
                    <div class="wpb_text_column wpb_content_element hotle-cn">
                        <div class="wpb_wrapper">
                            <ul class="list list-icons list-primary list-borders">
                                <li
                                    style="
                                        clear: both;
                                        color: #fc0e18;
                                        font-weight: 300;
                                        font-size: 28px;
                                        text-align: center;
                                        line-height: 45px;
                                        margin-top: -40px;
                                    "
                                >
                                    <i
                                        class="mif2x mif-ring-volume mif-ani-shuttle2 mif-ani-fast"
                                        style="font-size: 60px"
                                    ></i
                                    ><br />
                                    <span class="dc0">HÃY ĐIỆN THOẠI NGAY:</span><br />
                                    <span class="dc1"><?php echo $general['contact_hotline'] ?></span><br />
                                    <span class="dc4">Hỗ trợ tư vấn sản phẩm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="cngan"><a href="/lien-he">Xem địa chỉ chi nhánh gần nhất</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        var expandable_content_height = $(".expandable-toggle .description-productdetail").height();
        if (expandable_content_height > 220) {
            $(".expandable-toggle .description-productdetail").css({
                height: "220px",
                overflow: "hidden",
            });
        } else {
            $(".expandable-content_toggle").addClass("d-none");
        }
    });
</script>
<script>
    $(document).ready(function() {

        var slider = $("#productCarousel-slider");
        var thumbnailSlider = $("#productCarousel-thumb");
        var duration = 500;

        slider.owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            loop: false,
            smartSpeed: 1000,
            //touchDrag: false,
            //mouseDrag: false
        });
        slider.on("changed.owl.carousel", function(e) {
            thumbnailSlider.trigger("to.owl.carousel", [e.item.index, duration, true]);
            thumbnailSlider.find(".owl-item").removeClass("current");
            thumbnailSlider.find(".owl-item:nth-child(" + (e.item.index + 1) + ")").addClass("current");
        });
        thumbnailSlider.on("initialized.owl.carousel", function() {
            thumbnailSlider.find(".owl-item").eq(0).addClass("current");
        });
        thumbnailSlider.owlCarousel({
            loop: false,
            nav: false,
            margin: 15,
            center: false,
            responsive: {
                0: {
                    items: 5,
                },
                768: {
                    items: 5,
                },
                992: {
                    items: 6,
                },
                1200: {
                    items: 6,
                },
            },
        });
        thumbnailSlider.on("changed.owl.carousel", function(e) {
            slider.trigger("to.owl.carousel", [e.item.index, duration, true]);
            slider.find(".owl-item").removeClass("current");
            slider.find(".owl-item:nth-child(" + (e.item.index + 1) + ")").addClass("current");
        });
        thumbnailSlider.on("click", ".owl-item", function(e) {
            e.preventDefault();
            thumbnailSlider.find(".owl-item").removeClass("current");
            $(this).addClass("current");
            var number = $(this).index();
            slider.data("owl.carousel").to(number, duration, true);
        });
        $('#productScroll-spy a[href*="#"]').click(function(e) {
            e.preventDefault();
            $("#productScroll-spy .product-thumb").removeClass("active");
            $("html, body").animate({
                    scrollTop: $($.attr(this, "href")).offset().top + 20,
                },
                500
            );
        });
        var sliderMobile = $("#productCarousel-slider-mobile");
        sliderMobile.owlCarousel({
            items: 1,
            nav: true,
            dots: true,
            lazyLoad: true,
            loop: false,
            smartSpeed: 1000,
        });

    });
    $("body").on("click", ".js_expandable_content", function(e) {
        if (!$(".expandable-toggle").hasClass("opened")) {
            $(".expandable-content_toggle").removeClass("btn-closemore").addClass("btn-viewmore").find(".expandable-content_toggle-text").html("Xem thêm nội dung");
            var curHeight = $(".expandable-toggle .description-productdetail").height();
            expandable_content_height = 220;
            $(".expandable-toggle .description-productdetail")
                .height(curHeight)
                .animate({
                        height: expandable_content_height,
                    },
                    300,
                    function() {
                        $(this).parent().addClass("opened");
                    }
                );
            var x = $(".product-description").offset().top;
            HRT.All.smoothScroll(x - 90, 250);
        } else {
            $(".expandable-toggle .description-productdetail").css("height", "auto");
            $(".expandable-toggle").removeClass("opened");
            $(".expandable-content_toggle").removeClass("btn-viewmore").addClass("btn-closemore").find(".expandable-content_toggle-text").html("Rút gọn nội dung");
        }
    });
    $(".js-btn-faq").click(function() {
        $(this).hide();
        $(".faq-item").removeClass("d-none");
    });

    $(".product-question .header-faqs").on("click", function() {
        if (!$(this).hasClass("opened")) {
            $(this).closest(".product-question").find(".header-faqs").removeClass("opened");
            $(this).closest(".product-question").find(".content-faqs").stop().slideUp("medium");
            $(this).toggleClass("opened").parent().find(".content-faqs").stop().slideToggle("medium");
        } else {
            $(this).toggleClass("opened").parent().find(".content-faqs").stop().slideToggle("medium");
        }
    });
    
</script>
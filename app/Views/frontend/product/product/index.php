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
                                        <div class="sale-off">-26%</div>
                                        <div
                                            id="product_img_6548"
                                            class="product-images loading"
                                            data-rtl="false"
                                        >
                                            <div
                                                class="product-images-container clearfix thumbnail-bottom"
                                            >
                                                <div class="slider product-responsive">
                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <a
                                                                href="https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm.jpg "
                                                                data-rel="prettyPhoto[product-gallery]"
                                                                class="zoom"
                                                                ><img
                                                                    width="600"
                                                                    height="600"
                                                                    src="https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-600x600.jpg"
                                                                    class="attachment-shop_single size-shop_single"
                                                                    alt=""
                                                                    srcset="
                                                                        https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-600x600.jpg 600w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-150x150.jpg 150w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-300x300.jpg 300w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-768x768.jpg 768w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-180x180.jpg 180w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm.jpg         975w
                                                                    "
                                                                    sizes="(max-width: 600px) 100vw, 600px"
                                                            /></a>
                                                        </div>
                                                    </div>
                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <a
                                                                href="https://tintam.vn/wp-content/uploads/2018/10/002-2.jpg "
                                                                data-rel="prettyPhoto[product-gallery]"
                                                                class="zoom"
                                                                ><img
                                                                    width="600"
                                                                    height="585"
                                                                    src="https://tintam.vn/wp-content/uploads/2018/10/002-2-600x585.jpg"
                                                                    class="attachment-shop_single size-shop_single"
                                                                    alt=""
                                                            /></a>
                                                        </div>
                                                    </div>
                                                    <div class="item-img-slider">
                                                        <div class="images">
                                                            <a
                                                                href="https://tintam.vn/wp-content/uploads/2018/10/002.jpg "
                                                                data-rel="prettyPhoto[product-gallery]"
                                                                class="zoom"
                                                                ><img
                                                                    width="600"
                                                                    height="600"
                                                                    src="https://tintam.vn/wp-content/uploads/2018/10/002-600x600.jpg"
                                                                    class="attachment-shop_single size-shop_single"
                                                                    alt=""
                                                                    srcset="
                                                                        https://tintam.vn/wp-content/uploads/2018/10/002-600x600.jpg 600w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/002-150x150.jpg 150w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/002-300x300.jpg 300w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/002-768x768.jpg 768w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/002-180x180.jpg 180w,
                                                                        https://tintam.vn/wp-content/uploads/2018/10/002.jpg         780w
                                                                    "
                                                                    sizes="(max-width: 600px) 100vw, 600px"
                                                            /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div
                                                    class="slider product-responsive-thumbnail"
                                                    id="product_thumbnail_6548"
                                                >
                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img
                                                                width="180"
                                                                height="180"
                                                                src="https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-180x180.jpg"
                                                                class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                alt=""
                                                                srcset="
                                                                    https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-180x180.jpg 180w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-150x150.jpg 150w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-300x300.jpg 300w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-768x768.jpg 768w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm-600x600.jpg 600w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/rem-vai-mau-xanh-den-tita-tphcm.jpg         975w
                                                                "
                                                                sizes="(max-width: 180px) 100vw, 180px"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img
                                                                width="180"
                                                                height="180"
                                                                src="https://tintam.vn/wp-content/uploads/2018/10/002-2-180x180.jpg"
                                                                class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                alt=""
                                                                srcset="
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-2-180x180.jpg 180w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-2-150x150.jpg 150w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-2-300x300.jpg 300w
                                                                "
                                                                sizes="(max-width: 180px) 100vw, 180px"
                                                            />
                                                        </div>
                                                    </div>
                                                    <div class="item-thumbnail-product">
                                                        <div class="thumbnail-wrapper">
                                                            <img
                                                                width="180"
                                                                height="180"
                                                                src="https://tintam.vn/wp-content/uploads/2018/10/002-180x180.jpg"
                                                                class="attachment-shop_thumbnail size-shop_thumbnail"
                                                                alt=""
                                                                srcset="
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-180x180.jpg 180w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-150x150.jpg 150w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-300x300.jpg 300w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-768x768.jpg 768w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002-600x600.jpg 600w,
                                                                    https://tintam.vn/wp-content/uploads/2018/10/002.jpg         780w
                                                                "
                                                                sizes="(max-width: 180px) 100vw, 180px"
                                                            />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
                                            Rèm Cửa Vải Trơn Màu Xanh Đen
                                        </h1>
                                        <div class="reviews-content">
                                            <div class="star"></div>
                                            <a
                                                href="#reviews"
                                                class="woocommerce-review-link"
                                                rel="nofollow"
                                                >978 Đánh giá</a
                                            >
                                        </div>
                                        <div
                                            itemprop="offers"
                                            itemscope=""
                                            itemtype="http://schema.org/Offer"
                                        >
                                            <p class="price">
                                                <del
                                                    ><span class="woocommerce-Price-amount amount"
                                                        >1,170,000<span
                                                            class="woocommerce-Price-currencySymbol"
                                                            >₫</span
                                                        ></span
                                                    ></del
                                                >
                                                <ins
                                                    ><span class="woocommerce-Price-amount amount"
                                                        >860,000<span
                                                            class="woocommerce-Price-currencySymbol"
                                                            >₫</span
                                                        ></span
                                                    ></ins
                                                >
                                            </p>
                                            <meta itemprop="price" content="860000" /><meta
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
                                                <p class="p-call-mid">0903.104.106</p>
                                                <p class="p-call-bottom">Tư vấn tại công trình</p>
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
                                        <div
                                            id="ez-toc-container"
                                            class="ez-toc-v2_0_66_1 counter-flat ez-toc-counter ez-toc-grey ez-toc-container-direction"
                                        >
                                            <div class="ez-toc-title-container">
                                                <span class="ez-toc-title-toggle"></span>
                                            </div>
                                            <nav>
                                                <ul class="ez-toc-list ez-toc-list-level-1">
                                                    <li class="ez-toc-page-1">
                                                        <a
                                                            class="ez-toc-link ez-toc-heading-1"
                                                            href="#CHON_REM_CUA_DEP_%E2%80%93_BEN_%E2%80%93_Tiet_Kiem_Hon_30_TIEN_CHO_NGOI_NHA_MOI"
                                                            title="CHỌN RÈM CỬA ĐẸP – BỀN – Tiết Kiệm Hơn 30% TIỀN CHO NGÔI NHÀ MỚI"
                                                            >CHỌN RÈM CỬA ĐẸP – BỀN – Tiết Kiệm Hơn 30%
                                                            TIỀN CHO NGÔI NHÀ MỚI</a
                                                        >
                                                    </li>
                                                    <li class="ez-toc-page-1">
                                                        <a
                                                            class="ez-toc-link ez-toc-heading-2"
                                                            href="#Mau_rem_vai_tron_1_mau_cao_cap_sang_trong_cho_can_phong_dep"
                                                            title="Mẫu rèm vải trơn 1 màu cao cấp, sang trọng cho căn phòng đẹp"
                                                            >Mẫu rèm vải trơn 1 màu cao cấp, sang trọng
                                                            cho căn phòng đẹp</a
                                                        >
                                                    </li>
                                                    <li class="ez-toc-page-1">
                                                        <a
                                                            class="ez-toc-link ez-toc-heading-3"
                                                            href="#Nhan_vien_Tin_Tam_thi_cong_man_rem_cua_khach_san"
                                                            title="Nhân viên Tín Tâm thi công màn rèm cửa khách sạn"
                                                            >Nhân viên Tín Tâm thi công màn rèm cửa
                                                            khách sạn</a
                                                        >
                                                    </li>
                                                    <li class="ez-toc-page-1">
                                                        <a
                                                            class="ez-toc-link ez-toc-heading-4"
                                                            href="#Tag_rem_cua_rem_cua_dep_rem_cua_so_rem_cua_phong_ngu_rem_cua_phong_khach_rem_cua_can_ho_rem_cua_can_ho_rem_cua_chung_cu_rem_cua_tin_tam"
                                                            title="Tag: rem cua, rem cua dep, rem cua so, rem cua phong ngu, rem cua phong khach, rèm cửa căn hộ, rem cua can ho, rèm cửa chung cư, rèm cửa tín tâm"
                                                            >Tag: rem cua, rem cua dep, rem cua so, rem
                                                            cua phong ngu, rem cua phong khach, rèm cửa
                                                            căn hộ, rem cua can ho, rèm cửa chung cư,
                                                            rèm cửa tín tâm</a
                                                        >
                                                    </li>
                                                </ul>
                                            </nav>
                                            <style type="text/css">
                                                .social_dev {
                                                    background: #dbedf9;
                                                    margin: 9px auto 0;
                                                    border-radius: 3px;
                                                }
                                                .social_dev a {
                                                    margin-right: 5px;
                                                }
                                            </style>
                                            <div class="social_dev">
                                                <a
                                                    href="https://www.facebook.com/mancuasg"
                                                    rel="nofollow"
                                                    class="social-item-dev"
                                                    title="Theo dõi trên Facebook"
                                                    target="_blank"
                                                >
                                                    <img src="https://tintam.vn/images/icon/fb.png"
                                                /></a>
                                                <a
                                                    href="https://zalo.me/0913106109"
                                                    rel="nofollow"
                                                    class="social-item-dev"
                                                    title="Nhắn Tin Nhanh (Zalo 0913-106-109)"
                                                    target="_blank"
                                                >
                                                    <img src="https://tintam.vn/images/icon/zl.png"
                                                /></a>
                                                <a
                                                    href="https://www.youtube.com/@noithatdeptitaco"
                                                    rel="nofollow"
                                                    class="social-item-dev"
                                                    title="Theo dõi trên Youtube"
                                                    target="_blank"
                                                >
                                                    <img src="https://tintam.vn/images/icon/ytb.png"
                                                /></a>
                                                <a
                                                    href="https://www.tiktok.com/@remcuatitaco"
                                                    rel="nofollow"
                                                    class="social-item-dev"
                                                    title="Theo dõi trên Tiktok"
                                                    target="_blank"
                                                >
                                                    <img src="https://tintam.vn/images/icon/tt.png"
                                                /></a>
                                                <a
                                                    href="https://photos.app.goo.gl/rneCt5ztcDYg7M4KA"
                                                    rel="nofollow"
                                                    class="social-item-dev"
                                                    title="Theo dõi trên Google Photo"
                                                    target="_blank"
                                                >
                                                    <img src="https://tintam.vn/images/icon/gg.png"
                                                /></a>
                                            </div>
                                        </div>
                                        <h2 style="color: #333333; font-family: Tahoma">
                                            <span
                                                class="ez-toc-section"
                                                id="CHON_REM_CUA_DEP_%E2%80%93_BEN_%E2%80%93_Tiet_Kiem_Hon_30_TIEN_CHO_NGOI_NHA_MOI"
                                            ></span
                                            ><span style="font-size: 22px"
                                                >CHỌN RÈM CỬA
                                                <span style="color: #ff0000"
                                                    >ĐẸP – BỀN – Tiết Kiệm Hơn 30%</span
                                                >
                                                TIỀN CHO NGÔI NHÀ MỚI</span
                                            ><span class="ez-toc-section-end"></span>
                                        </h2>
                                        <p>
                                            <span style="font-size: 18px"
                                                ><span style="font-family: tahoma, geneva, sans-serif"
                                                    ><span lang="EN-US">Những bộ </span></span
                                                ><em
                                                    ><a href="https://tintam.vn/sp/rem-cua-phong-khach"
                                                        >rèm cửa</a
                                                    ></em
                                                >
                                                đẹp cao cấp cho Bạn tham khảo</span
                                            >
                                        </p>
                                        <p>
                                            <span style="font-size: 18px"
                                                >Cập nhật Bảng Giá mới nhất có nhiều
                                                <span style="color: #ff0000">Ưu Đãi </span>và
                                                <span style="color: #ff0000">Quà Tặng</span> Cho Nhà
                                                Bạn</span
                                            >
                                        </p>
                                        <p>
                                            <img
                                                class="aligncenter"
                                                src="https://tintam.vn/wp-content/uploads/2018/10/002.jpg"
                                                alt="rem cua vai tron mau xanh den"
                                            />
                                        </p>
                                        <p>
                                            <img
                                                class="aligncenter"
                                                src="https://tintam.vn/wp-content/uploads/2018/10/002-2.jpg"
                                                alt="rem cua dep mau xanh den"
                                            />
                                        </p>
                                        <h3 style="text-align: center">
                                            <span
                                                class="ez-toc-section"
                                                id="Mau_rem_vai_tron_1_mau_cao_cap_sang_trong_cho_can_phong_dep"
                                            ></span
                                            ><span style="font-size: 24px"
                                                >Mẫu rèm vải trơn 1 màu cao cấp, sang trọng cho căn
                                                phòng đẹp</span
                                            ><span class="ez-toc-section-end"></span>
                                        </h3>
                                        <p></p>
                                        <center>
                                            <p></p>
                                            <div class="i-muiten animated"><p> </p></div>
                                            <p></p>
                                        </center>
                                        <p></p>
                                        <p style="text-align: center">
                                            <iframe
                                                longdesc="màn rèm cửa www.tintam.vn"
                                                name="rem cua dep cao cap"
                                                width="800"
                                                height="450"
                                                frameborder="0"
                                                src="https://tintam.vn/wp-content/plugins/wp-rocket/inc/front/img/blank.gif"
                                                data-lazy-src="https://www.youtube.com/embed/Wg9oT0jwR08"
                                            ></iframe>
                                        </p>
                                        <p
                                            style="
                                                margin: 1em 0px;
                                                color: #333333;
                                                font-size: 12px;
                                                font-style: normal;
                                                font-variant: normal;
                                                font-weight: normal;
                                                letter-spacing: normal;
                                                line-height: normal;
                                                orphans: auto;
                                                text-indent: 0px;
                                                text-transform: none;
                                                white-space: normal;
                                                widows: 1;
                                                word-spacing: 0px;
                                                -webkit-text-stroke-width: 0px;
                                                font-family: Tahoma;
                                                background-color: #ffffff;
                                            "
                                            align="center"
                                        >
                                            <span style="font-size: 20px"
                                                ><span style="color: #ff0000"
                                                    ><span style="background-color: #ffff00"
                                                        >Xem Mẫu Rèm Đẹp và Bảng Giá Mới Nhất Cuối
                                                        Trang</span
                                                    ></span
                                                ></span
                                            >
                                        </p>
                                        <p style="text-align: center">
                                            <img
                                                class="aligncenter"
                                                src="https://tintam.vn/wp-content/uploads/2017/02/thi-cong-rem-cua-giay-dan-tuong.jpg"
                                                alt="thi-cong-rem-cua-giay-dan-tuong"
                                            />
                                        </p>
                                        <h4 style="text-align: center">
                                            <span
                                                class="ez-toc-section"
                                                id="Nhan_vien_Tin_Tam_thi_cong_man_rem_cua_khach_san"
                                            ></span
                                            ><span style="font-size: 16px"
                                                ><img
                                                    class="aligncenter wp-image-3747"
                                                    src="https://tintam.vn/wp-content/uploads/2017/04/man-motor-tu-dong-1.jpg"
                                                    alt="man-motor-tu-dong (1)"
                                                    width="700"
                                                    height="525"
                                                    srcset="
                                                        https://tintam.vn/wp-content/uploads/2017/04/man-motor-tu-dong-1.jpg         700w,
                                                        https://tintam.vn/wp-content/uploads/2017/04/man-motor-tu-dong-1-300x225.jpg 300w
                                                    "
                                                    sizes="(max-width: 700px) 100vw, 700px"
                                                />Nhân viên Tín Tâm thi công màn rèm cửa khách sạn</span
                                            ><span class="ez-toc-section-end"></span>
                                        </h4>
                                        <p style="text-align: center">
                                            <span style="font-size: 16px"
                                                ><u
                                                    ><img
                                                        class="wp-image-3720 size-full aligncenter"
                                                        src="https://tintam.vn/wp-content/uploads/2017/04/mau-man-vai-chong-nang-quan-7.jpg"
                                                        alt="mau-man-vai-chong-nang-quan-7"
                                                        width="700"
                                                        height="525"
                                                        srcset="
                                                            https://tintam.vn/wp-content/uploads/2017/04/mau-man-vai-chong-nang-quan-7.jpg         700w,
                                                            https://tintam.vn/wp-content/uploads/2017/04/mau-man-vai-chong-nang-quan-7-300x225.jpg 300w
                                                        "
                                                        sizes="(max-width: 700px) 100vw, 700px"
                                                    />Mẫu rèm cửa sổ đẹp</u
                                                > sang trọng cho khách sạn cao cấp tại tphcm</span
                                            >
                                        </p>
                                        <p style="text-align: center"></p>
                                        <div
                                            class="widget-1 widget-first widget text-14 widget_text amr_widget gdt-phongngu"
                                            id="text-14"
                                        >
                                            <div class="widget-inner">
                                                <div class="textwidget">
                                                    <p>
                                                        <img
                                                            class="aligncenter wp-image-11299 size-full"
                                                            src="https://tintam.vn/wp-content/uploads/2021/04/mua-rem-cua-tphcm-tita-min-1.png"
                                                            alt="dat mua rem cua sale"
                                                        />
                                                    </p>
                                                    <p style="text-align: center">
                                                        <span style="font-size: 27px; color: #e00b10"
                                                            >CHÚNG TÔI MONG CƠ HỘI PHỤC VỤ BẠN</span
                                                        >
                                                    </p>
                                                    <p>
                                                        <img
                                                            class="zoomin img-hot aligncenter"
                                                            src="https://tintam.vn/img/rem-cua-dep-cao-cap.png"
                                                            alt="rem cua cao cap tphcm"
                                                        />
                                                    </p>
                                                    <p class="imgluuy">
                                                        <img
                                                            src="https://tintam.vn/contact-slide/nhung-luu-y-khi-mua-rem-cua-giay-dan-tuong.jpg"
                                                            border="0"
                                                            alt="mua rèm cửa giá rẻ tphcm"
                                                        />
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                        <p></p>
                                        <div class="we-img">
                                            <center>
                                                <p></p>
                                                <p style="text-align: center">
                                                    <img
                                                        class="aligncenter"
                                                        src="https://tintam.vn/wp-content/uploads/2018/10/xuong-may-rem-vai-cao-cam-tintam-titavn-1.jpg"
                                                        alt="rèm cửa cao cấp cho phòng ngủ"
                                                        border="0"
                                                    />
                                                </p>
                                                <p style="text-align: center">
                                                    <img
                                                        class="aligncenter"
                                                        src="https://tintam.vn/wp-content/uploads/2018/10/xuong-may-rem-vai-cao-cam-tintam-titavn-2.jpg"
                                                        alt="rèm cửa cao cấp cho phòng ngủ vợ chồng"
                                                        border="0"
                                                    />
                                                </p>
                                                <p style="text-align: center">
                                                    <img
                                                        class="aligncenter"
                                                        src="https://tintam.vn/wp-content/uploads/2018/10/xuong-may-rem-vai-cao-cam-tintam-titavn-3.jpg"
                                                        alt="rèm cửa cao cấp cho phòng khách"
                                                        border="0"
                                                    />
                                                </p>
                                                <p></p>
                                            </center>
                                        </div>
                                        <p></p>
                                        <p style="text-align: center"> </p>
                                        <p></p>
                                        <center>
                                            <p></p>
                                            <p> </p>
                                            <p class="but-alink">
                                                <a
                                                    href="http://congtrinh.tintam.vn/rem-motor-tu-dong-xi-riverview-palace-duong-nguyen-van-huong-quan-2-tphcm.html"
                                                    target="_blank"
                                                    >» NHẤN Xem Công Trình Đẹp</a
                                                >
                                            </p>
                                            <p></p>
                                        </center>
                                        <p></p>
                                        <p style="text-align: center"> </p>
                                        <p style="text-align: center"> </p>
                                        <p style="text-align: center">
                                            <span
                                                style="
                                                    font-size: 28px;
                                                    background-color: #ffffff;
                                                    color: #ff0000;
                                                "
                                                ><span style="font-family: tahoma, geneva, sans-serif"
                                                    >CHÚNG TÔI MONG CƠ HỘI PHỤC VỤ BẠN</span
                                                ></span
                                            >
                                        </p>
                                        <p style="text-align: center">
                                            <span style="font-size: 16px"
                                                ><span style="font-family: tahoma, geneva, sans-serif"
                                                    ><img
                                                        class="img-hot aligncenter"
                                                        style="width: 405px; height: 162px"
                                                        src="https://tintam.vn/img/rem-cua-dep-cao-cap.png"
                                                        alt="rem cua cao cap tphcm" /></span
                                            ></span>
                                        </p>
                                        <p style="text-align: center"> </p>
                                        <p style="text-align: center">
                                            <span
                                                class="text-hot1"
                                                style="color: #ff0000; font-size: 24px"
                                                >HÃY GỌI NGAY ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ – XEM MẪU MIỄN
                                                PHÍ</span
                                            >
                                        </p>
                                        <p style="text-align: center">
                                            <span
                                                class="text-hot"
                                                style="color: #0000ff; font-size: 24px"
                                                >Cảm Nhận Của Khách Hàng Về Tín Tâm</span
                                            >
                                        </p>
                                        <p style="text-align: center">
                                            <iframe
                                                longdesc="màn rèm cửa www.tintam.vn"
                                                name="rem cua dep cao cap"
                                                width="800"
                                                height="450"
                                                frameborder="0"
                                                src="https://tintam.vn/wp-content/plugins/wp-rocket/inc/front/img/blank.gif"
                                                data-lazy-src="https://www.youtube.com/embed/oKD4M8olCfI"
                                            ></iframe>
                                        </p>
                                        <p
                                            style="
                                                color: #333333;
                                                font-family: Tahoma;
                                                text-align: center;
                                            "
                                        >
                                            <span style="color: #0000ff"
                                                ><span style="font-size: 18px"
                                                    >CÔNG TY TÍN TÂM ĐÃ ĐƯỢC 3 KÊNH TRUYỀN HÌNH HTV9;
                                                    VTV3; VTV9 PHỎNG VẤN
                                                </span></span
                                            >
                                        </p>
                                        <p style="text-align: center"> </p>
                                        <div
                                            class="widget-2 widget-last widget text-15 widget_text amr_widget gdt-phongngu"
                                            id="text-15"
                                        >
                                            <div class="widget-inner">
                                                <div class="textwidget">
                                                    <p
                                                        class="text-channel"
                                                        style="color: #f00; margin-top: 0px"
                                                    >
                                                        <i class="fa fa-22x fa-diamond"></i> CHÚNG TÔI
                                                        CAM KẾT CHO BẠN
                                                    </p>
                                                    <div class="main-camket">
                                                        <div class="box-camket">
                                                            <div class="logo-camket">
                                                                <img
                                                                    alt="rem cua dep cao cap"
                                                                    src="https://tintam.vn/images/bao-hanh-mien-phi-giay-dan-tuong-3nam.png"
                                                                />
                                                            </div>
                                                            <div class="info-camket bg-camket">
                                                                <p class="text-camket">
                                                                    <i
                                                                        class="fa fa11x fa-check-circle"
                                                                    ></i>
                                                                    Cam kết 100% sản phẩm đúng nguồn
                                                                    gốc, xuất xứ
                                                                </p>
                                                                <p class="text-camket">
                                                                    <i
                                                                        class="fa fa11x fa-check-circle"
                                                                    ></i>
                                                                    Bộ rèm đẹp cho nhà Bạn với công ty
                                                                    Tín Tâm 20 năm kinh nghiệm. (May
                                                                    theo tiêu chuẩn khách sạn Việt Nam
                                                                    3-5 sao)
                                                                </p>
                                                                <p class="text-camket">
                                                                    <i
                                                                        class="fa fa11x fa-check-circle"
                                                                    ></i>
                                                                    Phụ kiện, thanh treo rèm cao cấp Bảo
                                                                    hành lên đến 5 năm
                                                                </p>
                                                                <p class="text-camket">
                                                                    <i
                                                                        class="fa fa11x fa-check-circle"
                                                                    ></i>
                                                                    Hoàn tiền 100% nếu sản phẩm không
                                                                    đúng chất luợng mẫu rèm cửa
                                                                </p>
                                                                <p
                                                                    class="text-camket camket-red camket-bg-p"
                                                                >
                                                                    Hơn 28.000 khách hàng hài lòng sản
                                                                    phẩm &amp; dịch vụ của Tín Tâm
                                                                </p>
                                                                <p
                                                                    class="text-camket camket-thanhcong camket-bg-p"
                                                                >
                                                                    Chúng Tôi cam kết Bạn sẽ có Bộ rèm
                                                                    tốt nhất &amp; rất hài lòng
                                                                </p>
                                                            </div>
                                                            <div class="bt-view-camket hvr-float">
                                                                <a href="#lien-he"> </a>
                                                                <div class="icon-camket"> </div>
                                                                <div class="text-bt-map">
                                                                    <a
                                                                        href="#lien-he"
                                                                        target="_blank"
                                                                        rel="noopener noreferrer"
                                                                        >LIÊN HỆ CHI NHÁNH GẦN NHẤT
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <p style="text-align: center"> </p>
                                        <div class="alink-main">
                                            <p class="label-alink-view">
                                                Những vấn đề Bạn đang quan tâm
                                            </p>
                                            <div class="alink-views">
                                                <p class="alink-1">
                                                    <a
                                                        class="alinkcolor1"
                                                        href="http://remcuahcm.com/Bang-gia.html"
                                                        target="_blank"
                                                        rel="nofollow"
                                                        >Xem Bảng giá mới nhất</a
                                                    >
                                                </p>
                                                <p class="alink-2">
                                                    <a
                                                        class="alinkcolor2"
                                                        href="http://sp.tintam.vn/#maurem"
                                                        target="_blank"
                                                        rel="nofollow"
                                                        >Mẫu rèm màn đẹp cho căn hộ</a
                                                    >
                                                </p>
                                                <p class="alink-2">
                                                    <a
                                                        class="alinkcolor3"
                                                        href="http://congtrinh.tintam.vn/thi-cong/man-rem-cua"
                                                        target="_blank"
                                                        rel="nofollow"
                                                        >Xem Công Trình Đẹp</a
                                                    >
                                                </p>
                                            </div>
                                        </div>
                                        <h4 class="h4-tab">
                                            <span
                                                class="ez-toc-section"
                                                id="Tag_rem_cua_rem_cua_dep_rem_cua_so_rem_cua_phong_ngu_rem_cua_phong_khach_rem_cua_can_ho_rem_cua_can_ho_rem_cua_chung_cu_rem_cua_tin_tam"
                                            ></span
                                            >Tag:
                                            <a href="https://tintam.vn/sp/rem-cao-cap">rem cua</a>,
                                            <a href="https://tintam.vn">rem cua dep</a>,
                                            <a href="https://tintam.vn/sp/rem-cao-cap">rem cua so</a>,
                                            <a href="https://tintam.vn/sp/rem-cua-phong-ngu"
                                                >rem cua phong ngu</a
                                            >,
                                            <a href="https://tintam.vn/sp/rem-cua-phong-khach"
                                                >rem cua phong khach</a
                                            >,
                                            <a href="https://tintam.vn/sp/rem-cao-cap">rèm cửa căn hộ</a
                                            >,
                                            <a href="https://tintam.vn/sp/rem-cao-cap">rem cua can ho</a
                                            >,
                                            <a href="https://tintam.vn/sp/rem-cao-cap"
                                                >rèm cửa chung cư</a
                                            >,
                                            <a href="https://tintam.vn/sp/rem-cao-cap"
                                                >rèm cửa tín tâm</a
                                            ><span class="ez-toc-section-end"></span>
                                        </h4>
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
            <li
                class="item col-lg-3 col-md-4 col-sm-6 clear_lg clear_md clear_sm col-xs-6 post-6551 product type-product status-publish has-post-thumbnail product_cat-rem-cao-cap first instock sale shipping-taxable purchasable product-type-simple"
            >
                <div class="products-entry item-wrap clearfix">
                    <div class="item-detail">
                        <div class="item-img products-thumb">
                            <span class="onsale">Giảm giá!</span>
                            <div class="sale-off">-26%</div>
                            <a href="https://tintam.vn/shop/rem-cua-vai-tron-mau-xam-ghi-nhat.html"
                                ><div class="product-thumb-hover">
                                    <img
                                        width="300"
                                        height="300"
                                        src="https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm-300x300.jpg"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt=""
                                        srcset="
                                            https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm-300x300.jpg 300w,
                                            https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm-150x150.jpg 150w,
                                            https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm-768x768.jpg 768w,
                                            https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm-180x180.jpg 180w,
                                            https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm-600x600.jpg 600w,
                                            https://tintam.vn/wp-content/uploads/2018/10/rem-vai-1mau-xem-ghi-nhat-tron-tphcm.jpg         800w
                                        "
                                        sizes="(max-width: 300px) 100vw, 300px"
                                    /></div
                            ></a>
                        </div>
                        <div class="item-content products-content">
                            <h4>
                                <a
                                    href="https://tintam.vn/shop/rem-cua-vai-tron-mau-xam-ghi-nhat.html"
                                    title="Rèm Cửa Vải Trơn Màu Xám Ghi Nhạt"
                                    >Rèm Cửa Vải Trơn Màu Xám Ghi Nhạt</a
                                >
                            </h4>
                            <div class="reviews-content"><div class="star"></div></div>
                            <span class="item-price"
                                ><del
                                    ><span class="woocommerce-Price-amount amount"
                                        >1,170,000<span class="woocommerce-Price-currencySymbol"
                                            >₫</span
                                        ></span
                                    ></del
                                >
                                <ins
                                    ><span class="woocommerce-Price-amount amount"
                                        >860,000<span class="woocommerce-Price-currencySymbol"
                                            >₫</span
                                        ></span
                                    ></ins
                                ></span
                            >
                            <div class="item-bottom clearfix">
                                <a
                                    rel="nofollow"
                                    href="/shop/rem-cua-vai-tron-mau-xanh-den.html?add-to-cart=6551"
                                    data-quantity="1"
                                    data-product_id="6551"
                                    data-product_sku="RV018"
                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                    >Thêm vào giỏ</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li
                class="item col-lg-3 col-md-4 col-sm-6 col-xs-6 post-6539 product type-product status-publish has-post-thumbnail product_cat-rem-cao-cap instock sale shipping-taxable purchasable product-type-simple"
            >
                <div class="products-entry item-wrap clearfix">
                    <div class="item-detail">
                        <div class="item-img products-thumb">
                            <span class="onsale">Giảm giá!</span>
                            <div class="sale-off">-26%</div>
                            <a href="https://tintam.vn/shop/rem-cua-vai-tron-mau-cuc-dep.html"
                                ><div class="product-thumb-hover">
                                    <img
                                        width="300"
                                        height="300"
                                        src="https://tintam.vn/wp-content/uploads/2018/10/005-300x300.jpg"
                                        class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                        alt=""
                                        srcset="
                                            https://tintam.vn/wp-content/uploads/2018/10/005-300x300.jpg 300w,
                                            https://tintam.vn/wp-content/uploads/2018/10/005-150x150.jpg 150w,
                                            https://tintam.vn/wp-content/uploads/2018/10/005-768x768.jpg 768w,
                                            https://tintam.vn/wp-content/uploads/2018/10/005-180x180.jpg 180w,
                                            https://tintam.vn/wp-content/uploads/2018/10/005-600x600.jpg 600w,
                                            https://tintam.vn/wp-content/uploads/2018/10/005.jpg         780w
                                        "
                                        sizes="(max-width: 300px) 100vw, 300px"
                                    /></div
                            ></a>
                        </div>
                        <div class="item-content products-content">
                            <h4>
                                <a
                                    href="https://tintam.vn/shop/rem-cua-vai-tron-mau-cuc-dep.html"
                                    title="Rèm Cửa Vải Trơn Màu Đỏ Đô Cực Đẹp"
                                    >Rèm Cửa Vải Trơn Màu Đỏ Đô Cực Đẹp</a
                                >
                            </h4>
                            <div class="reviews-content"><div class="star"></div></div>
                            <span class="item-price"
                                ><del
                                    ><span class="woocommerce-Price-amount amount"
                                        >1,170,000<span class="woocommerce-Price-currencySymbol"
                                            >₫</span
                                        ></span
                                    ></del
                                >
                                <ins
                                    ><span class="woocommerce-Price-amount amount"
                                        >860,000<span class="woocommerce-Price-currencySymbol"
                                            >₫</span
                                        ></span
                                    ></ins
                                ></span
                            >
                            <div class="item-bottom clearfix">
                                <a
                                    rel="nofollow"
                                    href="/shop/rem-cua-vai-tron-mau-xanh-den.html?add-to-cart=6539"
                                    data-quantity="1"
                                    data-product_id="6539"
                                    data-product_sku="RV021"
                                    class="button product_type_simple add_to_cart_button ajax_add_to_cart"
                                    >Thêm vào giỏ</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li
                class="item col-lg-3 col-md-4 col-sm-6 clear_sm col-xs-6 post-3637 product type-product status-publish has-post-thumbnail product_cat-rem-cao-cap instock shipping-taxable product-type-simple"
            >
                <div class="products-entry item-wrap clearfix">
                    <div class="item-detail">
                        <div class="item-img products-thumb">
                            <a href="https://tintam.vn/shop/rem-cao-cap-cho-quan-cafe.html"
                                ><img
                                    width="300"
                                    height="300"
                                    src="https://tintam.vn/wp-content/uploads/2017/04/IMG_0107-300x300.jpg"
                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                    alt=""
                                    srcset="
                                        https://tintam.vn/wp-content/uploads/2017/04/IMG_0107-300x300.jpg        300w,
                                        https://tintam.vn/wp-content/uploads/2017/04/IMG_0107-150x150.jpg        150w,
                                        https://tintam.vn/wp-content/uploads/2017/04/IMG_0107-180x180.jpg        180w,
                                        https://tintam.vn/wp-content/uploads/2017/04/IMG_0107-600x600.jpg        600w,
                                        https://tintam.vn/wp-content/uploads/2017/04/IMG_0107-e1492347528451.jpg 699w
                                    "
                                    sizes="(max-width: 300px) 100vw, 300px"
                            /></a>
                        </div>
                        <div class="item-content products-content">
                            <h4>
                                <a
                                    href="https://tintam.vn/shop/rem-cao-cap-cho-quan-cafe.html"
                                    title="Rèm cao cấp cho quán cafe"
                                    >Rèm cao cấp cho quán cafe</a
                                >
                            </h4>
                            <div class="reviews-content"><div class="star"></div></div>
                            <div class="item-bottom clearfix">
                                <a
                                    rel="nofollow"
                                    href="https://tintam.vn/shop/rem-cao-cap-cho-quan-cafe.html"
                                    data-quantity="1"
                                    data-product_id="3637"
                                    data-product_sku=""
                                    class="button product_type_simple ajax_add_to_cart"
                                    >Đọc tiếp</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li
                class="item col-lg-3 col-md-4 col-sm-6 clear_md col-xs-6 post-3607 product type-product status-publish has-post-thumbnail product_cat-rem-cao-cap last instock shipping-taxable product-type-simple"
            >
                <div class="products-entry item-wrap clearfix">
                    <div class="item-detail">
                        <div class="item-img products-thumb">
                            <a href="https://tintam.vn/shop/rem-cao-cap-chong-nang.html"
                                ><img
                                    width="300"
                                    height="300"
                                    src="https://tintam.vn/wp-content/uploads/2017/04/rem_dep_cao_cap-min-300x300.jpg"
                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                    alt=""
                                    srcset="
                                        https://tintam.vn/wp-content/uploads/2017/04/rem_dep_cao_cap-min-300x300.jpg 300w,
                                        https://tintam.vn/wp-content/uploads/2017/04/rem_dep_cao_cap-min-150x150.jpg 150w,
                                        https://tintam.vn/wp-content/uploads/2017/04/rem_dep_cao_cap-min-180x180.jpg 180w
                                    "
                                    sizes="(max-width: 300px) 100vw, 300px"
                            /></a>
                        </div>
                        <div class="item-content products-content">
                            <h4>
                                <a
                                    href="https://tintam.vn/shop/rem-cao-cap-chong-nang.html"
                                    title="Rèm cao cấp chống nắng"
                                    >Rèm cao cấp chống nắng</a
                                >
                            </h4>
                            <div class="reviews-content"><div class="star"></div></div>
                            <div class="item-bottom clearfix">
                                <a
                                    rel="nofollow"
                                    href="https://tintam.vn/shop/rem-cao-cap-chong-nang.html"
                                    data-quantity="1"
                                    data-product_id="3607"
                                    data-product_sku=""
                                    class="button product_type_simple ajax_add_to_cart"
                                    >Đọc tiếp</a
                                >
                            </div>
                        </div>
                    </div>
                </div>
            </li>
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
                                    <span class="dc1">0913.106.109 </span><br />
                                    <span class="dc4">Hỗ trợ tư vấn sản phẩm</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="cngan"><a href="#lien-he">Xem địa chỉ chi nhánh gần nhất</a></p>
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
        $("body").scrollspy({
            target: "#productScroll-spy",
            offset: $(".productDetail-information").offset().top,
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
    $(document).ready(function() {
        $('.product-gallery__item[data-fancybox="gallery"]').fancybox({
            protect: true,
            hash: false,
            buttons: ["slideShow", "zoom", "thumbs", "close"],
            animationEffect: "zoom",
            infobar: false,
        });
    });
</script>
<script src="public/frontend/200000743117/1001150740/14/jquery.fancybox.min.js?v=140" type="text/javascript"></script>
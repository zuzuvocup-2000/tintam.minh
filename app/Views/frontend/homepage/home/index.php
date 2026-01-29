<?php
$model = new App\Models\AutoloadModel();
$banner_homepage = get_slide(['keyword' => 'main', 'language' => $language]);
$banner_menu = get_slide(['keyword' => 'menu-product', 'language' => $language]);
$productList = $model->_get_where(array(
    'select' => 'tb1.id, tb1.viewed,  tb1.created_at ,tb1.productid, tb1.image,tb1.price,tb1.rate, tb1.price_promotion,  tb1.album, tb3.title, tb3.canonical, tb3.description, tb3.content',
    'table' => 'product as tb1',
    'where' => [
        'tb1.deleted_at' => 0,
        'tb1.publish' => 1,
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
    'limit' => 16,
    'order_by' => 'tb1.created_at desc',
    'group_by' => 'tb1.id'
), TRUE);
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
    'limit' => 8,
    'order_by' => 'tb1.created_at desc',
    'group_by' => 'tb1.id'
), TRUE);
?>
<div class="revo_breadcrumbs">
    <div class="container">
        <div class="listing-title">
            <h1><span>Rèm cửa đẹp, Sàn gỗ sàn nhựa, Giấy dán tường TPHCM</span></h1>
        </div>
    </div>
</div>
<div class="row">
    <div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="post-10913 page type-page status-publish has-post-thumbnail hentry">
            <div class="entry-content tintuc-news">
                <div class="entry-summary">
                    <div data-vc-full-width="true" data-vc-full-width-init="false"
                        class="vc_row wpb_row vc_row-fluid banner-w">
                        <div class="container">
                            <div
                                class="wpb_column vc_column_container vc_col-sm-3 vc_col-lg-3 vc_col-md-3 vc_hidden-md vc_hidden-sm vc_col-xs-12 vc_hidden-xs">
                                <div class="vc_column-inner vc_custom_1614738167343">
                                    <div class="wpb_wrapper"></div>
                                </div>
                            </div>
                            <div
                                class="slide-home-main slideshow-home0 wpb_column vc_column_container vc_col-sm-9 vc_col-lg-9 vc_col-md-9 vc_col-xs-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_single_image wpb_content_element vc_align_left">
                                            <figure class="wpb_wrapper vc_figure">
                                                <div class="vc_single_image-wrapper vc_box_border_grey">
                                                    <?php if (!empty($banner_homepage) && !empty($banner_homepage[0]['image'])): ?>
                                                        <img width="1076" height="519"
                                                            src="<?php echo $banner_homepage[0]['image']; ?>"
                                                            class="vc_single_image-img attachment-full"
                                                            alt="<?php echo !empty($banner_homepage[0]['alt']) ? $banner_homepage[0]['alt'] : $banner_homepage[0]['title']; ?>"
                                                            sizes="(max-width: 1076px) 100vw, 1076px" />
                                                    <?php endif; ?>
                                                </div>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="container">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="wpb_text_column wpb_content_element">
                                            <div class="wpb_wrapper">
                                                <div class="widget-1 widget-first widget nav_menu-7 widget_nav_menu amr_widget gdt-phongngu"
                                                    id="nav_menu-7">
                                                    <div class="widget-inner">
                                                        <ul id="menu-tudev-home-sp" class="menu">
                                                            <?php if (!empty($banner_menu)): ?>
                                                                <?php foreach ($banner_menu as $item): ?>
                                                                    <li class="menu-item-<?php echo $item['id']; ?>">
                                                                        <a class="item-link"
                                                                            href="<?php echo !empty($item['canonical']) ? buildMenuUrl($item['canonical']) : '#'; ?>">
                                                                            <span class="menu-title">
                                                                                <?php if (!empty($item['image'])): ?>
                                                                                    <img src="<?php echo $item['image']; ?>"
                                                                                        alt="<?php echo $item['title']; ?>" />
                                                                                <?php endif; ?>
                                                                                <p><?php echo $item['title']; ?></p>
                                                                            </span>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if (isset($panel['product-home']['data']) && is_array($panel['product-home']['data']) && count($panel['product-home']['data'])): ?>
                        <?php foreach ($panel['product-home']['data'] as $index => $category):
                            $sectionId = str_replace(' ', '-', strtolower($category['canonical']));
                            $sectionClass = ($index % 2 == 0) ? 'sp1' : 'sp2';
                            $swiperId = 'swiper-' . $category['id'];
                            $swiperThumbsId = 'swiper-thumbs-' . $category['id'];
                            $album = is_array($category['album']) ? $category['album'] : (is_string($category['album']) ? json_decode($category['album'], true) : []);
                            $products = isset($category['post']) && is_array($category['post']) ? array_slice($category['post'], 0, 6) : [];
                            ?>
                            <section id="<?php echo $sectionId; ?>" data-vc-full-width="true"
                                data-vc-full-width-init="false"
                                class="vc_section section-sp <?php echo $sectionClass; ?> vc_section-o-content-bottom vc_section-flex">
                                <div class="vc_row wpb_row vc_row-fluid">
                                    <div class="container">
                                        <div class="wpb_column vc_column_container vc_col-sm-12">
                                            <div class="vc_column-inner">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_wp_text wpb_content_element">
                                                        <div class="widget widget_text">
                                                            <div class="textwidget">
                                                                <p></p>
                                                                <p class="hn-1">sản phẩm</p>
                                                                <h2 class="hn-2">
                                                                    <?php echo htmlspecialchars($category['title']); ?>
                                                                </h2>
                                                                <p class="hn-3">Chống nắng</p>
                                                                <p></p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vc_row wpb_row vc_row-fluid display--row">
                                    <div class="container">
                                        <div class="display--img wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1610007879945">
                                                <div class="wpb_wrapper">
                                                    <div class="vc_wp_text wpb_content_element">
                                                        <div class="widget widget_text">
                                                            <div class="textwidget">
                                                                <?php if (!empty($album)): ?>
                                                                    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                                                                        class="swiper <?php echo $swiperId; ?>">
                                                                        <div class="swiper-wrapper">
                                                                            <?php foreach ($album as $img):
                                                                                $imgUrl = (strpos($img, 'http') === 0) ? $img : BASE_URL . ltrim($img, '/');
                                                                                ?>
                                                                                <div class="swiper-slide">
                                                                                    <img
                                                                                        src="<?php echo htmlspecialchars($imgUrl); ?>" />
                                                                                </div>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                        <div class="swiper-button-next"></div>
                                                                        <div class="swiper-button-prev"></div>
                                                                    </div>
                                                                    <div thumbsSlider=""
                                                                        class="swiper <?php echo $swiperThumbsId; ?>">
                                                                        <div class="swiper-wrapper">
                                                                            <?php foreach ($album as $img):
                                                                                $imgUrl = (strpos($img, 'http') === 0) ? $img : BASE_URL . ltrim($img, '/');
                                                                                ?>
                                                                                <div class="swiper-slide">
                                                                                    <img
                                                                                        src="<?php echo htmlspecialchars($imgUrl); ?>" />
                                                                                </div>
                                                                            <?php endforeach; ?>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        var swiper<?php echo $category['id']; ?> = new Swiper(".<?php echo $swiperThumbsId; ?>", {
                                                                            spaceBetween: 16.5,
                                                                            slidesPerView: 3.5,
                                                                            freeMode: true,
                                                                            watchSlidesProgress: true,
                                                                        });
                                                                        var swiper2<?php echo $category['id']; ?> = new Swiper(".<?php echo $swiperId; ?>", {
                                                                            spaceBetween: 10,
                                                                            navigation: {
                                                                                nextEl: ".<?php echo $swiperId; ?> .swiper-button-next",
                                                                                prevEl: ".<?php echo $swiperId; ?> .swiper-button-prev",
                                                                            },
                                                                            thumbs: {
                                                                                swiper: swiper<?php echo $category['id']; ?>,
                                                                            },
                                                                        });
                                                                    </script>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php if (!empty($category['canonical'])): ?>
                                                        <div class="vc_btn3-container img--full vc_btn3-inline">
                                                            <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                                                                href="<?php echo base_url($category['canonical']); ?>" title=""
                                                                target="_blank" rel="nofollow">Click xem ảnh Full</a>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="display--sp wpb_column vc_column_container vc_col-sm-6">
                                            <div class="vc_column-inner vc_custom_1610012359206">
                                                <div class="wpb_wrapper">
                                                    <div class="woocommerce columns-3">
                                                        <ul class="products-loop row grid clearfix">
                                                            <?php if (!empty($products)):
                                                                $productCount = count($products);
                                                                foreach ($products as $pIndex => $product):
                                                                    $productUrl = base_url($product['canonical']);
                                                                    $productImage = !empty($product['avatar']) ? $product['avatar'] : (!empty($product['image']) ? $product['image'] : '');
                                                                    $productImageUrl = $productImage ? ((strpos($productImage, 'http') === 0) ? $productImage : BASE_URL . ltrim($productImage, '/')) : '';
                                                                    $hasSale = !empty($product['price_promotion']) && $product['price_promotion'] < $product['price'];
                                                                    $salePercent = $hasSale ? round((($product['price'] - $product['price_promotion']) / $product['price']) * 100) : 0;
                                                                    $clearClasses = [];
                                                                    if ($pIndex == 0)
                                                                        $clearClasses[] = 'clear_lg clear_md clear_sm';
                                                                    if ($pIndex == $productCount - 1)
                                                                        $clearClasses[] = 'last';
                                                                    if ($pIndex == 0)
                                                                        $clearClasses[] = 'first';
                                                                    $clearClass = implode(' ', $clearClasses);
                                                                    ?>
                                                                    <li
                                                                        class="item col-lg-3 col-md-4 col-sm-6 <?php echo $clearClass; ?> col-xs-6 post-<?php echo $product['id']; ?> product type-product status-publish has-post-thumbnail product_cat-<?php echo $category['canonical']; ?> instock <?php echo $hasSale ? 'sale' : ''; ?> shipping-taxable purchasable product-type-simple">
                                                                        <div class="products-entry item-wrap clearfix">
                                                                            <div class="item-detail">
                                                                                <div class="item-img products-thumb">
                                                                                    <?php if ($hasSale): ?>
                                                                                        <span class="onsale">Giảm giá!</span>
                                                                                        <div class="sale-off">-<?php echo $salePercent; ?>%
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                    <?php if ($productImageUrl): ?>
                                                                                        <a
                                                                                            href="<?php echo htmlspecialchars($productUrl); ?>">
                                                                                            <div class="product-thumb-hover">
                                                                                                <img width="300" height="300"
                                                                                                    src="<?php echo htmlspecialchars($productImageUrl); ?>"
                                                                                                    class="attachment-shop_catalog size-shop_catalog wp-post-image"
                                                                                                    alt="<?php echo htmlspecialchars($product['title']); ?>" />
                                                                                            </div>
                                                                                        </a>
                                                                                    <?php endif; ?>
                                                                                </div>
                                                                                <div class="item-content products-content">
                                                                                    <h4>
                                                                                        <a href="<?php echo htmlspecialchars($productUrl); ?>"
                                                                                            title="<?php echo htmlspecialchars($product['title']); ?>"><?php echo htmlspecialchars($product['title']); ?></a>
                                                                                    </h4>
                                                                                    <div class="reviews-content">
                                                                                        <div class="star"></div>
                                                                                    </div>
                                                                                    <?php if (!empty($product['price'])): ?>
                                                                                        <span class="item-price">
                                                                                            <?php if ($hasSale && !empty($product['price'])): ?>
                                                                                                <del>
                                                                                                    <span
                                                                                                        class="woocommerce-Price-amount amount">
                                                                                                        <?php echo number_format($product['price'], 0, ',', '.'); ?><span
                                                                                                            class="woocommerce-Price-currencySymbol">₫</span>
                                                                                                    </span>
                                                                                                </del>
                                                                                            <?php endif; ?>
                                                                                            <ins>
                                                                                                <span
                                                                                                    class="woocommerce-Price-amount amount">
                                                                                                    <?php echo number_format($hasSale && !empty($product['price_promotion']) ? $product['price_promotion'] : $product['price'], 0, ',', '.'); ?><span
                                                                                                        class="woocommerce-Price-currencySymbol">₫</span>
                                                                                                </span>
                                                                                            </ins>
                                                                                        </span>
                                                                                    <?php endif; ?>
                                                                                    <div class="item-bottom clearfix">
                                                                                        <a rel="nofollow"
                                                                                            href="/?add-to-cart=<?php echo $product['id']; ?>"
                                                                                            data-quantity="1"
                                                                                            data-product_id="<?php echo $product['id']; ?>"
                                                                                            data-product_sku=""
                                                                                            class="button product_type_simple add_to_cart_button ajax_add_to_cart">Thêm
                                                                                            vào giỏ</a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            <?php endif; ?>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <?php if ($index < count($panel['product-home']['data']) - 1): ?>
                                <div class="vc_row-full-width vc_clearfix"></div>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php endif; ?>
                    <?php if (isset($panel['cong-trinh']) && is_array($panel['cong-trinh'])):
                        $congTrinhPanel = $panel['cong-trinh'];
                        $congTrinhData = isset($congTrinhPanel['data']) ? $congTrinhPanel['data'] : [];
                        $categories = [];
                        if (!empty($congTrinhData)) {
                            foreach ($congTrinhData as $item) {
                                if (!empty($item['cat_canonical'])) {
                                    $categories[] = $item['cat_canonical'];
                                }
                            }
                        }
                        $categories = array_unique($categories);
                        $categoryString = implode(',', $categories);
                        ?>
                        <div id="main-congtrinh" data-vc-full-width="true" data-vc-full-width-init="false"
                            data-vc-stretch-content="true" class="vc_row wpb_row vc_row-fluid vc_row-no-padding">
                            <div class="container">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div class="vc_row wpb_row vc_inner vc_row-fluid width70">
                                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                                <div class="vc_column-inner">
                                                    <div class="wpb_wrapper">
                                                        <p style="text-align: center"
                                                            class="vc_custom_heading titlehome-congtrinh">
                                                            <?= $congTrinhPanel['title'] ?>
                                                        </p>
                                                        <div
                                                            class="wpb_text_column wpb_content_element deshome-congtrinh">
                                                            <div class="wpb_wrapper">
                                                                <p>
                                                                    <?= $congTrinhPanel['description'] ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="vc_row-full-width vc_clearfix"></div>
                        <div data-vc-full-width="true" data-vc-full-width-init="false" data-vc-stretch-content="true"
                            class="vc_row wpb_row vc_row-fluid bg-congtrinh vc_row-no-padding">
                            <div class="container">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                        <div class="vc_column-inner">
                                            <div class="wpb_wrapper">
                                                <div class="vc_row wpb_row vc_inner vc_row-fluid width80 congtrinh-4col">
                                                    <div class="wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div id="ya_portfolio_2" class="revo-portfolio fitRows"
                                                                data-categories="<?= $categoryString ?>" data-max_page="15"
                                                                data-number="<?= count($congTrinhData) ?>" data-orderby=""
                                                                data-order="" data-style="fitRows"
                                                                data-attributes="grid-item p-lg-4 p-md-4 p-sm-3 p-xs-1">
                                                                <div class="portfolio-container row">
                                                                    <ul id="container_ya_portfolio_2"
                                                                        class="portfolio-content clearfix row">
                                                                        <?php if (!empty($congTrinhData)): ?>
                                                                            <?php foreach ($congTrinhData as $item):
                                                                                $itemUrl = base_url($item['canonical'] . HTSUFFIX);
                                                                                $itemImage = base_url($item['image']);
                                                                                $itemTitle = htmlspecialchars($item['title']);
                                                                                $catClass = !empty($item['cat_canonical']) ? $item['cat_canonical'] : '';

                                                                                // Lấy album ảnh
                                                                                $album = [];
                                                                                if (!empty($item['album'])) {
                                                                                    $album = json_decode($item['album'], true);
                                                                                }
                                                                                // Ảnh lớn nhất để hiển thị đầu tiên trong lightbox
                                                                                $popupImage = (is_array($album) && count($album) > 0) ? base_url($album[0]) : $itemImage;
                                                                                ?>
                                                                                <li class="grid-item grid-item p-lg-4 p-md-4 p-sm-3 p-xs-1 <?= $catClass ?>">
                                                                                    <div class="portfolio-item-inner">
                                                                                        <div class="portfolio-in">
                                                                                            <a class="portfolio-img" href="<?= $itemUrl ?>" title="<?= $itemTitle ?>">
                                                                                                <img src="<?= $itemImage ?>" class="attachment-large size-large wp-post-image" alt="<?= $itemTitle ?>" />
                                                                                            </a>
                                                                                            <div class="p-item-content">
                                                                                                <a rel="nofollow" class="p-item-title" href="<?= $itemUrl ?>" title="<?= $itemTitle ?>"><?= $itemTitle ?></a>
                                                                                                <a rel="nofollow" href="<?= $itemUrl ?>" class="p-item item-more" title="<?= $itemTitle ?>"><span class="fa fa-link"></span></a>
                                                                                                <a href="<?= $popupImage ?>" class="p-item item-popup" title="<?= $itemTitle ?>" data-uk-lightbox="{group:'home-congtrinh'}"><span class="fa fa-search"></span></a>
                                                                                                
                                                                                                <?php if (is_array($album) && count($album) > 0): ?>
                                                                                                    <?php foreach ($album as $key => $img): 
                                                                                                        if ($key == 0 && base_url($img) == $popupImage) continue; // Bỏ qua ảnh đầu nếu nó trùng với popupImage
                                                                                                    ?>
                                                                                                        <a href="<?= base_url($img) ?>" class="item-popup hidden" title="<?= $itemTitle ?>" data-uk-lightbox="{group:'home-congtrinh'}"></a>
                                                                                                    <?php endforeach; ?>
                                                                                                <?php endif; ?>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </li>
                                                                            <?php endforeach; ?>
                                                                        <?php endif; ?>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="wpb_text_column wpb_content_element">
                                                <div class="wpb_wrapper">
                                                    <div style="text-align: center; width: 100%">
                                                        <div class="xem-sale-2 ts-offer-right">
                                                            <a href="<?= base_url($congTrinhPanel['canonical'] . HTSUFFIX) ?>"
                                                                rel="nofollow noopener noreferrer">Xem thêm
                                                                công trình</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row-full-width vc_clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<?php

function convertYouTubeUrlToIframe($url)
{
    if (preg_match('/youtu\.be\/([^\?]*)/', $url, $matches)) {
        $videoId = $matches[1];
    } elseif (preg_match('/youtube\.com\/.*v=([^&]*)/', $url, $matches)) {
        $videoId = $matches[1];
    } else {
        return 'Invalid YouTube URL';
    }

    return '<iframe src="https://www.youtube.com/embed/' . $videoId . '" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
}
?>
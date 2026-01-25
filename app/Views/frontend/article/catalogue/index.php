<div class="revo_breadcrumbs">
    <div class="container">
        <div class="listing-title">
            <h1><span><?= $detailCatalogue['title'] ?></span></h1>
        </div>
        <div class="breadcrumbs custom-font theme-clearfix">
            <ul class="breadcrumb">
                <li><a href="<?= base_url() ?>">Trang chủ</a><span class="go-page"></span></li>
                <li class="active">
                    <span><a href="<?= base_url($detailCatalogue['canonical']) ?>"><?= $detailCatalogue['title'] ?></a></span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div id="contents" role="main" class="main-page col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="post-1736 page type-page status-publish hentry">
                <div class="entry-content tintuc-news">
                    <div class="entry-summary">
                        <div class="vc_row wpb_row vc_row-fluid congtrinh-3col">
                            <div class="wpb_column vc_column_container vc_col-sm-12">
                                <div class="vc_column-inner">
                                    <div class="wpb_wrapper">
                                        <div
                                            id="ya_portfolio_2"
                                            class="revo-portfolio fitRows"
                                            data-categories="man-rem-cua,rem-van-phong,giay-dan-tuong"
                                            data-max_page="3"
                                            data-number="40"
                                            data-orderby=""
                                            data-order=""
                                            data-style="fitRows"
                                            data-attributes="grid-item p-lg-4 p-md-3 p-sm-2 p-xs-1"
                                        >
                                            <div class="portfolio-tab">
                                                <ul id="tab_ya_portfolio_2">
                                                    <li class="selected" data-portfolio-filter="*">Tất cả</li>
                                                    <li data-portfolio-filter=".man-rem-cua" class="">Màn rèm cửa</li>
                                                    <li data-portfolio-filter=".rem-van-phong" class="">
                                                        Rèm văn phòng
                                                    </li>
                                                    <li data-portfolio-filter=".giay-dan-tuong" class="">
                                                        Giấy dán tường
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="portfolio-container row">
                                                <ul
                                                    id="container_ya_portfolio_2"
                                                    class="portfolio-content clearfix row"
                                                    style="position: relative;"
                                                >
                                                    <?php 
                                                    if(isset($articleList) && is_array($articleList) && count($articleList)):
                                                        foreach($articleList as $item):
                                                            // Tạo category slug từ cat_canonical
                                                            $catSlug = '';
                                                            if(isset($item['cat_canonical']) && !empty($item['cat_canonical'])) {
                                                                $catSlug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $item['cat_canonical'])));
                                                                $catSlug = preg_replace('/-+/', '-', $catSlug);
                                                            }
                                                            
                                                            // Tạo URLs
                                                            $articleUrl = base_url($item['canonical'] . HTSUFFIX);
                                                            $articleImage = !empty($item['image']) ? base_url($item['image']) : '';
                                                            $externalLink = 'http://congtrinh.tintam.vn/' . $item['canonical'] . '.html';
                                                            
                                                            // Lấy popup image (có thể dùng image chính hoặc album)
                                                            $popupImage = $articleImage;
                                                            
                                                            // Tạo title
                                                            $itemTitle = isset($item['title']) ? htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8') : '';
                                                    ?>
                                                    <li
                                                        class="grid-item grid-item p-lg-4 p-md-3 p-sm-2 p-xs-1 <?= $catSlug ?>"
                                                    >
                                                        <div class="portfolio-item-inner">
                                                            <div class="portfolio-in">
                                                                <?php if(!empty($articleImage)): ?>
                                                                <a
                                                                    class="portfolio-img"
                                                                    href="<?= $articleUrl ?>"
                                                                    title="<?= $itemTitle ?>"
                                                                >
                                                                    <img
                                                                        src="<?= $articleImage ?>"
                                                                        class="attachment-large size-large wp-post-image"
                                                                        alt="<?= $itemTitle ?>"
                                                                    />
                                                                </a>
                                                                <?php endif; ?>
                                                                <div class="p-item-content">
                                                                    <a
                                                                        rel="nofollow"
                                                                        target="_blank"
                                                                        class="p-item-title"
                                                                        href="<?= $externalLink ?>"
                                                                        title="<?= $itemTitle ?>"
                                                                        ><?= $itemTitle ?></a
                                                                    >
                                                                    <a
                                                                        rel="nofollow"
                                                                        target="_blank"
                                                                        href="<?= $externalLink ?>"
                                                                        class="p-item item-more"
                                                                        title="<?= $itemTitle ?>"
                                                                        ><span class="fa fa-link"></span
                                                                    ></a>
                                                                    <?php if(!empty($popupImage)): ?>
                                                                    <a
                                                                        href="<?= $popupImage ?>"
                                                                        class="p-item item-popup"
                                                                        title="<?= $itemTitle ?>"
                                                                        ><span class="fa fa-search"></span
                                                                    ></a>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <?php 
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="btn-loadmore">
                                                <span class="respl-image-loading"></span>
                                                <span
                                                    class="des-load load-xemthem"
                                                    data-label="Xem thêm..."
                                                    data-label-loaded="Đã hiển thị tất cả công trình"
                                                ></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
</div>

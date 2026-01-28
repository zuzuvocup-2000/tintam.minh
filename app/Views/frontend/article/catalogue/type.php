<div class="revo_breadcrumbs">
    <div class="container">
        <div class="breadcrumbs custom-font theme-clearfix">
            <ul class="breadcrumb">
                <li><a href="<?php echo base_url() ?>">Trang chủ</a><span class="go-page"></span></li>
                <?php if(isset($breadcrumb) && is_array($breadcrumb) && count($breadcrumb)){
                    foreach($breadcrumb as $key => $val){ ?>
                        <?php $title = $val['title']; ?>
                        <?php $canonical = base_url($val['canonical'].HTSUFFIX); ?>
                        <li class="active"><span><a href="<?php echo $canonical ?>" title="<?php echo $title ?>"><?php echo $title ?></a></span></li>
                    <?php }
                } ?>
            </ul>
        </div>
    </div>
</div>
<div class="container">
    <div class="row tintuc-news2">
        <div class="category-contents  col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="listing-title">
                <h1><span><?php echo $detailCatalogue['title'] ?></span></h1>
            </div>
            <div class="blog-content blog-content-grid row">
                <?php if(isset($articleList) && is_array($articleList) && count($articleList)){ ?>
                    <?php foreach($articleList as $key => $val){ ?>
                        <?php 
                            $title = $val['title'];
                            $image = (isset($val['image']) && !empty($val['image'])) ? $val['image'] : 'https://tintam.vn/wp-content/uploads/2017/05/bang-gia-giay-dan-tuong-tintam-tphcm.jpg';
                            $canonical = base_url($val['canonical'].HTSUFFIX);
                            $cat_title = $val['cat_title'];
                            $cat_canonical = base_url($val['cat_canonical'].HTSUFFIX);
                            $fullname = $val['fullname'];
                            $description = cutnchar(strip_tags($val['description']), 300);
                        ?>
                        <div id="post-<?php echo $val['id'] ?>"
                            class="col-md-4 col-sm-6 col-xs-12 theme-clearfix post-<?php echo $val['id'] ?> post type-post status-publish format-standard has-post-thumbnail hentry">
                            <div class="entry clearfix danhsach-news">
                                <div class="entry-thumb"> 
                                    <a class="entry-hover" href="<?php echo $canonical ?>" title="<?php echo $title ?>"> 
                                        <img width="760" height="428" src="<?php echo $image ?>" class="attachment-large size-large wp-post-image" alt="<?php echo $title ?>"> 
                                    </a>
                                    <style>
                                        .danhsach-news .entry-thumb:before {
                                            display: none;
                                        }
                                    </style>
                                </div>
                                <div class="entry-content">
                                    <div class="content-top">
                                        <div class="entry-title">
                                            <h4><a href="<?php echo $canonical ?>"><?php echo $title ?></a></h4>
                                        </div>
                                        <div class="entry-meta"> 
                                            <span class="entry-author"> <i class="fa fa-user"></i>Post By:
                                                <a href="#" title="Đăng bởi <?php echo $fullname ?>" rel="author"><?php echo $fullname ?></a> 
                                            </span> 
                                            <span class="entry-comment"> 
                                                <a href="<?php echo $canonical ?>#respond"><i class="fa fa-comments"></i>0 Comment</a> 
                                            </span>
                                        </div> 
                                        <span class="entry-meta-link entry-meta-tag"><span class="fa fa-tags"></span><a
                                                href="<?php echo $cat_canonical ?>" rel="tag"><?php echo $cat_title ?></a></span>
                                    </div>
                                    <div class="readmore"><a href="<?php echo $canonical ?>"><i
                                                class="fa fa-caret-right"></i>Xem tiếp</a></div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                <?php } ?>
            </div>
            <div id="pagination">
                <?php echo (isset($pagination)) ? $pagination : ''; ?>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
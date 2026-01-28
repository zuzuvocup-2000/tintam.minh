<div class="layout-article" id="article">
    <div class="breadcrumb-shop">
        <div class="container">
            <div class="breadcrumb-list blog-breadcrumb ">
                <ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="<?= base_url() ?>" itemprop="item"><span itemprop="name">Trang chủ</span></a>
                        <meta itemprop="position" content="1">
                    </li>
                    <?php if (isset($breadcrumb) && is_array($breadcrumb) && count($breadcrumb)) { ?>
                        <?php foreach ($breadcrumb as $key => $val) { ?>
                            <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                                <a href="<?= base_url($val['canonical']) ?>" itemprop="item">
                                    <span itemprop="name"><?= $val['title'] ?></span>
                                </a>
                                <meta itemprop="position" content="<?= $key + 2 ?>">
                            </li>
                        <?php } ?>
                    <?php } ?>
                    <li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <span itemprop="item"><strong itemprop="name"><?= $object['title'] ?></strong></span>
                        <meta itemprop="position" content="<?= count($breadcrumb) + 2 ?>">
                    </li>
                </ol>
            </div>
        </div>
    </div>

    <div class="wrapper-contentArticle">
        <div class="container pd-top">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-12 boxAricle-left">
                    <div class="inforArticle-content">
                        <div class="boxArticle-detail">
                            <article class="heading-article">
                                <h1><?= $object['title'] ?></h1>
                                <div class="article-post-meta">
                                    <span><i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($object['created_at'])) ?></span>
                                    <span><i class="fa fa-folder-open"></i> <?= $detailCatalogue['title'] ?></span>
                                    <span><i class="fa fa-eye"></i> <?= $object['viewed'] ?? 0 ?> lượt xem</span>
                                </div>
                                <div class="article-content">
                                    <?php if(!empty($object['image'])): ?>
                                    <div class="background-img">
                                        <img src="<?= $object['image'] ?>" alt="<?= $object['title'] ?>">
                                    </div>
                                    <?php endif; ?>
                                    <div class="article-body">
                                        <?= $object['content'] ?>
                                    </div>
                                </div>
                            </article>
                        </div>

                        <div class="article-related">
                            <h3 class="title-blog-related">Bài viết liên quan</h3>
                            <?php if (isset($articleRelate) && is_array($articleRelate) && count($articleRelate)) { ?>
                                <div class="content-blogs-related">
                                    <div class="list-blogs-related owl-carousel">
                                        <?php foreach ($articleRelate as $key => $val) { ?>
                                            <div class="item">
                                                <article class="article-loop">
                                                    <div class="article-image">
                                                        <a href="<?= base_url($val['canonical'] . HTSUFFIX) ?>" title="<?= $val['title'] ?>">
                                                            <img src="<?= $val['image'] ?>" alt="<?= $val['title'] ?>">
                                                        </a>
                                                    </div>
                                                    <div class="article-detail">
                                                        <h3 class="post-title">
                                                            <a href="<?= base_url($val['canonical'] . HTSUFFIX) ?>"><?= $val['title'] ?></a>
                                                        </h3>
                                                        <div class="entry-content"><?= strip_tags(base64_decode($val['description'])) ?></div>
                                                        <div class="article-post-meta" style="border:none; margin:0; padding:0; font-size:12px;">
                                                            <span><i class="fa fa-calendar"></i> <?= date('d/m/Y', strtotime($val['created_at'])) ?></span>
                                                        </div>
                                                    </div>
                                                </article>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-12 col-12 boxAricle-right">
                    <aside class="sidebar-blogs">
                        <div class="group-sidebox">
                            <div class="sidebox-title ">
                                <h3 class="htitle">Bài viết mới nhất</h3>
                            </div>
                            <?php if (isset($articleNew) && is_array($articleNew) && count($articleNew)) { ?>
                                <div class="sidebox-content">
                                    <div class="list-blogs-latest">
                                        <?php foreach ($articleNew as $key => $val) { ?>
                                            <div class="item-article clearfix">
                                                <div class="post-image">
                                                    <a href="<?= base_url($val['canonical'] . HTSUFFIX) ?>">
                                                        <img src="<?= $val['image'] ?>" alt="<?= $val['title'] ?>" />
                                                    </a>
                                                </div>
                                                <div class="post-content">
                                                    <h3><a href="<?= base_url($val['canonical'] . HTSUFFIX) ?>"><?= $val['title'] ?></a></h3>
                                                    <p class="post-meta">
                                                        <span><?= date('d/m/Y', strtotime($val['created_at'])) ?></span>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('.list-blogs-related.owl-carousel').owlCarousel({
            items: 3,
            nav: true,
            dots: false,
            loop: false,
            margin: 20,
            smartSpeed: 800,
            responsive: {
                0: { items: 1 },
                576: { items: 2 },
                992: { items: 3 }
            }
        });
    });
</script>
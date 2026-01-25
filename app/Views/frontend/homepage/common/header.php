<?php
$currentDay = date('Y-m-d H:i:s');
$cart = \Config\Services::cart();
$cartTotal = $cart->contents();
$model = new App\Models\AutoloadModel();
$_ishome = isset($ishome) ? 'ishome' : '';
$productCatalogue = $model->_get_where(array(
    'select' => 'tb1.id, tb1.level, tb2.title, tb2.canonical',
    'table' => 'product_catalogue as tb1',
    'where' => array(
        'tb1.publish' => 1,
        'tb1.deleted_at' => 0,
        'tb1.level' => 1
    ),
    'join' => [
        [
            'product_translate as tb2',
            'tb2.module = \'product_catalogue\' AND tb2.objectid = tb1.id AND tb2.language = \'' . currentLanguage() . '\'',
            'inner'
        ]
    ],
    'order_by' => 'tb1.order desc'
), TRUE);
$languageList = $model->_get_where([
    'select' => 'id, title, canonical, image',
    'table' => 'language',
    'where' => [
        'deleted_at' => 0,
        'publish' => 1
    ],
    'order_by' => 'order desc, id desc'
], TRUE);
foreach ($productCatalogue as &$category) {
    $category['children'] = $model->_get_where(array(
        'select' => 'tb1.id, tb1.parentid, tb1.level, tb2.title, tb2.canonical',
        'table' => 'product_catalogue as tb1',
        'where' => array(
            'tb1.publish' => 1,
            'tb1.deleted_at' => 0,
            'tb1.parentid' => $category['id']
        ),
        'join' => [
            [
                'product_translate as tb2',
                'tb2.module = \'product_catalogue\' AND tb2.objectid = tb1.id AND tb2.language = \'' . currentLanguage() . '\'',
                'inner'
            ]
        ],
        'order_by' => 'tb1.order desc'
    ), TRUE);
}
?>
<?php 
    $main_nav = get_menu(array('keyword' => 'main-menu', 'language' => $language, 'output' => 'array'));
    $sub_nav = get_menu(array('keyword' => 'sub-menu', 'language' => $language, 'output' => 'array'));
?>
<header id="header" class="header header-style1">
    <div class="header-mid">
        <div class="container">
            <div class="row">
                <div class="top-header col-lg-3 col-md-2 pull-left">
                    <div class="revo-logo">
                        <a href="/" title="rèm cao cấp tita tphcm">
                            <img
                                style="margin-left: 25px; width: 237px"
                                border="0"
                                alt="rèm cao cấp tita tphcm"
                                src="<?php echo $general['homepage_logo']; ?>"
                            />
                        </a>
                    </div>
                </div>
                <div class="ads-right2">
                    <p class="header1"></p>
                    <div class="header2">
                        <p class="head-ttd">Tổng đài CSKH</p>
                        <p class="head-std"><?php echo $general['contact_hotline']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <div class="row">
                <div
                    class="col-lg-3 col-md-3 col-sm-2 col-xs-2 vertical_megamenu vertical_megamenu-header pull-left"
                >
                    <div class="mega-left-title"><strong>SẢN PHẨM</strong></div>
                    <div class="vc_wp_custommenu wpb_content_element">
                        <?php 
                        // Hàm tạo URL từ canonical
                        function buildMenuUrl($canonical) {
                            return '/' . $canonical . '.html';
                        }
                        ?>
                        <div class="wrapper_vertical_menu vertical_megamenu">
                            <!-- Menu Responsive -->
                            <div class="resmenu-container">
                                <button
                                    class="navbar-toggle"
                                    type="button"
                                    data-toggle="collapse"
                                    data-target="#ResMenuvertical_menu"
                                >
                                    <span class="sr-only">Categories</span>
                                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <div id="ResMenuvertical_menu" class="collapse menu-responsive-wrapper">
                                    <ul id="menu-menu-trai" class="revo_resmenu">
                                        <?php if (!empty($main_nav['data'])): ?>
                                            <?php foreach ($main_nav['data'] as $level1): ?>
                                                <?php 
                                                $hasChildren = !empty($level1['children']);
                                                $level1Class = $hasChildren ? 'res-dropdown' : '';
                                                $level1Class .= ' menu-' . $level1['canonical'];
                                                ?>
                                                <li class="<?php echo trim($level1Class); ?>">
                                                    <a class="item-link <?php echo $hasChildren ? 'dropdown-toggle' : ''; ?>" 
                                                       href="<?php echo $hasChildren ? '#' : buildMenuUrl($level1['canonical']); ?>">
                                                        <?php echo $level1['title']; ?>
                                                    </a>
                                                    <?php if ($hasChildren): ?>
                                                        <span class="show-dropdown"></span>
                                                        <ul class="dropdown-resmenu">
                                                            <?php foreach ($level1['children'] as $level2): ?>
                                                                <?php 
                                                                $hasChildren2 = !empty($level2['children']);
                                                                $level2Class = $hasChildren2 ? 'res-dropdown' : '';
                                                                $level2Class .= ' menu-' . $level2['canonical'];
                                                                ?>
                                                                <li class="<?php echo trim($level2Class); ?>">
                                                                    <a class="item-link <?php echo $hasChildren2 ? 'dropdown-toggle' : ''; ?>" 
                                                                       href="<?php echo $hasChildren2 ? '#' : buildMenuUrl($level2['canonical']); ?>">
                                                                        <?php echo $level2['title']; ?>
                                                                    </a>
                                                                    <?php if ($hasChildren2): ?>
                                                                        <span class="show-dropdown"></span>
                                                                        <ul class="dropdown-resmenu">
                                                                            <?php foreach ($level2['children'] as $level3): ?>
                                                                                <li class="menu-<?php echo $level3['canonical']; ?>">
                                                                                    <a href="<?php echo buildMenuUrl($level3['canonical']); ?>">
                                                                                        <?php echo $level3['title']; ?>
                                                                                    </a>
                                                                                </li>
                                                                            <?php endforeach; ?>
                                                                        </ul>
                                                                    <?php endif; ?>
                                                                </li>
                                                            <?php endforeach; ?>
                                                        </ul>
                                                    <?php endif; ?>
                                                </li>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            
                            <!-- Menu Desktop -->
                            <ul id="menu-menu-trai-1" class="nav vertical-megamenu revo-mega revo-menures">
                                <?php if (!empty($main_nav['data'])): ?>
                                    <?php foreach ($main_nav['data'] as $level1): ?>
                                        <?php 
                                        $hasChildren = !empty($level1['children']);
                                        $level1Class = $hasChildren ? 'dropdown revo-mega-menu' : 'revo-menu-custom';
                                        $level1Class .= ' menu-' . $level1['canonical'] . ' level1';
                                        
                                        // Đếm số cột cho dropdown-menu
                                        $columnCount = $hasChildren ? count($level1['children']) : 0;
                                        ?>
                                        <li class="<?php echo trim($level1Class); ?>">
                                            <a href="<?php echo $hasChildren ? '#' : buildMenuUrl($level1['canonical']); ?>" 
                                               class="item-link <?php echo $hasChildren ? 'dropdown-toggle' : ''; ?>">
                                                <span class="have-title">
                                                    <span class="menu-title"><?php echo $level1['title']; ?></span>
                                                </span>
                                            </a>
                                            <?php if ($hasChildren): ?>
                                                <ul class="dropdown-menu nav-level1 column-<?php echo $columnCount; ?>">
                                                    <?php foreach ($level1['children'] as $level2): ?>
                                                        <?php 
                                                        $hasChildren2 = !empty($level2['children']);
                                                        $level2Class = $hasChildren2 ? 'dropdown-submenu' : '';
                                                        $level2Class .= ' column-' . $columnCount . ' menu-' . $level2['canonical'];
                                                        ?>
                                                        <li class="<?php echo trim($level2Class); ?>">
                                                            <a href="<?php echo $hasChildren2 ? '#' : buildMenuUrl($level2['canonical']); ?>">
                                                                <span class="have-title">
                                                                    <span class="menu-title"><?php echo $level2['title']; ?></span>
                                                                </span>
                                                            </a>
                                                            <?php if ($hasChildren2): ?>
                                                                <ul class="dropdown-sub nav-level2">
                                                                    <?php foreach ($level2['children'] as $level3): ?>
                                                                        <li class="menu-<?php echo $level3['canonical']; ?>">
                                                                            <a href="<?php echo buildMenuUrl($level3['canonical']); ?>">
                                                                                <span class="have-title">
                                                                                    <span class="menu-title"><?php echo $level3['title']; ?></span>
                                                                                </span>
                                                                            </a>
                                                                        </li>
                                                                    <?php endforeach; ?>
                                                                </ul>
                                                            <?php endif; ?>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                            <?php endif; ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="main-menu" class="main-menu clearfix col-lg-6 col-md-7 pull-left">
                    <nav id="primary-menu" class="primary-menu">
                        <div class="mid-header clearfix">
                            <div class="navbar-inner navbar-inverse">
                                <div class="resmenu-container">
                                    <button
                                        class="navbar-toggle"
                                        type="button"
                                        data-toggle="collapse"
                                        data-target="#ResMenuprimary_menu"
                                    >
                                        <span class="sr-only">Categories</span>
                                        <span class="icon-bar"></span> <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <div id="ResMenuprimary_menu" class="collapse menu-responsive-wrapper">
                                        <ul id="menu-menu-tren" class="revo_resmenu">
                                            <?php if (!empty($sub_nav['data'])): ?>
                                                <?php foreach ($sub_nav['data'] as $level1): ?>
                                                    <?php 
                                                    $hasChildren = !empty($level1['children']);
                                                    $level1Class = $hasChildren ? 'res-dropdown' : '';
                                                    $level1Class .= ' menu-' . $level1['canonical'];
                                                    ?>
                                                    <li class="<?php echo trim($level1Class); ?>">
                                                        <a class="item-link <?php echo $hasChildren ? 'dropdown-toggle' : ''; ?>" 
                                                           href="<?php echo buildMenuUrl($level1['canonical']); ?>">
                                                            <?php echo $level1['title']; ?>
                                                        </a>
                                                        <?php if ($hasChildren): ?>
                                                            <span class="show-dropdown"></span>
                                                            <ul class="dropdown-resmenu">
                                                                <?php foreach ($level1['children'] as $level2): ?>
                                                                    <li class="menu-<?php echo $level2['canonical']; ?>">
                                                                        <a href="<?php echo buildMenuUrl($level2['canonical']); ?>">
                                                                            <?php echo $level2['title']; ?>
                                                                        </a>
                                                                    </li>
                                                                <?php endforeach; ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </li>
                                                <?php endforeach; ?>
                                            <?php endif; ?>
                                            
                                            <!-- Giỏ hàng - Static -->
                                            <li class="menu-gio-hang">
                                                <a class="item-link" href="/cart">Giỏ hàng</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <ul id="menu-menu-tren-1" class="nav nav-pills nav-mega revo-mega revo-menures">
                                    <?php if (!empty($sub_nav['data'])): ?>
                                        <?php foreach ($sub_nav['data'] as $level1): ?>
                                            <?php 
                                            $hasChildren = !empty($level1['children']);
                                            $level1Class = $hasChildren ? 'dropdown revo-menu-custom' : 'revo-menu-custom';
                                            $level1Class .= ' menu-' . $level1['canonical'] . ' level1';
                                            ?>
                                            <li class="<?php echo trim($level1Class); ?>">
                                                <a href="<?php echo buildMenuUrl($level1['canonical']); ?>" 
                                                   class="item-link <?php echo $hasChildren ? 'dropdown-toggle' : ''; ?>">
                                                    <span class="have-title">
                                                        <span class="menu-title"><?php echo $level1['title']; ?></span>
                                                    </span>
                                                </a>
                                                <?php if ($hasChildren): ?>
                                                    <ul class="dropdown-menu">
                                                        <?php foreach ($level1['children'] as $level2): ?>
                                                            <li class="column-1 menu-<?php echo $level2['canonical']; ?>">
                                                                <a href="<?php echo buildMenuUrl($level2['canonical']); ?>">
                                                                    <span class="have-title">
                                                                        <span class="menu-title"><?php echo $level2['title']; ?></span>
                                                                    </span>
                                                                </a>
                                                            </li>
                                                        <?php endforeach; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </li>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                    
                                    <!-- Giỏ hàng - Static -->
                                    <li class="menu-gio-hang revo-menu-custom level1">
                                        <a href="/cart" class="item-link">
                                            <span class="have-title">
                                                <span class="menu-title">Giỏ hàng</span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="Nav-50 fix">
    <div class="menu-mobi-news" id="top">
        <ul>
            <li>
                <a href="https://tintam.vn/bang-gia-tita" title="Bảng giá màn cửa"
                    ><span title="">Bảng giá</span></a
                >
            </li>
            <li>
                <a rel="nofollow" target="_blank" href="https://wallpaper.vn/" title="Sản phẩm"
                    ><span title="">Mẫu đẹp</span></a
                >
            </li>
            <li>
                <a rel="nofollow" target="_blank" href="http://congtrinh.tintam.vn/" title="Công trình"
                    ><span title="">Công trình</span></a
                >
            </li>
            <li>
                <a href="https://tintam.vn/lien-he" title="Liên hệ"><span title="">Liên hệ</span></a>
            </li>
        </ul>
    </div>
</div>
<div class="mob_menu_header_div mobmenu">
    <div class="logo-holder">
        <a href="https://tintam.vn" class="headertext"
            ><img src="https://tintam.vn/wp-content/uploads/2017/02/logo-mobile.png" alt="Logo Header Menu"
        /></a>
    </div>
    <div class="mobmenur-container">
        <a href="#" class="mobmenu-right-bt"
            ><span style="float: left" class="mob-icon-menu">SẢN PHẨM</span
            ><span style="float: left" class="mob-icon-cancel">ĐÓNG</span></a
        >
    </div>
</div>
<div class="mob-menu-right-panel mobmenu">
    <div class="mobmenu_content">
        <div class="rightmtop"></div>
        <ul id="mobmenuright">
            <li></li>
            <li class="menu-rem-vai-cao-cap">
                <a class="item-link" href="https://tintam.vn/rem-cua-phong-khach.html"
                    ><span class="menu-title">Rèm vải cao cấp</span></a
                >
            </li>
            <li class="menu-rem-cau-vong">
                <a class="item-link" href="https://tintam.vn/rem-cau-vong-han-quoc.html"
                    ><span class="menu-title">Rèm cầu vồng</span></a
                >
            </li>
            <li class="menu-rem-go">
                <a class="item-link" href="https://tintam.vn/rem-sao-go.html"
                    ><span class="menu-title">Rèm gỗ</span></a
                >
            </li>
            <li class="menu-rem-vai-la-doc-dream-curtain">
                <a class="item-link" href="https://tintam.vn/rem-vai-la-doc-dream-curtain.html"
                    ><span class="menu-title">Rèm vải lá dọc Dream curtain</span></a
                >
            </li>
            <li class="menu-rem-vach-ngan-to-ong">
                <a class="item-link" href="https://tintam.vn/rem-vach-ngan-to-ong.html"
                    ><span class="menu-title">Rèm vách ngăn tổ ong</span></a
                >
            </li>
            <li class="menu-rem-cuon">
                <a class="item-link" href="https://tintam.vn/rem-cuon-chong-nang.html"
                    ><span class="menu-title">Rèm cuốn</span></a
                >
            </li>
            <li class="menu-rem-sao-nhom">
                <a class="item-link" href="https://tintam.vn/rem-sao-nhom.html"
                    ><span class="menu-title">Rèm sáo nhôm</span></a
                >
            </li>
            <li class="menu-rem-la-dung">
                <a class="item-link" href="https://tintam.vn/rem-sao-la-doc-chong-nang.html"
                    ><span class="menu-title">Rèm lá đứng</span></a
                >
            </li>
            <li class="menu-rem-hat-pha-le">
                <a class="item-link" href="/sp/rem-hat-pha-le"
                    ><span class="menu-title">Rèm hạt pha lê</span></a
                >
            </li>
            <li class="menu-rem-khach-san">
                <a class="item-link" href="/sp/man-rem-khach-san"
                    ><span class="menu-title">Rèm khách sạn</span></a
                >
            </li>
            <li class="menu-">
                <a class="item-link" href="#"><span class="menu-title">……………………………………..</span></a>
            </li>
            <li class="menu-tranh-trang-guong-3d">
                <a class="item-link" href="https://tintam.vn/tranh-trang-guong-3d-trang-tri-dep-tphcm.html"
                    ><span class="menu-title">Tranh tráng gương 3d</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-dep">
                <a class="item-link" href="/sp/giay-dan-tuong-dep-sang-trong"
                    ><span class="menu-title">Giấy dán tường đẹp</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-3d">
                <a class="item-link" href="/sp/giay-dan-tuong-3d"
                    ><span class="menu-title">Giấy dán tường 3d</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-gia-da">
                <a class="item-link" href="https://tintam.vn/giay-dan-tuong-3d-gia-gach-da.html"
                    ><span class="menu-title">Giấy dán tường giả đá</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-hien-dai">
                <a class="item-link" href="/sp/giay-dan-tuong-hien-dai"
                    ><span class="menu-title">Giấy dán tường hiện đại</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-co-dien">
                <a class="item-link" href="/sp/giay-dan-tuong-co-dien"
                    ><span class="menu-title">Giấy dán tường cổ điển</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-phong-khach">
                <a class="item-link" href="/sp/giay-dan-tuong-phong-khach"
                    ><span class="menu-title">Giấy dán tường phòng khách</span></a
                >
            </li>
            <li class="menu-giay-dan-tuong-phong-ngu">
                <a class="item-link" href="/sp/giay-dan-tuong-phong-ngu"
                    ><span class="menu-title">Giấy dán tường phòng ngủ</span></a
                >
            </li>
        </ul>
        <div class="rightmbottom"></div>
    </div>
    <div class="mob-menu-right-bg-holder"></div>
</div>
<script>
    $(document).ready(function() {
        if (window.location.pathname !== "/homepage") {
            $('.menu').addClass('bg-menu');
        }
    });

    function click_change_function(_this) {
        let lang = _this.attr('data-language');
        let canonical = _this.attr('data-canonical');
        setCookie('language', lang, 30)
        var formURL = 'ajax/frontend/dashboard/get_canonical';
        $.post(formURL, {
                lang: lang,
                canonical: canonical
            },
            function(data) {
                if (data.trim() == '') {
                    window.location.reload();
                } else {
                    window.location.href = data.trim();
                }
            });
    }

    function setCookie(cname, cvalue, exdays) {
        const d = new Date();
        d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
        let expires = "expires=" + d.toGMTString();
        document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
    }
    $(document).ready(function() {
        var path = window.location.href;

        $('.menu-main li a').each(function() {
            if (this.href === path) {
                $(this).addClass('active');
            }
        });
    })
</script>
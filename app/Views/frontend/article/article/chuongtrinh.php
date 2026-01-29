<?php
$banner_menu = get_slide(['keyword' => 'menu-product', 'language' => $language]);
?>
<div class="" id="article">
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
								<a href="<?= base_url($val['canonical'] . HTSUFFIX) ?>" itemprop="item">
									<span itemprop="name"><?= $val['title'] ?></span>
								</a>
								<meta itemprop="position" content="<?= $key + 2 ?>">
							</li>
						<?php } ?>
					<?php } ?>
					<li class="active" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
						<span itemprop="item"><strong itemprop="name"><?= $object['title'] ?></strong></span>
						<meta itemprop="position" content="<?= (isset($breadcrumb) ? count($breadcrumb) : 0) + 2 ?>">
					</li>
				</ol>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row tintuc">
			<div class="vc_row-full-width vc_clearfix"></div>
			<div class="vc_row wpb_row vc_row-fluid">
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
																href="<?php echo !empty($item['canonical']) ? base_url($item['canonical'] . HTSUFFIX) : '#'; ?>">
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
			<div class="single main  ">
				<div
					class="post-<?= $object['id'] ?> post type-post status-publish format-standard has-post-thumbnail hentry">
					<div class="entry-wrap">
						<h1 class="entry-title clearfix" style="width: 100%;display: block;margin: 0 "><?= $object['title'] ?></h1>
						<div class="entry-content clearfix" style="margin: 0">
							<div class="entry-summary single-content ">
								<?php if (!empty($object['description'])): ?>
									<div class="description mb20">
										<?= $object['description'] ?>
									</div>
								<?php endif; ?>
	
								<div class="main-content">
									<?= $object['content'] ?>
								</div>
	
								<?php if (isset($object['sub_title']) && is_array($object['sub_title']) && count($object['sub_title'])): ?>
									<div class="sub-content-blocks mt30">
										<?php foreach ($object['sub_title'] as $key => $sub_title): ?>
											<?php if (!empty($sub_title)): ?>
												<div class="sub-block">
													<h2 class="sub-title">
                                                        <?= $sub_title ?>
                                                    </h2>
													<div class="sub-description">
														<?= isset($object['sub_content'][$key]) ? html_entity_decode($object['sub_content'][$key]) : '' ?>
													</div>
												</div>
											<?php endif; ?>
										<?php endforeach; ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="clear"></div>
							<div class="single-content-bottom clearfix">
								<?php if (isset($articleRelate) && is_array($articleRelate) && count($articleRelate)) { ?>
									<div class="related-articles mt30">
										<h3 class="related-title"
											style="font-size: 20px; font-weight: bold; margin-bottom: 15px; border-bottom: 2px solid #ddd; padding-bottom: 10px;">
											Bài viết liên quan
										</h3>
										<ul class="list-related" style="list-style: none; padding: 0;">
											<?php foreach ($articleRelate as $key => $val) { ?>
												<?php $url = base_url($val['canonical'] . HTSUFFIX); ?>
												<li style="margin-bottom: 8px;">
													<a href="<?= $url ?>" title="<?= $val['title'] ?>"
														style="color: #333; text-decoration: none; display: flex; align-items: center;">
														<i class="fa fa-caret-right"
															style="margin-right: 10px; color: #1e73be;"></i>
														<?= $val['title'] ?>
													</a>
												</li>
											<?php } ?>
										</ul>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
</div>
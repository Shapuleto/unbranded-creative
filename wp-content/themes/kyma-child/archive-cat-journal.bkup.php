<!-- Our Blog Grids -->
<?php $kyma_theme_options = kyma_theme_options(); ?>
<section class="content_section">
	<div class="content-fluid">
		<div class="content_spacer clearfix">
			<div id="container-journal" class="hm_blog_list clearfix">
				<?php
				if(have_posts()){
					while (have_posts()): the_post();
						/* Start - Cat display */
						?>
				<div <?php post_class('blog_grid_block item '); ?>>
					<div class=" col-sm-12">
						<div class="feature_inner_corners">
							<?php
							$thumb = 0;
							$img_class = array('class' => 'img-responsive');
							global $imageSize;
							echo $imageSize;
							if (get_post_gallery()) {
								$icon = "fa fa-photo";
								$gallery = get_post_gallery(get_the_ID(), true);?>

							<div class="feature_inner_btns">
								<a href="#" class="expand_image"><i class="fa fa-expand"></i></a>
								<a href="<?php echo esc_url(get_the_permalink()); ?>" class="icon_link"><i class="fa fa-link"></i></a>
							</div>
							<div class="porto_galla">
								<?php
								foreach ($gallery['src'] as $src) {
								?>
								<a title="<?php the_title_attribute(); ?>" href="<?php echo esc_url($src); ?>" class="feature_inner_ling">
									<img class="img-responsive" src="<?php echo esc_url($src); ?>" alt="<?php the_title_attribute(); ?>">
								</a>
								<?php
								}
								if (has_post_thumbnail()) {
									$thumb = 1;
									$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())) ?>
								<a href="<?php echo esc_url($url); ?>" title="<?php the_title_attribute(); ?>" class="feature_inner_ling">
									<?php the_post_thumbnail($imageSize, $img_class); ?>
								</a><?php
								}
								?>
							</div>
							<?php
							} elseif (has_post_thumbnail() && $thumb != 1) {
									$icon = "fa fa-image";
									$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
							<div class="feature_inner_btns">
								<a href="#" class="expand_image"><i class="fa fa-expand"></i></a>
								<a href="<?php echo esc_url(get_the_permalink()); ?>" class="icon_link"><i class="fa fa-link"></i></a>
							</div>
							<a href="<?php echo esc_url($url); ?>" title="<?php the_title_attribute(); ?>" class="feature_inner_ling" data-rel="magnific-popup">
							<?php the_post_thumbnail($imageSize, $img_class); ?>
							</a><?php
							}
							?>
						</div>
					</div>
					<div class="blog_grid_con col-sm-12">
						<h6 class="title typo-title"><a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title_attribute()); ?>"><?php the_title(); ?></a></h6>
						<span class="meta">
							<span class="meta_part">
								<a href="#"><i class="fa fa-clock-o"></i><span><?php echo esc_attr(get_the_date(get_option('date_format'), get_the_ID())); ?></span></a>
							</span>
						</span>
					</div>
				</div>
				<?php
					/* End - Cat display */
				endwhile;
				}
				wp_link_pages();
				?>
			</div>
		</div>
	</div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.imagesloaded/4.1.1/imagesloaded.pkgd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.1.1/masonry.pkgd.min.js"></script>
<script type="text/javascript">
jQuery(document).ready(function($){
	var $container = $('#container-journal');
	$container.imagesLoaded(function(){
		// alert("container");
	  $container.masonry({
	    itemSelector : '.item',
	    columnWidth : 95,
	    isFitWidth: true,
	    isResizable: true
	  });
	});
});
</script>
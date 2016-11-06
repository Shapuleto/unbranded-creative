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
						$img_class = array('class' => 'img-responsive');
						if (has_post_thumbnail()) {
							$url = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
<!--							<a href="<?php echo the_permalink(); ?>" title="<?php the_title_attribute(); ?>" class="feature_inner_ling" data-rel="magnific-popup">-->
							<a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title_attribute()); ?>">
								<?php the_post_thumbnail($imageSize, $img_class); ?>
							</a>
							<?php
						}
						?>
						</div>
					</div>
					<div class="blog_grid_con col-sm-12">
						<h6 class="title typo-title">
							<a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title_attribute()); ?>">
								<?php the_title(); ?>
							</a>
						</h6>
					</div>
				</div>
					<?php
					/* End - Cat display */
					endwhile;
				}
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
			$container.masonry({
				itemSelector : '.item',
				columnWidth :		95,
				isFitWidth:			true,
				isResizable:		true
			});
		});
	});
</script>

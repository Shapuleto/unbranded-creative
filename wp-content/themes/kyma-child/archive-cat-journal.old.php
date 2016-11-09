<?php /* Template name: Blog-Journal */ ?>
<section class="content_section">
	<div class="content-fluid">
		<div class="cont-90">
			<div class="content_spacer clearfix">
				<div id="container-journal" class="hm_blog_list clearfix">
					<?php
					echo "test";
					while ($wp_query->have_posts()): $wp_query->the_post();
					?>
					<?php
						// get_template_part('journal', 'all');
					?>
					<div <?php post_class('blog_grid_block item col-xs-12 col-sm-6 col-md-4'); ?>>
						<div class="col-xs-12">
							<div class="feature_inner_corners">
								<?php
								$img_class	= array('class' => 'img-responsive');
								$img_size		= "";
								$url				= wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
								?>
								<a href="<?php echo esc_url($url); ?>" title="<?php the_title_attribute(); ?>" class="feature_inner_ling" data-rel="magnific-popup">
									<?php the_post_thumbnail($img_size, $img_class); ?>
								</a>
							</div>
						</div>
						<div class="blog_grid_con col-sm-12">
							<h6 class="title typo-title">
								<a href="<?php the_permalink(); ?>" title="<?php esc_attr(the_title_attribute()); ?>"><?php the_title(); ?>
								</a>
							</h6>
						</div>
					</div>
					<?php
					endwhile;
					?>
				</div>
			</div>
		</div>
	</div>
</section>

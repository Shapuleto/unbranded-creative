<!-- Start	- Us Feauterd Image -->
<section class="content_section">
	<div class="content-fluid">
		<div class="jumbotron">
			<?php
			$page_slug = "us";
			$page = get_page_by_path($page_slug);
			$imgID = get_post_thumbnail_id($page->ID);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
			echo "<img src='$imgURL'>";
			wp_reset_query();
			?>
		</div>
	</div>
</section><!-- End		- Us Feauterd Image -->
<!-- Start	- Posts Display - us category -->
<section class="content_section">
	<div class="cont-95">
		<div class="internal_post_con clearfix">
			<div class="hm_blog_full_list hm_blog_list clearfix">
				<?php
				if (have_posts()):
					while (have_posts()): the_post(); ?>
				<div id="<?php echo get_the_id(); ?>" <?php post_class('clearfix'); ?> >
					<div class="post_title_con">
						<h6 class="title typo-title">
<!--							<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>-->
							<?php the_title(); ?>
						</h6>
					</div>
					<div class="blog_grid_con">
						<?php the_content(); ?>
					</div>
				</div>
				<?php
				endwhile;
				endif;?>
			</div>
		</div>
	</div>
</section><!-- End		- Posts Display - us category -->

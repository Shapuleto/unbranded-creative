<!-- Start	- Contact Feauterd Image -->
<section class="content_section">
	<div class="content-fluid">
		<div class="jumbotron">
			<?php
			$page_slug = "contact";
			$page = get_page_by_path($page_slug);
			$imgID = get_post_thumbnail_id($page->ID);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
			echo "<img src='$imgURL'>";
			wp_reset_query();
			?>
		</div>
	</div>
</section><!-- End		- Contact Feauterd Image -->
<!-- Start	- Posts Display - Contact category -->
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
</section><!-- End		- Posts Display - Contact category -->
<!-- Start	- Contact Form Display -->
<section>
	<div class="container-fluid contact-form-row">
		<div class="cont-95">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-gd-12 col-lg-12 text-center">
					<?php echo do_shortcode('[ccf_form id="124"]') ?><!-- Custom Contact Forms plugin -->
				</div>
			</div>
		</div>
	</div>
</section><!-- End		- Contact Form Display -->

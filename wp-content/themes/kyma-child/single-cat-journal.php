<!-- Start	- Work Feauterd Image -->
<section class="content_section">
	<div class="content-fluid">
		<div class="jumbotron journal-single cont-50">
			<?php
			$post_id = get_the_id();
			?>
			<?php
			$imgID = get_post_thumbnail_id($post_id);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
			echo "<img src='$imgURL'>";
			wp_reset_query();
			?>
		</div>
	</div>
</section><!-- End		- Work Feauterd Image -->
<!-- Start - Single Post Display - journal category -->
<section class="content_section">
	<div class="content-fluid">
		<?php
		if (have_posts()):
			while (have_posts()): the_post(); ?>
		<div  class="cont-50">
			<div class="row">
				<div id="<?php echo get_the_id(); ?>" <?php post_class('clearfix'); ?> >
					<div class="post_title_con col-xs-12 col-sm-12">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		</div>
		<?php
			endwhile;
		endif;?>
	</div>
</section><!-- End	 - Single Post Display - work category -->

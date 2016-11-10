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
<!-- Start	- About the author -->
<section class="content_section">
	<div  class="cont-50">
		<div class="about_auther">
			<div class="small_title">
				<span class="small_title_con">
					<span class="s_icon"><i class="fa fa-user"></i></span>
				<span class="s_text"><?php echo esc_attr($kyma_theme_options['about_author_text']); ?></span>
				</span>
			</div>
			<div class="about_auther_con clearfix">
				<span class="avatar_img">
					<a href="<?php the_permalink(); ?>"><?php echo get_avatar(get_the_author_meta('ID'), 126); ?></a>
				</span>
				<div class="about_auther_details">
					<div class="auther_link"><?php esc_attr(the_author()); ?></div>
					<span class="desc"><?php esc_attr(the_author_meta('description')); ?></span>
				</div>
			</div>
			<div class="journal-view-more">
					<a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>" class="auther_link">View More</a>
			</div>
		</div>
	</div>
</section>
<!-- End		- About the author -->

<?php
/*
 * Template Name: Page Home
 *
 * @package WordPress
 * @subpackage Kyma Child
 * @since Kyma Child 1.0
 *
 * @Description Copy personilazed of page.php template
 *
 */
get_header();
?>
<!-- Start	- Custom content -->
	<!-- Start	- Home Feauterd Image -->
<section class="content_section">
	<div class="content-fluid">
		<div class="jumbotron home">
			<?php
			$imgID = get_post_thumbnail_id($post->ID);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
			echo "<img src='$imgURL'>";
			wp_reset_query();
			?>
		</div>
	</div>
</section><!-- End		- Home Feauterd Image -->
	<!-- Start	- Work section -->
<section class="content_section" data-spy="scroll" data-target=".navbar" data-offset="50">
	<div class="content-fluid" id="section_work">
		<?php
		$cat_name = "work";
		$cat_id = get_cat_ID($cat_name);
		?>
		<?php
		$args = array(
			'numberposts' => 10,
			'offset' => 0,
			'category' => $cat_id,
			'orderby' => 'post_date',
			'order' => 'DESC',
			'include' => '',
			'exclude' => '',
			'meta_key' => '',
			'meta_value' =>'',
			'post_type' => 'post',
			'post_status' => 'publish',
			'suppress_filters' => true
		);
		$recent_posts = wp_get_recent_posts($args, ARRAY_A);
		//$last_post = $recent_posts[0];
		foreach($recent_posts as $last_post):
			$last_post['ID'];
			// $imgID = get_post_thumbnail_id($post->ID);
			$imgID = get_post_thumbnail_id($last_post['ID']);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
		?>
		<article class="cont-95">
			<!-- Start	- Full width image -->
			<div class="row row-content">
				<div class="typo-title col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<a href="<?php echo get_permalink($last_post['ID']); ?>" title="<?php the_title_attribute(array('post'=>$last_post['ID'])); ?>"><img src='<?php echo $imgURL; ?>'></a>
				</div>
			</div>
			<!-- End		- Full width image -->
			<div class="row row-content parent">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 child">
					<div>
						<!-- Start	- Work Title -->
						<div class="work-title typo-title">
							<a href="<?php echo get_permalink($last_post['ID']); ?>" title="<?php the_title_attribute(array('post'=>$last_post['ID'])); ?>"><?php echo get_the_title($last_post['ID']); ?></a>
						</div>
						<div class="work-description">
							<?php
							echo get_post_meta($last_post['ID'], "work_type", true);
							?>
						</div>
					</div><!-- End	- Work Title -->
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 child">
					<?php echo $my_excerpt = get_the_excerpt($last_post['ID']); ?>
					<p class="typo-title-link">
						<a href="<?php echo get_permalink($last_post['ID']); ?>" title="<?php the_title_attribute(array('post'=>$last_post['ID'])); ?>">View Case Study</a>
					</p>
				</div>
			</div>
		</article>
		<hr>
		<?php
		endforeach;
		wp_reset_query();
		?>
	</div>
</section>
	<!-- End		- Work section -->
<!-- End		- Custom content -->
<?php get_footer(); ?>

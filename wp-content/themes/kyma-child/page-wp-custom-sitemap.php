<?php
/*
 * Template Name: Page WP Custom Sitemap
 *
 * @package WordPress
 * @subpackage Kyma Child
 * @since Kyma Child 1.0
 *
 * @Description WP Custom Sitemap
 *
 */
?>
<?php
get_header();
?>
<section class="content_section">
	<div class="content-fluid">
		<div class="jumbotron sitemap">
			<?php
			$imgID = get_post_thumbnail_id($post->ID);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
			echo "<img src='$imgURL'>";
			wp_reset_query();
			?>
		</div>
	</div>
</section>
<section class="content_section">
	<div class="content-fluid">
		<article class="cont-95">
		<?php
		if ( shortcode_exists("wp-custom-sitemap-categories")){
			echo do_shortcode("[wp-custom-sitemap-categories exclude='1, 6, 9']");
		}
		?>
		</article>
	</div>
</section>>
<?php
get_footer();
?>

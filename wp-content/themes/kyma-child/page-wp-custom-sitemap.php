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
if ( shortcode_exists("wp-custom-sitemap")){
//	echo do_shortcode("[wp-custom-sitemap]");
//	echo do_shortcode("[wp-custom-sitemap types='post' exclude='12, 169, 577, 591, 600, 613']");
//	echo do_shortcode("[wp-custom-sitemap-group]");
	echo do_shortcode("[wp-custom-sitemap-categories exclude='1, 6, 9']");
}else{
	echo "shortcode ['wp-custom-sitemap'] does not exists";
}
?>

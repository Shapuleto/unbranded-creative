<?php
/*
 * Template Name: Page HTML Page Sitemap
 *
 * @package WordPress
 * @subpackage Kyma Child
 * @since Kyma Child 1.0
 *
 * @Description Sitemap Page
 *
 */
?>
<?php
echo do_shortcode('[html_sitemap depth=1 child_of=PARENT show_date=modified sort_column=menu_orde ordered_list_type="I"]');
?>

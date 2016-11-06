<?php
/*
 * Template Name: Page Simple Sitemap
 *
 * @package WordPress
 * @subpackage Kyma Child
 * @since Kyma Child 1.0
 *
 * @Description Sitemap page
 *
 */
?>
<?php
echo do_shortcode('[simple-sitemap types="post, page, journal" show_label="true" ilnks="true" page_depth="1" order="asc" order_by="title" exclude="591"]');
?>

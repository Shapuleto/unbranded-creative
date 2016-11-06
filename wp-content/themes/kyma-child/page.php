<?php get_header(); ?>
<?php
$curr_post_id		= $post->ID;
$curr_post_slug = $post->post_name;

if('simple-sitemap' == $curr_post_slug){
	require('page-' . $curr_post_slug . '.php');
}else{
	global $wp_query;
	$wp_query->set_404();
	status_header( 404 );
	get_template_part( 404 ); exit();
}
?>
<?php get_footer(); ?>

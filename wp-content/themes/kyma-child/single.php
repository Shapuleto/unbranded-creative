<?php get_header(); ?>
<?php
$cats			= get_the_category($post->ID);
$cat_slug	= strtolower($cats[0]->cat_name);
if($cat_slug == 'work' || $cat_slug == 'journal'){
	require('single-cat-' . $cat_slug . '.php');
}else{
	global $wp_query;
	$wp_query->set_404();
	status_header( 404 );
	get_template_part( 404 ); exit();
}
?>
<?php get_footer(); ?>

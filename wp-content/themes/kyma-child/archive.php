<?php get_header(); ?>
<?php
//print_r(get_post( $post->ID ));
$cats			= get_the_category($post->ID);
$cat_slug	= strtolower($cats[0]->cat_name);
if($cat_slug == 'us' || $cat_slug == 'journal' || $cat_slug == 'careers'){
	require('archive-cat-' . $cat_slug . '.php');
}else{
//	echo "Author's page: " . get_post_type();
//	global $wp_query;
//	$wp_query->set_404();
//	status_header( 404 );
//	get_template_part( 404 ); exit();
	require('archive-cat.php');
}
?>
<?php get_footer(); ?>

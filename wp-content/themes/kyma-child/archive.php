<?php get_header(); ?>
<?php
//print_r(get_post( $post->ID ));
$cats			= get_the_category($post->ID);
$cat_slug	= strtolower($cats[0]->cat_name);
// echo "<br><br><br><br><br><br>";
// if($cat_slug == 'us' || $cat_slug == 'journal' || $cat_slug == 'careers'){
if($cat_slug == 'us' || $cat_slug == 'careers'){
	require('archive-cat-' . $cat_slug . '.php');
}elseif($cat_slug == 'journal'){
	get_template_part('archive', 'journal');
}elseif(is_author()){
		// echo "is author<br>";
		// $post_type = get_queried_object();
		// echo $post_type->user_nicename . "<br>";

	  get_template_part('archive', 'journal');
		// require('archive-cat.php');
	}else{
		global $wp_query;
		$wp_query->set_404();
		status_header( 404 );
		get_template_part( 404 ); exit();
	}
?>
<?php get_footer(); ?>

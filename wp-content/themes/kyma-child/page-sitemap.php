<?php
/*
 * Template Name: Page Sitemap
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
/* Start	- Display Authors */
$display_authors = false;
// Add Users to Exclude
$users_to_exclude = array("1");

if($display_authors && count(get_users()) > count($users_to_exclude)){
//	$blogusers = get_users();
//	foreach($blogusers as $key => $user){
//		$usersID[] = esc_html($user->ID);
//	}
	$args = array(
		'show_fullname' => 1,
		'optioncount'   => 1,
		'orderby'       => 'post_count',
		'order'         => 'DESC',
		'exclude'				=> implode(',', $users_to_exclude),
	);

	echo
	'<h2 id="authors">Authors</h2>' .
	'<ul>';
	wp_list_authors($args);
	echo
	'</ul>';
}
/* End		- Display Authors */


/* Start	- Display Pages */
$display_pages = false;
// Add pages to exclude
//$pages_to_exclude = array('6', '12', '169', '577', '591', '600');
$pages_to_exclude = array('12', '169', '577', '591', '600');

if($display_pages && count(get_pages()) > count($pages_to_exclude)){
	$args = array(
   'title_li'	=> '',
   'exclude'	=> implode(',', $pages_to_exclude),
 );
	echo
	'<h2 id="pages">Pages</h2>' .
	'<ul>';
	wp_list_pages($args);
	echo
	'</ul>';
}
/* End		- Display Pages */


/* Start	- Display Posts */
$display_posts = false;
// Add categories to exclude
//$args = array('exclude' => array('1', '6', '9', '11'));
$args = array('exclude' => array('1', '6', '9', '11'));
$cats = get_categories($args);

if($display_posts){
	echo
	'<h2 id="posts">Posts</h2>' .
	'<ul>';

	foreach ($cats as $cat){
		echo
		"<li>" .
			"<h3>" . $cat->cat_name . "</h3>";
		echo
			"<ul>";
		query_posts('posts_per_page=-1&cat=' . $cat->cat_ID);
		while(have_posts()){
			the_post();
			$category = get_the_category();
			// Only display a post link once, even if it's in multiple categories
			if($category[0]->cat_ID == $cat->cat_ID){
				echo
				'<li>' . '<a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
			}
		}
		echo
			"</ul>";
		echo
		"</li>";
	}
	echo
	'</ul>';
}
/* End		- Display Posts */
?>

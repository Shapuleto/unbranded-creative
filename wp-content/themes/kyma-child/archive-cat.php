<?php get_header(); ?>
<!-- Our Blog Grids -->
<section class="content_section">
	<div class="content row_spacer">
		<div class="main_title centered upper">
			<h2 class="typo-title">
				<span class="line">
					<i class="fa fa-archive"></i>
				</span>
				<?php the_archive_title(); ?>
			</h2>
		</div>
		<?php
		$imageSize = 'kyma_home_post_full_thumb';
		?>
		<!-- Start	-	Author Posts Content -->
		<div class="content_spacer clearfix">
			<div class="hm_blog_list clearfix"><?php
				if(have_posts()){
					while (have_posts()): the_post();
						get_template_part('blog', 'content');
					endwhile;
				}?>
			</div>
		</div>
		<!-- End		-	Author Posts Content -->
	</div>
</section>
<!-- End Our Blog Grids -->
<?php get_footer(); ?>

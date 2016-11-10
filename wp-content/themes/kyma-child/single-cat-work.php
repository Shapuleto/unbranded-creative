<!-- Start	- Work Feauterd Image -->
<section class="content_section">
	<div class="content-fluid" id="section_work">
		<div class="jumbotron">
			<?php
			$post_id = get_the_id();
			?>
			<?php
			$imgID = get_post_thumbnail_id($post_id);
			$featuredImage = wp_get_attachment_image_src($imgID, 'full');
			$imgURL = $featuredImage[0];
			echo "<img src='$imgURL'>";
			wp_reset_query();
			?>
		</div>
	</div>
</section><!-- End		- Work Feauterd Image -->
<!-- Start - Single Post Display - work category -->
<section class="content_section">
	<div class="internal_post_con clearfix ">
		<?php
		if (have_posts()):
			while (have_posts()): the_post(); ?>
		<div  class="cont-95">
			<div class="row">
				<div id="<?php echo get_the_id(); ?>" <?php post_class('clearfix'); ?> >
					<div class="post_title_con col-xs-12 col-sm-6">
						<h6 class="title typo-title">
							<!-- <a href="<?php the_permalink(); ?>"><?php //the_title(); ?></a> -->
							<?php the_title(); ?>
						</h6>
					</div>
					<div class="post_title_con col-xs-12 col-sm-6">
						<?php echo get_the_excerpt(); ?>
					</div>
				</div>
			</div>
		</div>
		<div>
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<?php the_content(); ?>
				</div>
				<!-- Next and Prev Post-->
				<div id="work-prev-next">
					<div class="post_next_prev_con clearfix">
						<div class="post_next_prev clearfix">
							<span class="pull-left">
							<?php next_post_link('%link', '<i class="fa fa-long-arrow-left"></i><span class="t">' . __('Prev', 'kyma') . '</span>'); ?>
							</span>
							<span class="pull-right">
							<?php previous_post_link('%link', '<span class="t">' . __('Next', 'kyma') . '</span><i class="fa fa-long-arrow-right"></i>'); ?>
							</span>
						</div>
					</div>
				</div>
				<script>
				jQuery(document).ready(function($) {
					var move = true;
					var timeout = null;

					// Verify if the mouse is moving
					$("body").mousemove(function(event) {
						clearTimeout(timeout);

						timeout = setTimeout(function() {
							// console.log('Mouse idle for 3 sec');
						}, 3000);

						if(move){
							var pageCoords		= "( " + event.pageX		+ ", " + event.pageY		+ " )";
							var clientCoords	= "( " + event.clientX	+ ", " + event.clientY	+ " )";
							if(event.pageY != event.clientY){
								$("#work-prev-next .post_next_prev a span.t").animate({opacity: 1}, 500);
								move = false;
								// console.log("move: " + move + " Coords: " + pageCoords + " : " + clientCoords);
							}
						}
					}).on('mousestop', function() {
						if($('span.t:hover').length != 0) {
							// console.log("hover");
						}else{
							if(!move){
								$("#work-prev-next .post_next_prev a span.t").animate({opacity: 0}, 1500);
								move = true;
								console.log("move: " + move + " not hover");
							}
						}
					});
				});
				</script>
				<!-- End Next and Prev Post-->
			</div>
		</div>
			<?php
			endwhile;
		endif;
		?>
	</div>
</section><!-- End	 - Single Post Display - work category -->
<!-- Start - Testimonials carousel -->
<section class="content_section">
	<div class="content-fluid">
		<article class="cont-95">
			<div class="row row-content">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<?php
					echo do_shortcode('[recentposts-carousel columns="1" category="testimonials" number="10" image="no"]');
					?>
				</div>
			</div>
		</article>
	</div>
</section><!-- End - Testimonials carousel -->

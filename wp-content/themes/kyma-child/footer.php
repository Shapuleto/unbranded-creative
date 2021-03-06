<?php $kyma_theme_options = kyma_theme_options();
$col = 12 / (int)$kyma_theme_options['footer_layout']; ?>
<!-- footer -->
<footer id="footer">
	<div class="footer_copyright">
		<div class="cont-95 clearfix">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
				<span class="footer_copy_text">
					<?php echo esc_attr($kyma_theme_options['footer_copyright'] . ' ' . $kyma_theme_options['developed_by_text']); ?>
					<a href="<?php echo esc_url($kyma_theme_options['developed_by_link']); ?>"><?php echo esc_attr($kyma_theme_options['developed_by_link_text']); ?></a>
				</span>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 clearfix">
				<?php wp_nav_menu(array(
					'theme_location'	=> 'secondary',
					'container'				=> false,
					'menu_class'			=> 'clearfix footer_menu',
					'link_before'			=> '<span>',
					'link_after'			=> '</span>',
				)); ?>
				<!-- Start	- Sitemap -->
				<ul id="menu-sitemap-menu" class="clearfix footer_menu"><li><a href="<?php echo home_url('/wp-custom-sitemap/'); ?>"><span>Sitemap</span></a></li></ul>
				<!-- End		- Sitemap -->
			</div>
		</div>
	</div>
</footer>
<!-- End footer -->
<a href="#0" class="hm_go_top"></a>
</div><!-- End wrapper -->
<?php wp_footer();
if($kyma_theme_options['custom_css']!=""){
	echo '<style>'.$kyma_theme_options['custom_css'].'</style>';
}
?>
<!-- Start	- Hide Header on on scroll down -->
<script type="text/javascript">
	jQuery(document).ready(function($) {
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('header').outerHeight();
		var jumbotronHeight = $('.jumbotron.home').outerHeight();
		var iO;
		// on scroll, let the interval function know the user has scrolled
		$(window).scroll(function(event){
			didScroll = true;

			// $("#work-prev-next .post_next_prev a span.t").show().delay(5000).queue(function(n) {
			// 	$(this).hide(); n();
			// });
			$("#work-prev-next .post_next_prev a span.t").addClass('anim-in');
			// if($('span.t:hover').length != 0) {
			// console.log("hover");
			// clearTimeout(iO);
		// }else{
				// console.log("not hover");
				iO = setTimeout(function() { $("#work-prev-next .post_next_prev a span.t").removeClass('anim-in').addClass('anim-out'); }, 5000);
			// }
		});
		// run hasScrolled() and reset didScroll status

		setInterval(function() {
			if (didScroll) {
				hasScrolled();
				didScroll = false;
			}
		}, 250);

		function hasScrolled() {
			var st = $(this).scrollTop();
			
			// Make sure they scroll more than delta
			if(Math.abs(lastScrollTop - st) <= delta)
					return;

			// If they scrolled down and are past the navbar, add class .nav-up.
			// This is necessary so you never see what is "behind" the navbar.
			if (st > lastScrollTop && st > navbarHeight){
				// Scroll Down
				// alert("down");
				$('header').removeClass('nav-down rolling').addClass('nav-up');
			} else {
				// Scroll Up
				if(st + $(window).height() < $(document).height()) {
				// alert("up");
					$('header').removeClass('nav-up').addClass('nav-down rolling');
				}
			}
			lastScrollTop = st;
			if($(window).scrollTop() === 0) {
				$('header').removeClass('nav-down rolling');
			}
			if(document.getElementById("section_work") !== null){
				if(st >= jumbotronHeight){
					$('nav ul#navy li:first-child').addClass('current_page_item');
				}else{
					$('nav ul#navy li:first-child').removeClass('current_page_item');
				}
			}
		}
	});
</script>
<!-- End		- Hide Header on on scroll down -->
	</body>
</html>
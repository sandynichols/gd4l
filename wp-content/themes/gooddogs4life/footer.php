<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gooddogs4life
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info container">
			<div class="row">
			<div class="col-md-4 social">
					<div id="social-test">
					<ul class="social">
						<li><a href="https://www.facebook.com/Good-Dogs-4-Life-108040164170067/?epa=SEARCH_BOX" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<!--<li><a href="https://instagram.com/colorlib"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>-->
						<li><a href="https://www.youtube.com/channel/UCz1mUSRP-1i819W3BMRANZA" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></a></i></li>
					</ul>
					</div>
					</div>


				<div class="col-md-4">
					<a href="<?php echo site_url();?>/"><img src="<?php echo site_url();?>/wp-content/uploads/2020/04/logo-white512.png" alt="Good Dogs 4 Life Logo for Postitive Dog Training" class="footerlogo" />
					<p class="footerlogotext">Good Dogs 4 Life<p></a>
				</div>
			
				<div class="col-md-4">
					<p><a href="https://www.sandynichols.net" target="_blank">Website by Sandy Nichols Web Design</a></p>
				</div>
				
			</div>

	
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script>
		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();

			if (scroll >= 100) {
				$(".site-header").addClass("change");
			} else {
				$(".site-header").removeClass("change");
			}
		});
</script>
</body>
</html>

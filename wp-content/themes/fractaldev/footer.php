<?php if ( 'on' == et_get_option( 'divi_back_to_top', 'false' ) ) : ?>

	<span class="et_pb_scroll_top et-pb-icon"></span>

<?php endif;

if ( ! is_page_template( 'page-template-blank.php' ) ) : ?>

			<footer id="main-footer">
				<?php get_sidebar( 'footer' ); ?>


		<?php
			if ( has_nav_menu( 'footer-menu' ) ) : ?>

				<div id="et-footer-nav">
					<div class="container">
						<?php
							wp_nav_menu( array(
								'theme_location' => 'footer-menu',
								'depth'          => '1',
								'menu_class'     => 'bottom-nav',
								'container'      => '',
								'fallback_cb'    => '',
							) );
						?>
					</div>
				</div> <!-- #et-footer-nav -->

			<?php endif; ?>

				<div id="footer-bottom">
					<div class="container clearfix">
				<?php
					if ( false !== et_get_option( 'show_footer_social_icons', true ) ) {
						get_template_part( 'includes/social_icons', 'footer' );
					}

					echo et_get_footer_credits();
				?>
					</div>	<!-- .container -->
				</div>
			</footer> <!-- #main-footer -->
		</div> <!-- #et-main-area -->

<?php endif; // ! is_page_template( 'page-template-blank.php' ) ?>

	</div> <!-- #page-container -->

	<?php wp_footer(); ?>
	<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	<script type="text/javascript">
    jQuery(document).ready(function(){
		var contentWidth = $('.logo_container').outerWidth(), fullWidth = $('#main-header').outerWidth(), contentHalf;
		contentHalf = contentWidth / 2;
		marginLeft = (fullWidth / 2) - contentHalf;
		console.log(marginLeft);
		jQuery('.half-width.left-class').css({
			'width': contentHalf + 'px',
			'margin-left': marginLeft + 'px'
		});
		jQuery('.half-width.right-class').css({
			'width': contentHalf + 'px',
			'margin-right': marginLeft + 'px'
		});
		
    });
  </script>
</body>
</html>
	</div><!-- end #main .container -->
	<div id="stickyfoot">
		<header id="branding" role="banner" class="threecol">
			<hgroup>
				<h1 id="site-title"><span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></span></h1>
			</hgroup>
		</header>
<?php /*		<footer id="colophon" role="contentinfo" class="ninecol last> 
			<div id="supplementary">*/ ?>
				<?php if ( is_active_sidebar( 'footer-widget1' ) ) : ?>
				<div id="footer-widget1" class="threecol widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-widget1' ); ?>
				</div><!-- end #footer-widget1 -->
				<?php endif; ?>
			
				<?php if ( is_active_sidebar( 'footer-widget2' ) ) : ?>
				<div id="footer-widget2" class="threecol widget-area" role="complementary">
					<?php dynamic_sidebar( 'footer-widget2' ); ?>
				</div><!-- end #footer-widget2 -->
				<?php endif; ?>
			
				<?php if ( is_active_sidebar( 'footer-widget3' ) ) : ?>
				<div id="footer-widget3" class="threecol widget-area last" role="complementary">
					<?php dynamic_sidebar( 'footer-widget3' ); ?>
				</div><!-- end #footer-widget3 -->
				<?php endif; ?>
<?php //				</div><!-- end #supplementary --> ?>
			<div id="site-generator">
				<?php do_action( 'twentyeleven_credits' ); ?>
			</div>
<?php //		</footer> ?>
	</div><!-- end .stickyfooter -->
</div><!-- end #page -->

<?php wp_footer(); ?>

</body>
</html>
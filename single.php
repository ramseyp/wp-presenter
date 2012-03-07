	<?php get_header(); ?>
		<div id="content" class="row">
			<div class="twelvecol" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', 'single' ); ?>	
			<nav id="nav-single">
				<span class="prev_slide"><?php next_post_link( '%link', __( '<span class="meta-nav">&larr;</span> Prior Slide', 'presenter' ) ); ?></span>
				<span class="next_slide"><?php previous_post_link( '%link', __( 'Next Slide <span class="meta-nav">&rarr;</span>', 'presenter' ) ); ?></span>
			</nav><!-- #nav-single -->
			<div class="elevencol">
			<?php comments_template( '', true ); ?>
			</div>
			<?php endwhile; // end of the loop. ?>
			</div><!-- end .twelvecol -->
		</div><!-- end .row -->
	<?php get_footer(); ?>
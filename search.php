<?php get_header(); ?>
		<section id="primary" class="row">
			<div id="content" class="twelvecol" role="main">
			<?php if ( have_posts() ) : ?>
				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'presenter' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>
				<?php endwhile; ?>
 			<?php else : ?>
				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'presenter' ); ?></h1>
					</header><!-- end .entry-header -->
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'presenter' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- end .entry-content -->
				</article><!-- end #post-0 -->
			<?php endif; ?>
			</div><!-- end .twelvecol -->
		</section><!-- end #primary -->
<?php get_footer(); ?>
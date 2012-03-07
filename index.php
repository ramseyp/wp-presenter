	<?php get_header(); ?>
		<div id="content" class="row">
			<div class="twelvecol" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
					<header>
						<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					</header> <!-- end article header -->
					<section class="post_content clearfix">
						<?php the_content(); ?>
					</section> <!-- end article section -->
					<footer>
						<?php if ( comments_open() && ! post_password_required() ) : ?>
							<div class="comments-link">
								<?php comments_popup_link( '', _x( '1', 'comment', 'presenter' ), _x( '%', 'comments', 'presenter' ) ); ?>
							</div>
						<?php endif; ?>
					</footer> <!-- end article footer -->
				</article> <!-- end article -->
				<?php endwhile; ?>
				<?php //if (function_exists('wp_pagenavi')) { ?>
					<?php //wp_pagenavi(); ?>			
				<?php //} else { ?>
				<nav class="wp-prev-next">
					<ul class="clearfix"><?php //_e('&laquo; Previous Slide', "presenter") ?>
						<li class="prev_slide"><?php previous_posts_link() ?></li>
						<li class="next_slide"><?php next_posts_link() ?></li>
					</ul>
				</nav>
				<?php //} ?>
				<?php else : ?>
				<article id="post-not-found">
					<header>
						<h1>Not Found</h1>
					</header>
					<section class="post_content">
						<p>Sorry, but the requested resource was not found on this site.</p>
					</section>
					<footer>
					</footer>
				</article>
				<?php endif; ?>
			</div> <!-- end .twelvecol -->
		</div><!-- end #content -->
	<?php get_footer(); ?>

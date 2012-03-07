	<?php get_header(); ?>
		<div id="content" class="row">
			<div class="twelvecol flexslider" role="main">
				<?php if (have_posts()) : ?> 
				<ul class="slides">
					<?php while (have_posts()) : the_post(); ?>
					<li>
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
									<?php comments_popup_link( '','1 comment', '% comments'); ?>
								</div>
							<?php endif; ?>
						</footer> <!-- end article footer -->
					</article> <!-- end article -->
					</li>
					<?php endwhile; ?>
				</ul>
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

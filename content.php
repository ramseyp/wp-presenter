	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php if ( is_sticky() ) : ?>
				<hgroup>
					<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'presenter' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<h3 class="entry-format"><?php _e( 'Featured', 'presenter' ); ?></h3>
				</hgroup>
			<?php else : ?>
				<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'presenter' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php endif; ?>
		</header><!-- end .entry-header -->
		<?php if ( is_search() ) : ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- end .entry-summary -->
		<?php else : ?>
		<div class="entry-content">
			<?php the_content( __( 'More <span class="meta-nav">&rarr;</span>', 'presenter' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'presenter' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- end .entry-content -->
		<?php endif; ?>
		<footer class="entry-meta">
			<?php $show_sep = false; ?>
			<?php if ( comments_open() ) : ?>
				<?php if ( $show_sep ) : ?>
				<span class="sep"> | </span>
				<?php endif; // End if $show_sep ?>
				<span class="comments-link"><?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a reply', 'presenter' ) . '</span>', __( '<b>1</b> Reply', 'presenter' ), __( '<b>%</b> Replies', 'presenter' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'presenter' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- end .entry-meta -->
	</article><!-- end #post-<?php the_ID(); ?> -->

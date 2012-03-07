	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<h1 class="entry-title"><?php the_title(); ?></h1>
		</header><!-- end .entry-header -->
		<p class="pres_home"><?php _e('Back to first slide: ','presenter');
			$category = get_the_category(); 
			if($category[0]){
				echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
			} ?>
		</p>
		<div class="entry-content">
			<?php the_content(); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'presenter' ) . '</span>', 'after' => '</div>' ) ); ?>
		</div><!-- end .entry-content -->
		<footer class="entry-meta">
			<?php edit_post_link( __( 'Edit', 'presenter' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- end .entry-meta -->
	</article><!-- end #post-<?php the_ID(); ?> -->

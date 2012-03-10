	<?php get_header(); ?>
		<div id="content" class="row">
			<div class="twelvecol" role="main">
				<header>
					<h1 class="entry-title"><?php bloginfo( 'name' ); ?></h1>
				</header> <!-- end article header -->
				<section class="post_content clearfix">
					<div class="intro"><?php 
					if ( is_active_sidebar( 'homepage' ) ) {
						echo '<div class="homepage">';
							dynamic_sidebar( 'homepage' );
						echo '</div><!-- end .homepage -->';
					} else {
						echo '<section class="post_content clearfix">';
						echo '<h2 class="intro">'. _e('Select from a Presentation below.', 'presenter') .'</h2>';
					}
					$args = array(
						'orderby' => 'name',
						'show_count' => 1,
						'title_li' => '',
						'hierarchical' => false
					); ?>
					<ul>
					<?php wp_list_categories( $args ); ?>
					</ul></div>

				</section> <!-- end article section -->
				<footer>

				</footer> <!-- end article footer -->

			</div> <!-- end .twelvecol -->
		</div><!-- end #content -->
	<?php get_footer(); ?>

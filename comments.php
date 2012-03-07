	<div id="comments">
	<?php if ( post_password_required() ) : ?>
		<p class="nopassword"><?php _e( 'This slide is password protected. Enter the password to view any comments.', 'presenter' ); ?></p>
	</div><!-- end #comments -->
	<?php return;
	endif; ?>
	<?php if ( have_comments() ) : ?>
		<h2 id="comments-title">
			<?php printf( _n( 'One comment on &ldquo;%2$s&rdquo;', '%1$s comments on &ldquo;%2$s&rdquo;', get_comments_number(), 'presenter' ), number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
			?>
		</h2>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-above">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'presenter' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'presenter' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'presenter' ) ); ?></div>
		</nav>
		<?php endif; ?>
		<ol class="commentlist">
			<?php wp_list_comments( array( 'callback' => 'presenter_comment' ) );
			?>
		</ol>
		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<nav id="comment-nav-below">
			<h1 class="assistive-text"><?php _e( 'Comment navigation', 'presenter' ); ?></h1>
			<div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'presenter' ) ); ?></div>
			<div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'presenter' ) ); ?></div>
		</nav>
		<?php endif; ?>
	<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="nocomments"><?php _e( 'Comments are closed.', 'presenter' ); ?></p>
	<?php endif; ?>
	<?php comment_form(); ?>
</div><!-- end #comments -->

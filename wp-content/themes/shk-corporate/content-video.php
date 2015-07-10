<?php
/**
 * Post Format audio
 * @package shk-corporate
 * @since 1.0.0
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content-link clearfix">
		<?php the_content(); ?>
	</div>
	<div class="entry-meta">
			<span class="post-format">
				<i class="fa fa-video-camera"></i>&nbsp;<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'video' ) ); ?>"><?php echo esc_attr(get_post_format_string( 'video' )); ?></a>
			</span>

			<?php flat_responsive_posted_on(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'shk-corporate' ), __( '1 Comment', 'shk-corporate' ), __( '% Comments', 'shk-corporate' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'shk-corporate' ), '<span class="edit-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->   
</article><!-- #post-## -->

<div class="article-separator"></div>

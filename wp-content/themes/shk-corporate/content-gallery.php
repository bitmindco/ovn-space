<?php
/**
 * Post Format gallery
 * @package shk-corporate
 * @since 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	

	<header class="entry-header">
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>

		<div class="entry-meta">
			<span class="post-format">
				<i class="fa fa-picture-o"></i>&nbsp;<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'gallery' ) ); ?>"><?php echo esc_attr(get_post_format_string( 'gallery' )); ?></a>
			</span>

			<?php flat_responsive_posted_on(); ?>

			<?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>
			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'shk-corporate' ), __( '1 Comment', 'shk-corporate' ), __( '% Comments', 'shk-corporate' ) ); ?></span>
			<?php endif; ?>
			<?php edit_post_link( __( 'Edit', 'shk-corporate' ), '<span class="edit-link">', '</span>' ); ?>

		</div><!-- .entry-meta -->
		</h2>


	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'shk-corporate' ) );
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'shk-corporate' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->

<div class="article-separator"></div>

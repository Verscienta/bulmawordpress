<?php
/**
 * Template part for displaying content
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bulmawordpress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('section'); ?>>
	<div class="container">
		<header class="content">
			<?php if ( is_single() ) : ?>
				<?php bulmawordpress_the_title('is-1', FALSE); ?>
			<?php elseif ( 'page' === get_post_type() ) : ?>
				<?php bulmawordpress_the_title('is-2', FALSE); ?>
			<?php else : ?>
				<?php bulmawordpress_the_title('is-2'); ?>
			<?php endif; ?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="subtitle is-6">
					<?php bulmawordpress_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->

		<div class="content entry-content">
			<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses(
					__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bulmawordpress' ),
					array(
						'span' => array(
							'class' => array()
							)
						)
					),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				)
			);

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmawordpress' ),
				'after'  => '</div>',
				) );
				?>
			</div><!-- .entry-content -->

			<footer class="content entry-footer">
				<?php bulmawordpress_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
	</article><!-- #post-## -->

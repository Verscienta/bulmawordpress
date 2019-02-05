<?php
/**
 * Template part for displaying search
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bulmawordpress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('wrapper'); ?>>
	<div class="container content">
		<header class="entry-header">
			<?php bulmawordpress_the_title('is-3'); ?>
			<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php bulmawordpress_posted_on(); ?>
				</div><!-- .entry-meta -->
			<?php endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<footer class="entry-footer">
			<?php bulmawordpress_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	</div>
</article><!-- #post-## -->

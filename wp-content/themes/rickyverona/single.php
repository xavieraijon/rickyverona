<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package RickyVerona
 */

get_header(); ?>

<div class="container">

	<?php if ( have_posts() ) : ?>
	
		<?php while ( have_posts() ) : the_post(); ?>

		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<header class="entry-header">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

					<small class="tendencias-blog__post-info">Publicado: <?php the_time('l, j \d\e F \a \l\a\s H:m'); ?> | por <strong><?php the_author(); ?></strong></small>

			</header><!-- .entry-header -->

			<div class="entry-content">
				<?php the_content(); ?>
				<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . __( 'Pages:', 'rickyverona' ),
						'after'  => '</div>',
					) );
				?>
			</div><!-- .entry-content -->

			<footer class="entry-footer">
				
			</footer><!-- .entry-footer -->
		</article><!-- #post-## -->

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php get_footer(); ?>
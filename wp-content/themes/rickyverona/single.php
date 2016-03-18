<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package RickyVerona
 */

get_header('single'); ?>

<section class="single-post">

	<div class="container">

		<div class="row">
			
			<div class="col-sm-8">

				<?php if ( have_posts() ) : ?>
				
					<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<header class="entry-header">

							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							<small class="tendencias-blog__post-info">Publicado: <?php the_time('l, j \d\e F \a \l\a\s H:m'); ?> | por <strong><?php the_author(); ?></strong></small>

						</header><!-- .entry-header -->

						<br>

						<div class="entry-content">

							<?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>

							<br>
							<br>

							<?php the_content(); ?>

						</div><!-- .entry-content -->

					</article><!-- #post-## -->

					<?php endwhile; ?>

				<?php endif; ?>

			</div>

			<div class="col-sm-4">

				<?php get_sidebar(); ?>
				
			</div>

		</div>

	</div>

	<br>
	<br>

</section>

<?php get_footer('single'); ?>
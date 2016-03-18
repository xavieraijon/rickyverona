    <?php if ( have_rows('listado_productos') ) : ?>
    
    <section id="productos" class="productos">
        <div class="container">
            <h1><i class="fa fa-chevron-right red"></i>&nbsp;Productos</h1>
            <br>
            <div class="owl-carousel">

                <?php while ( have_rows('listado_productos') ) : the_row(); ?>

                    <img src="<?php the_sub_field('imagen_producto') ?>" alt="<?php the_sub_field('nombre_producto') ?>">
                
                <?php endwhile; ?>

            </div>
        </div><!-- /.container -->
    </section><!-- /.productos -->

    <?php endif; ?>
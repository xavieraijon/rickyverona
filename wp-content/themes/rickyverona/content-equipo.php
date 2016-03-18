    <?php if ( have_rows('equipo') ) : ?>

    <section id="equipo" class="equipo">
        <div class="container">
            <h1 class="wow fadeInLeft" data-wow-offset="30"><i class="fa fa-chevron-right red"></i>&nbsp;Equipo</h1>
            <br>
            <br>
            <div class="row">
                
                <?php while ( have_rows('equipo') ) : the_row(); ?>

                <div class="col-sm-6 col-md-3">
                    <div class="equipo-item wow zoomIn" data-wow-offset="100">
                        <img src="<?php the_sub_field('fotografia'); ?>" class="img-responsive" alt="<?php the_sub_field('nombre'); ?>">
                        <div class="equipo-info">
                            <h2>
                                <?php the_sub_field('nombre'); ?>
                                <span><?php the_sub_field('especialidad'); ?></span>
                            </h2>
                            <div class="equipo-info__descripcion">
                                <hr>
                                <p><?php the_sub_field('descripcion'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php endwhile; ?>

            </div>
        </div><!-- /.container -->
    </section><!-- /.equipo -->

    <?php endif; ?>
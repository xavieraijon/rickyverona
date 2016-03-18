    <section id="salon" class="salon">

        <div class="salon-description">
            <div class="container">
                <h1 class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".1s"><i class="fa fa-chevron-right red"></i>&nbsp;<?php the_field('titulo_seccion_salon') ?></span></h1>
                <br>
                <p class="wow fadeInUp" data-wow-offset="50" data-wow-delay=".2s"><?php the_field('descripcion') ?></p>
            </div><!-- /.container -->
        </div><!-- /.salon-description -->
        

    
        <div class="salon-servicios">
            <div class="container">
                <div class="row">
                    
                <?php if ( have_rows('servicios') ) : ?>

                    <?php while ( have_rows('servicios') ) : the_row(); ?>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-xs-6">
                                <br>
                                <img src="<?php the_sub_field('imagen_servicio') ?>" class="img-circle img-thumbnail wow fadeInDown" data-wow-offset="30">
                            </div>
                            <div class="col-xs-6">
                                <h2 class="wow fadeInRight" data-wow-offset="30" data-wow-delay=".1s"><i class="fa fa-chevron-right dark"></i>&nbsp;<?php the_sub_field('titulo_servicio') ?></h2>
                                <br>
                                <?php the_sub_field('descripcion_servicio') ?>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                <?php endif; ?>

                </div>
            </div><!-- /.container -->
        </div><!-- /.salon-servicios -->

    </section><!-- /.salon -->
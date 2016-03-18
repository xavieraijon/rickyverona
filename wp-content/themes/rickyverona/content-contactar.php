    <section id="contactar" class="contactar">
        <div class="container">
            <h1><i class="fa fa-chevron-right red"></i>&nbsp;<?php the_field('titulo_contacta') ?></h1>
            <br>
            <div class="row">
                <div class="col-sm-4">
                    <address>
                        <h3 class="red">RickyVerona</h3>
                        Reservas:<br>
                        <span class="light-red"><?php the_field('telefono') ?></span><br>
                        <br>
                        Dirección:<br>
                        <span class="light-red">
                            <?php the_field('direccion') ?><br>
                        </span>
                        <br>
                        Si quieres trabajar con nosotros manda tu currículum a:<br>
                        <a href="mailto:<?php the_field('email') ?>"><span class="light-red"><?php the_field('email') ?></span></a><br>
                    </address>
                </div>
                <div class="col-sm-8">
                    <div class="contact-form-content">
                        <form name="contact-form" id="contact-form">
                            <label for="name"></label>
                            <input type="text" name="name" placeholder="nombre" class="form-control input-lg" required>
                            <label for="email"></label>
                            <input type="email" name="email" placeholder="email" class="form-control input-lg" required>
                            <label for="phone"></label>
                            <input type="phone" name="phone" placeholder="teléfono" class="form-control input-lg">
                            <label for="name"></label>
                            <textarea name="comment" id="comment" placeholder="comentarios" rows="6" class="form-control input-lg" required></textarea>
                            <br>
                            <!-- <div class="g-recaptcha" data-sitekey="6LfsDQITAAAAAPqfJ7VrrbpA5Ipl-ANQp_g27wjj"></div> -->
                            <div class="clearfix"></div>
                            <button class="btn btn-default btn-red btn-lg">Solicitar información</button>
                        </form>
                    </div><!-- /.contact-form-content -->
                </div>
            </div>
        </div><!-- /.container -->
    </section><!-- /.productos -->
    
    <?php $location = get_field('mapa'); ?>

    <?php if ( !empty($location) ) : ?>

    <section id="google-maps" class="google-maps">
        <div id="map-canvas">
            <div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
        </div>
    </section><!-- /.google-maps -->

    <?php endif; ?>
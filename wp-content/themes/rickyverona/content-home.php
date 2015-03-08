    <section id="home" class="home hidden-xs">
    
    <?php $slider = new WP_Query( array('post_type' => 'slider', 'name' => 'Slider Principal') ); ?>
    
    <?php if ( $slider -> have_posts() ) : ?>
        
        <?php while ( $slider -> have_posts() ) : $slider -> the_post(); ?>            
        
        <div id="slider-main" class="flexslider">

            <ul class="slides">

            <?php $slides = get_field('slider'); ?>
            
            <?php if ( $slides ) : ?>
                
                <?php foreach ( $slides as $slide ) : ?>

                <li class="slide_1">
                    <img src="<?php echo $slide['url'] ?>" alt="<?php echo $slide['alt'] ?>">

                    <div class="slider-main__content">
                        <div class="container">
                            <div class="col-sm-6 col-sm-offset-6 text-right">
                                
                                <?php if ( $slide['title'] == 'First') : ?>
                                
                                    <img src="<?php bloginfo( 'template_url' ); ?>/img/the-qhair-logo-white.png" class="qhair-logo" alt="The Qhair Logo">
                                    <br><br>
                                
                                <?php endif; ?>
                                
                                <p><?php echo $slide['description'] ?></p>
                            </div>
                        </div>
                    </div>
                </li>
                
                <?php endforeach; ?>

            <?php endif; ?>

            </ul><!-- /.slides -->

        </div><!-- /.flexslider -->
        <div class="down-icon hidden-xs wow fadeInDownBig">
            <a href="#salon"><i class="fa fa-angle-double-down fa-5x"></i></a>
        </div>

        <?php endwhile; ?>

    <?php endif; ?>

    </section><!-- /.home -->
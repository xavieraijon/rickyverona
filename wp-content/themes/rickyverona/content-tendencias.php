    <section id="tendencias" class="tendencias">
        <div class="container">
            <h1 class="wow fadeInRight" data-wow-offset="30" data-wow-delay=".1s"><i class="fa fa-chevron-right dark"></i>&nbsp;Tendencias</h1>
            <br>
            <p class="wow fadeInLeft" data-wow-offset="30" data-wow-delay=".1s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident et quaerat voluptatem delectus, vero iure sequi in illo reprehenderit alias, maiores totam ducimus, architecto fugiat impedit facere id dicta aspernatur.</p>
        </div>
        
        <?php 
            $posts = new WP_Query( array('post_type' => 'post') );
        ?>

        <?php if ( $posts -> have_posts() ) : ?>

        <div class="tendencias-blog">
            <div class="container">
                <div class="row">

                    <?php while ( $posts -> have_posts() ) : $posts -> the_post(); ?>

                    <div class="tendencias-blog__tendencia col-sm-4" id="post-<?php the_ID(); ?>">
                        <article>
                            <h2><?php the_title(); ?></h2>
                            <small class="tendencias-blog__post-info">Publicado: <?php the_time('l, j \d\e F \a \l\a\s H:m'); ?> | por <strong><?php the_author(); ?></strong></small>
                            <br>
                            <?php the_post_thumbnail(); ?>
                            <br>
                            <br>
                            <?php the_excerpt(); ?>
                        </article>
                    </div><!-- /.tendencias-blog__tendencia -->

                    <?php endwhile; ?>

                </div> 
            </div><!-- /.container -->
        </div><!-- /.tendencias-blog -->

        <?php endif; ?>

    </section><!-- /.tendencias -->
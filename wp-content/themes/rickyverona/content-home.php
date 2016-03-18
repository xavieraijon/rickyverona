<section id="home" class="vegas">

	<div class="slider-images">

		<?php $slider = new WP_Query( array('post_type' => 'slider', 'name' => 'slider-principal') ); ?>

	    <?php if ( $slider -> have_posts() ) : ?>
	        
	        <?php while ( $slider -> have_posts() ) : $slider -> the_post(); ?>
	            
	            <?php $slides = get_field('slider'); ?>
	            
	            <?php if ( $slides ) : ?>
	                
	                <?php foreach ( $slides as $slide ) : ?>

	                    <span data-src="<?php echo $slide['url'] ?>"></span>
	                
	                <?php endforeach; ?>

	            <?php endif; ?>

	        <?php endwhile; ?>

	    <?php endif; ?>

	    <?php wp_reset_query(); ?>

	</div>

    <div class="hero-wrapper">
        <img src="<?php bloginfo( 'template_url' ); ?>/img/the-qhair-logo-white.png" class="img-responsive" alt="The Qhair Logo">
        <br><br>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore totam, sint cumque corrupti id culpa distinctio. Numquam error temporibus debitis excepturi adipisci voluptatum praesentium rerum dolor quidem provident cumque, nostrum.</p>        
    </div>
</section>
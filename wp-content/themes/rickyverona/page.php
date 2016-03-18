<?php
/**
 * The template for displaying One Page Home.
 *
 * @package RickyVerona
 */
get_header(); ?>

    <?php get_template_part( 'content', 'home' ); ?>
    <?php get_template_part( 'content', 'salon' ); ?>
    <?php get_template_part( 'content', 'tendencias' ); ?>
    <?php get_template_part( 'content', 'productos' ); ?>
    <?php get_template_part( 'content', 'destacada' ); ?>
    <?php get_template_part( 'content', 'equipo' ); ?>
    <?php get_template_part( 'content', 'contactar' ); ?>

<?php get_footer(); ?>

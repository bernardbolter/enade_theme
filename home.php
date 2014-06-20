<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<?php get_template_part( 'parts/navigation' ); ?>

<?php get_template_part( 'parts/intro' ); ?>
<?php get_template_part( 'parts/intro_q_a' ); ?>

<?php get_template_part( 'parts/perspective'); ?>
<?php get_template_part( 'parts/program'); ?>

<?php get_template_part( 'parts/about'); ?>

<?php get_template_part( 'parts/contact'); ?>

<?php get_footer(); ?>
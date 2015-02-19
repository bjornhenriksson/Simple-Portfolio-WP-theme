<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

<div class="content">

<div class="title">

	<section>

	<h1><?php the_title(); ?></h1>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<p><?php the_content(); ?></p>


	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>

	<a href="#feed" class="button-portfolio">My feed</a>

	<a href="#contact" class="button-flip">Contact</a>

	</section>

</div>

<?php get_template_part('loop'); ?>

<?php get_footer(); ?>

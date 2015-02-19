<?php get_header(); ?>

	<main role="main">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		
	<div class="content">

	<div class="title" style="background-image: url(<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>);">

		<section>

		<h1><?php the_title(); ?></h1>

		<p><?php the_field("sell"); ?></p>
		
		<p class="bod"><?php the_content(); ?></p>

		<a href="<?php the_field("url"); ?>" class="button-portfolio">See live</a>

		<a class="button-portfolio" href="http://twitter.com/share?text=( <?php the_title(); ?> )Björn Henriksson Portfolio&url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>



		</section>

	</div>

	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>

<?php get_footer(); ?>


<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		
	<div class="content">

	<div class="title">

		<section class="showcase">

		<p class="date"><?php the_date(); ?></p>
		<h1><?php the_title(); ?></h1>

		<p><?php the_field("sell"); ?></p>
		
		<p class="bod"><?php the_content(); ?></p>

		<a href="<?php the_field("url"); ?>" target="_blank" class="button-portfolio">See live</a>

		<a class="button-portfolio no-margin" href="http://twitter.com/share?text=( <?php the_title(); ?> )Björn Henriksson Portfolio&url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>

		</section>

		<section class="showcase flip">
		
		<a href=""><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="stretch" alt="<?php the_title(); ?> image" /></a>
		<a href=""><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="stretch" alt="<?php the_title(); ?> image" /></a>
		<a href=""><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="stretch" alt="<?php the_title(); ?> image" /></a>
		<a href=""><img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="stretch" alt="<?php the_title(); ?> image" /></a>

		</section>

	</div>

	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>

<?php get_footer(); ?>


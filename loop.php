<div class="main" id="feed">

	<div class="explain">

		<h2>Feed</h2>

		<p class="item-text">By category:</p>

		<p class="item code" data-type="code"><i class="fa fa-code"></i>Code & Design</p>

		<p class="item read" data-type="read"><i class="fa fa-pencil-square-o"></i>Writing & Mentions</p>

		<p class="item music" data-type="music"><i class="fa fa-music"></i>Music</p>

	</div>

<div class="cont">

	<div class="columns">

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<div class="fill type-<?php the_field("type"); ?>" id="medium">
			<div class="case <?php the_field("type"); ?>"></div>
			<a href="<?php the_permalink(); ?>" target="_blank">
			<img src="<?php echo wp_get_attachment_url(get_post_thumbnail_id()); ?>" class="img" alt="img medium" />
			<h3><?php the_title(); ?> <span><?php $value = get_field( "where" ); echo $value; ?></span></h3></a>
			<p><?php html5wp_excerpt('html5wp_index'); ?></p><br />
			<div class="links">
				<a class="view" href="<?php the_field("url"); ?>" target="_blank">View site</a>
				<a class="view" href="http://twitter.com/share?text=( <?php the_title(); ?> )Björn Henriksson Portfolio&url=<?php the_permalink(); ?>"><i class="fa fa-twitter"></i></a>
			</div>
		</div>

	<?php endwhile; ?>

	<?php else: ?>

		<h2>No posts</h2>

	<?php endif; ?>

	</div>
	
</div>

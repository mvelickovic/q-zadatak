<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<div class="customPostTypeContent">
		<h2 class="post-title"><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div> 
	<div class="movieName_metaBox">
	   <?php the_meta(); ?>
	   <?php echo get_post_meta(get_the_id(), 'movie_name', true) ?> 
	</div> 
<?php endwhile; ?>
<?php else: ?>
	<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
<?php endif; ?>
<?php get_footer(); ?>


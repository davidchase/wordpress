<?php
/**
 * Sample template for displaying single food posts.
 * Save this file as as single-food.php in your current theme.
 *
 * This sample code was based off of the Starkers Baseline theme: http://starkerstheme.com/
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	

	<h1><?php the_title(); ?></h1>

		<?php the_content(); ?>


		<h2>Custom Fields</h2>	
		
		<strong>food:</strong> <?php print_custom_field('Food'); ?><br />




<?php endwhile; // end of the loop. ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
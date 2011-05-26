<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
					
			
				<?php
				$fivesdrafts = $wpdb->get_results("SELECT * FROM $wpdb->posts
					WHERE post_status = 'draft' AND post_author = 1");
				if ($fivesdrafts) :
					foreach ($fivesdrafts as $post) :
						setup_postdata($post);
				?>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"
						title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				<?php
					endforeach;
				else :
				?>
				    <h2> Not Found</h2>
				<?php endif; ?>
				
				
				
			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

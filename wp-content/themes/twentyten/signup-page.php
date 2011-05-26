<?php
/**
 * Template Name: Sign Up
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
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
				<div> <!-- Registration -->
						<div id="register-form">
						<div class="title">
							
						</div>
							<form action="<?php echo site_url('wp-login.php?action=register', 'login_post') ?>" method="post">
					
							<label>Username<input type="text" name="user_login" value="" id="user_login" class="input" /></label><br/>
							
							<label>E-mail<input type="text" name="user_email" value="" id="user_email" class="input"  /></label>
								<?php do_action('register_form'); ?>
								<input type="submit" value="Register" id="register" />
					

							</form>
						</div>
				</div><!-- /Registration -->
			
				
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>

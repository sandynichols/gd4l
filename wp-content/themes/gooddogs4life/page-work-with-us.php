<?php
/**
 * The template for displaying work with us Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gooddogs4life
 */

get_header();
?>

<div class="container-fluid inside">
	<div class="row">
		<div class="col-xl-8">
			<div id="primary" class="content-area">		
					<main id="main" class="site-main">
						<?php
						while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'page' );

							// If comments are open or we have at least one comment, load up the comment template.
							if ( comments_open() || get_comments_number() ) :
								comments_template();
							endif;

						endwhile; // End of the loop.
						?>

					</main><!-- #main -->
			</div><!-- #primary -->
		</div>
		<div class="col-xl-4">
            <aside id="secondary" class="widget-area">
                <figure>
                    <a href="https://gooddogs4life.com/wp-content/uploads/2020/03/nico-scott-fb-profile-1536x1024.jpg" target="_blank"><img src="<?php echo site_url();?>/wp-content/uploads/2020/03/nico-scott-fb-profile-1536x1024.jpg" alt="Nico, Scott, and the Pack" /></a>
                    <figcaption>Scott, Nico, and the Pack</figcaption>
                </figure>  
                
                <figure>
                    <img src="<?php echo site_url();?>/wp-content/uploads/2020/03/PDT-Logo-Certified-2019-Purple-01-300x300.png" alt="We are Pro Dog Trainer Certified" />
                </figure>

            </aside>
		</div>
	</div><!--row-->
</div><!--container-->

<?php

get_footer();

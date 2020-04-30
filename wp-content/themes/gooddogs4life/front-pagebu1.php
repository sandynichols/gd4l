<?php
/**
 * The template for displaying front page
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gooddogs4life
 */

get_header();
?>

	<div id="primary" class="content-area">
        <div class="container-fluid">

        <div class="site-branding row no-gutters">
            <div class="col-2 col-lg-1">
                <?php
                the_custom_logo();
                ?>
            </div>
            <div class="col-10 col-lg-11 site-branding-text">
                <?php
                if ( is_front_page() && is_home() ) :
                    ?>
                    <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    <?php
                else :
                    ?>
                    <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                    <?php
                endif;
                $gooddogs4life_description = get_bloginfo( 'description', 'display' );
                if ( $gooddogs4life_description || is_customize_preview() ) :
                    ?>
                    <p class="site-description"><?php echo $gooddogs4life_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
                <?php endif; ?>
            </div>
        </div><!-- .site-branding -->
        

        
            <div class="row">
                <div class="col-lg-6 col-xl-8 hero">
                    <?php gooddogs4life_post_thumbnail(); ?>
                </div>
                <div class="col-lg-6 col-xl-4 gd4l_featured">					
                        <h2><a href="https://gooddogs4life.com/blog/sexier-than-a-squirrel/">Want to up your dog game?<a></h2>
                        <p>View our online videos to learn how YOU<br/>can become Sexier than a Squirrel!</p>
                        <a href="https://gooddogs4life.com/blog/sexier-than-a-squirrel/"><img src="https://gooddogs4life.com//wp-content/uploads/2020/03/banner.jpg" alt="sexier than a squirrel challenge" /></a>
                                              

                            <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 30" class="trapazoid">
                                <a href="https://gooddogs4life.com/blog/sexier-than-a-squirrel/">
                                    <polygon class="trapazoid" points="0 0 10 28 89 30 100 6 0 0"/>
                                    <text alignment-baseline="middle">
                                        25 Days of Video Tuition
                                    </text>
                                </a>
                            </svg>
                       
                            
                </div> 
            </div>
            <div class="row">      
		        <div class="col-xl-4 green-puppy cta">
                    <ul>
                        <li>Do you want to enrich the life of your dog?</li>
                        <li>Or mold your puppy to be socially acceptable?</li>
                        <li>Does your dog have some challenging behaviors?</li>
                    </ul>			
			            <div class="row ctarow">	
					        <div class="col-sm-8 col-lg-6">
						        <p>We are here to help make your dog ownership dreams come true. Together we can create an action plan that will get real results.</p>				
                            </div>
                            <div class="col-sm-4 col-lg-6">
						        <div class="btn"><a href="https://gooddogs4life.com/about-positive-dog-training/">POSITIVE<br/>Training</a></div>
                             </div>	
			            </div>
                </div>                         	
                <div class="col-xl-4 online-dog-training cta">
                    <h2 class="text-center">Online Dog Training</h2>  
                    <div class="includes">Includes the Challenge!</div>                
                    <p>We offer at home video training!<br/><br/>
                     Good dogs 4 Life want to help you stay uplifted during these challenging times.<br/><i>-Scott &amp; Nico</i></p>
                    <div class="row ctarow">
                        <div class="col-sm-6 offset-lg-3">                     
                            <div class="btn"><a href="https://gooddogs4life.com/online-dog-training/">Online Training<br/> LEARN MORE</a></div>                       
                        </div>
                        <div class="col-sm-6"></div>
                    </div>
                </div>
                <div class="col-xl-4 cta">
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
                    <div class="row ctarow">	
					        <div class="col-sm-6">
                               <div class="btn"><a href="https://gooddogs4life.com/work-with-us/">We Can Help<br/> LEARN HOW</a></div>
                            </div>
                        <div class="col-sm-6"></div>
                    </div>

                </div><!--off col-->
            </div><!--off row-->
        </div><!--off container-->        
	</div><!-- #primary -->

<?php
get_footer();

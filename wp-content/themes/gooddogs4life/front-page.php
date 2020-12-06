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
        <!--<div class="site-branding row no-gutters">         
                <?php
                //the_custom_logo();
                ?>
                     
                <a href="<?php //echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php //bloginfo( 'name' ); ?></a>                
        </div>  .site-branding -->
        

<div class="container-fluid homecontent">
    <div class="row">
        <div class="col-sm-12">
            <div class="container training-your-dog">
                <div class="col-md-9">
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
                        </div>
             
             
            </div>
        </div>
    </div>
</div>


<div class="container-fluid you-tube">
    <div class="row">
        <div class="col-sm-12">
           <div class="container online-dog-training">
                <div class="row">
                    <div class="col-sm-8 offset-sm-4 col-lg-7 offset-lg-5">
                        <h2 class="headinglarge">Certified Professional Dog Trainer</h2>
                        <p>We are Nico &amp; Scott, and Nico is a certified professional dog trainer. We have dedicated ourselves to helping dog owners become the confident pack leaders they want to be. By using our smart phones we can connect and begin your journey towards a more enjoyable relationship with your dog. Together we can create an action plan that will get real results.</p>
                        <a href="/work-with-us" title="What does dog training cost?" class="wp-block-button__link odt">What does<br/>dog training cost?</a>
                    </div>
                </div>      
            </div>

            <div class="row">
                    <div class="col-sm-12">
                    <a href="https://www.youtube.com/channel/UCe8NQFT0Qk26mWv3IYsC4XQ" title="visit our YouTube channel called Dog Life" target="_blank">
                        <div class="you-tube-channel">
                            <p>Visit our YouTube Channel:</p>
                            <h3 class="doglife">Dog Life</h3>
                            <img src="https://gooddogs4life.com/wp-content/uploads/2020/07/you-tube-channel.jpg" alt="visit our YouTube channel called Dog Life" />
                    </a>
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>

<div class="container faq-home">
    <div class="row">
        <div class="col-sm-12">
            <h2 >Frequently Asked Questions</h2>
                <dl>      
                        <dt>Does training your dog online actually work?</dt>
         
                        <dd >Yes! We have provided effective online dog training to many of our clients using a variety of online software such as Skype, Google Hangouts, Zoom, and more. Let us know what software you have so we can accommodate you.</dd>
                
                        <dt >What techniques do you use to provide the best dog training?</dt>
                                        
                        <dd >We believe in positive reinforcement dog training, which means not using choke collars, yelling, or other hazzardous methods.</dd>
                      
                        <dt >What does dog training cost?</dt>
                                       
                        <dd>At Good Dogs 4 Life, we charge $175 for your in-person dog training session (or $100 for online dog training session) that lasts 1 1/2 hours. That's enough time for us to get to know each other and start to understand your dog's problem behavior. After that, we continue to work together for $100 per hour (or $75 per hour for online training) to strengthen your dogs new behaviors.</dd>
                    
                </dl>                      
        </div>
    </div>
</div>




<div class="container-fluid testimonial">
    <div class="row">
        <div class="col-sm-12">
             <div class="container">
                <div class="row">
                    <div class="col-sm-12">           
                        <p>"Thank you again for coming over and working with us.  It was so helpful and fun!  I have been working a lot on the impulse control games and those are definitely helping.  His mat is a favorite place now too..."</p>
                        <p class="signature"> -Emily</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Does training your dog online actually work?","acceptedAnswer":{"@type":"Answer","text":"Yes! Good Dogs 4 Life has provided effective online dog training to many of our clients using a variety of online software such as Skype, Google Hangouts, Zoom, and more. Let us know what software you have so we can accommodate you."}},{"@type":"Question","name":"What techniques do you use to provide the best dog training?","acceptedAnswer":{"@type":"Answer","text":"Good Dogs 4 Life believes in positive reinforcement dog training, which means not using choke collars, yelling, or other hazzardous methods."}},{"@type":"Question","name":">What does dog training cost?","acceptedAnswer":{"@type":"Answer","text":"At Good Dogs 4 Life, we charge $100 for your initial session that lasts 1 1/2 hours. That's enough time for us to get to know each other and start to understand your dog's problem behavior. After that, we continue to work together for $60 per hour to strengthen your dogs new behaviors."}}]}</script><!--FAQPage Code Generated by https://saijogeorge.com/json-ld-schema-generator/faq/-->

    <div class="container-fluid puppy-green-large">
            <div class="row"> 
                <div class="col-md-6 offset-md-6">     
                    <h3 class="headinglarge">Do you want to enrich<br/> the life of your dog?</h3>
                    <p>Contact us today to start reforming your relationship with your dog.</p>
                    <?php echo do_shortcode('[contact-form-7 id="58" title="Contact form 1"]');?>
                </div>
            </div><!--off row-->
        </div><!--off container-->        
	</div><!-- #primary -->

<?php
get_footer();

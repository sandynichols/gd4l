<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gooddogs4life
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-162505032-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-162505032-1');
</script>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script data-ad-client="ca-pub-1076421942364345" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<script type="application/ld+json">
{ "@context" : "http://schema.org",
  "@type" : "Organization",
  "url" : "https://gooddogs4life.com",
  "contactPoint" : [
    { "@type" : "ContactPoint",
      "telephone" : "+1-678-522-4224",
      "contactType" : "customer service",
      "contactOption" : "TollFree",
      "areaServed" : "US"
    } ] }
</script>


<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'gooddogs4life' ); ?></a>

	<header id="masthead" class="site-header">
		<div class="container">
			<nav class="navbar navbar-expand-xl navbar-dark bg-primary">
				<!-- Brand and toggle button --> 					
				<a class="navbar-brand" href="<?php echo get_site_url(); ?>/"><img src="<?php echo get_site_url(); ?>/wp-content/uploads/2020/04/logo-white512.png" /><span>Good Dogs 4 Life</span></a>
			<span class="phone"><a href="tel:678-522-4224">678-522-4224</a></span>					
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span> <span class="toggler-text">MENU<span>
				</button>
				<!-- End -->
				<!-- Your website Links -->
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<?php
						wp_nav_menu( array(
						'menu'              => 'primary',
						'theme_location'    => 'header-menu',
						'depth'             => 2,
						'container'         => 'div',
						'container_class'   => '',
						'container_id'      => '',
						'menu_class'        => 'navbar-nav mr-auto',
						'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
						'walker'            => new wp_bootstrap_navwalker())
						);
					?>
				</div>
				<!-- End -->
			</nav>
		</div>


	</header><!-- #masthead -->


	<?php if ( is_front_page() ) :?>	
		<div id="content" class="site-content banner">			
			<img src="https://gooddogs4life.com/wp-content/uploads/2020/10/4-dogs-hero-couple-heart.jpg"  alt="Nico and Scott at Good Dogs 4 Life Dog Training" />

		<div class="container-fluid bannertext">
			<div class="row">
				<div class="col-sm">
					<p class="slogan1">GOOD<br/>DOGS</br/>4 LIFE</p>
					<p class="slogan2">Dog Training<br/><span>IN ATLANTA or ONLINE</span></P>		
				</div>
			</div>
		</div>	

	<?php else :?>		
		<div id="content" class="site-content">	
	<?php endif;?>
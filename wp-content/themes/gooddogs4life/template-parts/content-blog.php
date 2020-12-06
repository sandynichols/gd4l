<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gooddogs4life
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >


    <?php //gooddogs4life_post_thumbnail('thumbnail'); ?>
    <?php if ( has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" alt="<?php the_title_attribute(); ?>">
        <?php the_post_thumbnail('medium'); ?>
        </a>
    <?php endif; ?>

	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title h4"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta tiny">
				<?php
				gooddogs4life_posted_on();
				gooddogs4life_posted_by();
				?>
			</div> 
		<?php endif; ?>
    </header><!-- .entry-header -->
    
    <div class="entry-content">
		<?php
		the_excerpt(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gooddogs4life' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gooddogs4life' ),
				'after'  => '</div>',
			)
		);
		?>
    </div><!-- .entry-content -->


	<footer class="entry-footer tiny">
		<?php gooddogs4life_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    
</article><!-- #post-<?php the_ID(); ?> -->
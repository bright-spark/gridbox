<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Gridbox
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header">

		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

	</header><!-- .entry-header -->

	<?php gridbox_post_image_single(); ?>

	<div class="entry-content clearfix">

		<?php the_content(); ?>

		<?php wp_link_pages( array(
			'before' => '<div class="page-links"><p>' . esc_html__( 'Pages:', 'gridbox' ),
			'after'  => '</p></div>',
		) ); ?>

	</div><!-- .entry-content -->

</article>

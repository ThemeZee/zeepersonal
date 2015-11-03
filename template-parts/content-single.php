<?php
/**
 * The template for displaying single posts
 *
 * @package zeePersonal
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<?php zeepersonal_post_image_single(); ?>
		
		<header class="entry-header">
			
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			
			<?php zeepersonal_entry_meta(); ?>

		</header><!-- .entry-header -->

		<div class="entry-content clearfix">
			<?php the_content(); ?>
			<!-- <?php trackback_rdf(); ?> -->
			<div class="page-links"><?php wp_link_pages(); ?></div>
		</div><!-- .entry-content -->
		
		<footer class="entry-footer">
			
			<?php zeepersonal_entry_tags(); ?>
			
			<?php zeepersonal_entry_footer(); ?>
			
		</footer><!-- .entry-footer -->
		
		<?php the_post_navigation( array( 'prev_text' => '&laquo; %title', 'next_text' => '%title &raquo;' ) ); ?>

	</article>
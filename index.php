<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package BadSchtroumpfies
 * @since Alles Thema 1.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'nav' ); ?>

</header>

	<div class="uk-section">
		<div class="uk-container">

			<?php get_template_part( 'template-parts/content', 'content' ); ?>

		</div><!-- .uk-container -->
	</div><!-- .uk-section -->

<?php get_footer(); ?>

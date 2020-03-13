<?php
/*
  The single post template file.
*/

get_header(); ?>

<?php get_template_part( 'template-parts/content', 'hero' ); ?>

	<section class="bs-content">
		<div class="uk-container">

			<?php get_template_part( 'template-parts/content', 'content' ); ?>

		</div><!-- .uk-container -->
	</section>

	<?php if( is_singular('producties') ) { ?>

  	<!-- VIDEO CONTENT, VIMEO OR YOUTUBE -->
  	<?php if( get_field( 'id_vimeo' ) || get_field( 'id_youtube' ) ):  ?>

    	<div class="bs-video-container">

      <?php if( get_field( 'id_vimeo' ) ) { ?>

        <iframe src="https://player.vimeo.com/video/<?php the_field('id_vimeo'); ?>?autoplay=0&title=0&byline=0&portrait=0" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

			<script src="https://player.vimeo.com/api/player.js"></script>

      <?php } elseif( get_field( 'id_youtube' ) ) { ?>

				<iframe width="560" height="315" src="https://www.youtube-nocookie.com/embed/<?php the_field( 'id_youtube' ); ?>?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <?php } else {

      	// DO NOTHING

      } ?>

  	<?php endif; ?>
		</div>

  	<?php get_template_part( 'template-parts/content', 'playlist' ); ?>

  	<?php get_template_part( 'template-parts/content', 'gallery' ); ?>

		<?php get_template_part( 'template-parts/content', 'group' ); ?>

		<?php get_template_part( 'template-parts/content', 'totop' );

		// SWITCH TO "GROEPEN"
		} elseif( is_singular('groepen') ) { ?>

			<div class="uk-section uk-section-muted">
				<div class="uk-container">

					<h2 class="uk-text-bold uk-heading-primary"><?php the_field( 'groep' ); ?><span class="bs-color-red"> | Producties</span></h2>

						<?php
						$loop = new WP_Query( array(
						  'post_type' => 'producties',
						  'category_name' => __(get_field('groep'))
						  ) );
						  if( $loop->have_posts() ): ?>

							<div class="uk-child-width-1-2 uk-child-width-1-4@m" uk-grid>

								<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

									<a href="<?php the_permalink(); ?>">
										<h4><?php the_title(); ?></h4>
										<?php the_post_thumbnail('medium'); ?>
									</a>
								<?php endwhile; wp_reset_query(); ?>

							</div>

						  <?php endif;
						 ?>

				</div>
			</div>

			<div class="uk-section">
			  <div class="uk-container">
			    <?php get_template_part( 'template-parts/content', 'prev-next' ); ?>
			  </div>
			</div>


	<?php } ?>


<?php get_footer(); ?>

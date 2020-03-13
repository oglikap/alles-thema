<?php
/*
The template part for displaying a hero section with background-picture
*/ ?>

<div class="bs-hero">

  <div class="bs-hero__bg" style="background-image: linear-gradient(to bottom, transparent, rgba(0, 0, 0, .6) ), url(<?php the_field('bg'); ?>);">

      <?php
      if( is_singular( 'producties' ) ) {

        get_template_part( 'template-parts/hero/content', 'productions' );

      } elseif( is_page( 'over-ons' ) ) {

        get_template_part( 'template-parts/hero/content', 'over' );

      } elseif( is_singular( 'groepen' ) ) {

        get_template_part( 'template-parts/hero/content', 'groepen' );

      } ?>

    <!-- </div> -->

  </div>

</div>

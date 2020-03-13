<?php
/*
  The template part for displaying any hero section
*/
?>

<!-- PARENT: <header> -->
  <div class="uk-section uk-padding-remove-top uk-padding-remove-bottom">

    <!-- get the NAVIGATION template -->
    <?php get_template_part( 'template-parts/content', 'nav' ); ?>

    <?php if( !get_field('bg') ) {

      get_template_part('template-parts/hero/content', 'no-bg' );

    } elseif( get_field('bg') ) { ?>

        <div uk-height-viewport="offset-top: true; offset-bottom: 17.5" class="bs-hero uk-background-cover uk-background-norepeat"
        style="background: url(<?php the_field('bg'); ?>) 50% 25% no-repeat; background-size: cover;">

          <div class="" uk-height-viewport="offset-top: true; offset-bottom: 17.5" style="background: rgba(0, 0, 0, .35);">

            <?php if( get_field('groep') ): ?>
              <h1 class="uk-padding-large uk-text-center uk-heading-hero uk-light bs-header-title"><?php the_field('groep'); ?></h1>
            <?php endif; ?>

          </div>
          <?php wp_nav_menu( array(
            'theme_location' => 'allesvdk-productions-menu',
            'container' => 'ul',
            'menu_class' => 'bs-productions-menu uk-light uk-position-bottom'
          ) );
           ?>

        </div>
      <?php } else { ?>

          <h1 class="uk-text-center uk-heading-primary bs-header-title"><?php the_title(); ?></h1>

        <?php } ?>
    <!-- </div> -->
  </div>

</header>

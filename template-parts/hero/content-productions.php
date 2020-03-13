<?php if( get_field('groep') ): ?>
  <div class="bs-hero__heading uk-light">
    <div class="bs-header-primary">
      <h1><?php the_field('groep'); ?></h1>
    </div>
  </div>
  <?php endif; ?>

  <?php wp_nav_menu( array(
    'theme_location' => 'allesvdk-productions-menu',
    'container' => 'ul',
    'menu_class' => 'bs-hero__list'
  ) );
   ?>

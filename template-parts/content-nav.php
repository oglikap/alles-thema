<?php
/* The template part for displaying the navigation menu */
 ?>

<div class="bs-wrapper">

  <div class="bs-branding">
    <div class="bs-branding__box">
      <a href="#" uk-scroll class="bs-branding__link">
        <span class="bs-branding__site-title">
          Alles v<span class="bs-font-red">oo</span>r de Kunsten
        </span>
      </a>
    </div>
  </div>

  <header class="bs-header">

    <div class="uk-container bs-tiles__container">
      <nav class="bs-nav-section">

        <!-- LOGO -->
        <div class="bs-logo">
          <div class="bs-logo__logo-box">
            <figure class="bs-logo__logo">
              <?php the_custom_logo(); ?>
            </figure>
          </div>
        </div>

        <!-- Display navigation -->
        <div class="bs-navigation">

          <?php wp_nav_menu( array(
            'theme_location' => 'allesvdk-menu',
            'container' => 'ul',
            'menu_class' => 'bs-navigation__menu' ) ); ?>

        </div>

      </nav>
    </div>


  </header>

<!-- <div class="bs-hero-no-bg">
  <div class="uk-container">
    <div class="bs-header-primary uk-text-center"> -->

    <?php
    if( is_front_page() ) { ?>

      <h1>A<span class="bs-font-red">ll</span>es voor de Kunsten</h1>

    <?php }

    elseif( is_page('groepen-overzicht') ) { ?>

      <h1>G<span class="bs-font-red">ro</span>epen</h1>

    <?php }

    else { ?>

      <!-- <h1><//?php the_title(); ?></h1> -->

    <?php } ?>
<!--
  </div>
  <hr class="uk-divider-small uk-text-center">

</div> -->

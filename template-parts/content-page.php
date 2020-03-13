<?php // CONTENT TEMPLATE FOR PAGES ?>

<div class="bs-tiles">
  <div class="bs-tiles__container uk-container">

   <?php if( is_page('makers') ) {

     get_template_part( 'template-parts/groepen/content', 'groepen' );

   } elseif ( is_page('producties') ) {

     get_template_part( 'template-parts/groepen/content', 'producties' );

   }  elseif ( is_page('over-ons') ) {

     get_template_part( 'template-parts/content', 'about' );

   } elseif( is_page('archief') ) {

     get_template_part( 'template-parts/content', 'archive' );

   } else {

     while ( have_posts() ) : the_post();
        the_content();
     endwhile;

   }


    ?>

  </div>
</div>

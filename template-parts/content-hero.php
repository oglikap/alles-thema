<?php
/*
  The template part for displaying any hero section
*/

  // PARENT: <header>

  // get the NAVIGATION template
  get_template_part( 'template-parts/content', 'nav' );

  // Conditional to decide whether the hero-section displays a background-picture or just the title of the page. Depends on the 'bg' custom field.

  if (get_field('bg')) {
    get_template_part('template-parts/hero/content', 'bg');
  }
  // else {
  //   get_template_part('template-parts/hero/content', 'no-bg' );
  // }

  ?>

</header>

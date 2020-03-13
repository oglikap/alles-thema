<?php $images = get_field('gallery');
  if( $images ) { ?>

    <div class="uk-section uk-section-large uk-padding uk-section-muted">
      <div class="uk-container">
        <div class="uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m uk-child-width-1-5@l uk-grid-small" uk-grid="masonry:true" uk-lightbox>

          <?php foreach ($images as $image) { ?>

              <div>
                <a href="<?php echo $image['url']; ?>">
                  <img class="uk-box-shadow-large" src="<?php echo $image['sizes']['medium']; ?>" alt="">
                </a>
              </div>

          <?php } ?>

        </div>

      </div>
    </div>


    <?php

  }
 ?>

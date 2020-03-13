<?php
if( get_field( 'id' ) ):
  $options = array(
    'tour' => get_field( 'id' ),
    'limit' => 5
  ); ?>
  <div class="uk-section bs-agenda-container">
    <div class="uk-container">

      <h3>Speellijst</h3>
        <?php
        echo gigpress_shows( $options ); ?>
      <p class="bs-agenda"><a href="<?php echo get_page_link('148'); ?>">Meer</a></p>
    </div>
  </div>
<?php endif; ?>

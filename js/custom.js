(function($) {

  // var $quote = jQuery("h1.bs-header-title");
  //
  // var $numWords = $quote.text().split(" ").length;
  //
  // if ($numWords > 2) {
  //   $quote.css("font-size", "8em");
  // }
  // if (($numWords >= 1) && ($numWords < 2)) {
  //     $quote.css("font-size", "8.5em");
  // }
  // else if (($numWords >= 2) && ($numWords < 5)) {
  //     $quote.css("font-size", "6.5em");
  // }
  // else if (($numWords >= 5) && ($numWords < 7)) {
  //     $quote.css("font-size", "4.5em");
  // }
  // /*else if (($numWords >= 7) && ($numWords < 9)) {
  //     $quote.css("font-size", "4em");
  // }*/
  // else {
  //     $quote.css("font-size", "4em");
  // }

  $(".bs-resume-header-frame").hover( function() {
    $(".bs-resume-header", this).fadeToggle('slow');
  });

})( jQuery );


// console.log('poepie');

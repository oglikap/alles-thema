<?php

// This template displays prior to shows in our shows listing that are part of a tour.
// If several shows eblonging to the same tour are displayed in sequence,
// this template only displays before the first show.
// By default, all shows within a tour have the 'gigpress-tour' class applied to their row as well
// (so that you can visually group them).

?>

<div>
	<h4>
		<span class="gigpress-heading">
			<?php if(isset($gpo['tour_label']) && !empty($gpo['tour_label'])) echo $showdata['tour']; ?>
		</span>
	</h4>
</div>

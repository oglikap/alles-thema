<?php
/*

	This template displays all of our individual show data in the main shows listing (upcoming and past).

	If you're curious what all variables are available in the $showdata array, have a look at the docs: http://gigpress.com/docs/
*/
?>

<!-- <tbody> -->

	<ul class="bs-agenda bs-single-tiles__agenda-list">

		<li class="gigpress-date"><?php echo $showdata['date_long']; ?>
			<?php if($showdata['end_date_long']) : ?> - <?php echo $showdata['end_date_long']; ?><?php endif; ?></li>

			<?php if((!$artist && $group_artists == 'no') && $total_artists > 1) : ?>
				<span class="gigpress-artist">
					<?php echo $showdata['artist']; ?>
				</span>
			<?php endif; ?>
			<span class="gigpress-venue bs-single-tiles__agenda-venue"><?php echo $showdata['venue']; ?>, </span>
			<span class="gigpress-city"><?php echo $showdata['city']; if(!empty($showdata['state'])) echo ', '.$showdata['state']; ?> / </span>
			<?php if(!empty($gpo['display_country'])) : ?>
				<span class="gigpress-country"><?php echo $showdata['country']; ?> / </span>
			<?php endif; ?>
			<?php if($showdata['time']) : ?>
				<span class="gigpress-info-item"><span class="gigpress-info-label uk-text-small"></span><span uk-icon="icon: clock; ratio: .75"></span> <?php echo $showdata['time']; ?> / </span>
			<?php endif; ?>

			<?php if($showdata['notes']) : ?>
				<span class="gigpress-info-item"><?php echo $showdata['notes']; ?> / </span>
			<?php endif; ?>
			<?php if($showdata['ticket_link']) : ?>
				<span><?php echo $showdata['ticket_link']; ?></span>
			<?php endif; ?>

			<span class="gigpress-links-cell">
				<?php
				// Only show these links if this show is in the future
				if($scope != 'past') : ?>
				<div class="gigpress-calendar-add">
					<a class="gigpress-links-toggle" href="#calendar-links-<?php echo $showdata['id']; ?>">Add</a>
					<div class="gigpress-calendar-links" id="calendar-links-<?php echo $showdata['id']; ?>">
						<div class="gigpress-calendar-links-inner">
							<span><?php echo $showdata['gcal']; ?></span>
							<span><?php echo $showdata['ical']; ?></span>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</span>

	</ul>

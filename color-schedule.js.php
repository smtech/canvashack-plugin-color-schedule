<?php

require_once('common.inc.php');

use smtech\StMarksColors as sm;

$colorSchedule = 1530;
	
?>

var canvashack = {
	
	colorBlockEach: function(i,e) {
		var color = {
			'red': '#<?= sm::get(sm::RED_BLOCK)->light()->value() ?>',
			'orange': '#<?= sm::get(sm::ORANGE_BLOCK)->light()->value() ?>',
			'yellow': '#<?= sm::get(sm::YELLOW_BLOCK)->light()->value() ?>',
			'green': '#<?= sm::get(sm::GREEN_BLOCK)->light()->value() ?>',
			'blue': '#<?= sm::get(sm::BLUE_BLOCK)->light()->value() ?>',
			'plum': '#<?= sm::get(sm::PLUM_BLOCK)->light()->value() ?>',
			'brown': '#<?= sm::get(sm::BROWN_BLOCK)->light()->value() ?>'
		};
		
		var block = $(e).find('.fc-title').text().toLowerCase().substring(13);
		
		if (block in color) {
			$(e).css('color', color[block]);
			$(e).css('border-left-color', color[block]);
			$(e).css('border-right-color', color[block]);
			$(e).css('border-top-color', color[block]);
			$(e).css('border-bottom-color', color[block]);
		} /* else use whatever the default color of the color block schedule is... */
	},
	
	colorBlock: function() {
		$('.fc-event.group_course_<?= $colorSchedule ?>').each(this.colorBlockEach);
	}
};

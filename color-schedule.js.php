<?php

require_once('common.inc.php');

use smtech\StMarksColors as sm;

$colorSchedule = 1530;
	
?>

var canvashack = {
	color: {
		'red': '#<?= sm::get(sm::RED_BLOCK)->light()->value() ?>',
		'orange': '#<?= sm::get(sm::ORANGE_BLOCK)->light()->value() ?>',
		'yellow': '#<?= sm::get(sm::YELLOW_BLOCK)->light()->value() ?>',
		'green': '#<?= sm::get(sm::GREEN_BLOCK)->light()->value() ?>',
		'blue': '#<?= sm::get(sm::BLUE_BLOCK)->light()->value() ?>',
		'plum': '#<?= sm::get(sm::PLUM_BLOCK)->light()->value() ?>',
		'brown': '#<?= sm::get(sm::BROWN_BLOCK)->light()->value() ?>'
	},
	
	colorize: function() {
		$('.fc-event.group_course_<?= $colorSchedule ?>').each(function(i,e) {
			var block = $(e).find('.fc-title').text().toLowerCase().substring(13);
			if (block in canvashack.color) {
				$(e).css('color', canvashack.color[block]);
				$(e).css('border-left-color', canvashack.color[block]);
				$(e).css('border-right-color', canvashack.color[block]);
				$(e).css('border-top-color', canvashack.color[block]);
				$(e).css('border-bottom-color', canvashack.color[block]);
			} else {
				$(e).css('color', 'lightgray');
				$(e).css('border-left-color', 'lightgray');
				$(e).css('border-right-color', 'lightgray');
				$(e).css('border-top-color', 'lightgray');
				$(e).css('border-bottom-color', 'lightgray');
			}
		});
	}
};

<?php

require_once(__DIR__ . '/common.inc.php');

use smtech\StMarksColors as sm;
	
?>

var canvashack = {
	
	colorSchedule: function() {
		$(document).on('DOMNodeInserted', function(_event) {
			var e = _event.target;
			var events = $(e).find('.fc-event.group_course_<?= $pluginMetadata['color_schedule'] ?>');
			if (events.length > 0) {
				$(events).each(function(i,e) {
					var color = {
						'red': '#<?= sm::get(sm::RED_BLOCK)->dark()->value() ?>',
						'orange': '#<?= sm::get(sm::ORANGE_BLOCK)->dark()->value() ?>',
						'yellow': '#<?= sm::get(sm::YELLOW_BLOCK)->dark()->value() ?>',
						'green': '#<?= sm::get(sm::GREEN_BLOCK)->dark()->value() ?>',
						'blue': '#<?= sm::get(sm::BLUE_BLOCK)->dark()->value() ?>',
						'plum': '#<?= sm::get(sm::PLUM_BLOCK)->dark()->value() ?>',
						'brown': '#<?= sm::get(sm::BROWN_BLOCK)->dark()->value() ?>'
					};
					
					var block = $(e).find('.fc-title').text().toLowerCase().substring(13);
					
					if (block in color) {
						$(e).css('color', color[block]);
						$(e).css('border-left-color', color[block]);
						$(e).css('border-right-color', color[block]);
						$(e).css('border-top-color', color[block]);
						$(e).css('border-bottom-color', color[block]);
					} /* else use whatever the default color of the color block schedule is... */
				});
			}
		});
	}
};

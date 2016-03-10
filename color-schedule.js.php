<?php

require_once __DIR__ . '/common.inc.php';

?>

var canvashack = {
	
	colorSchedule: function() {
		$(document).on('DOMNodeInserted', function(_event) {
			var e = _event.target;
			var events = $(e).find('.fc-event.group_course_<?= $pluginMetadata['color_schedule'] ?>');
			var agenda = $(e).find('.ig-title.group_course_<?= $pluginMetadata['color_schedule'] ?>');
			if (events.length > 0) {
				$(events).each(function(i, e) {
					var block = $(e).find('.fc-title').text().toLowerCase().substring(13).replace(/ /, '-');
					if (block != 'red' && block != 'orange' && block != 'yellow' && block != 'green' && block != 'blue' && block != 'plum' && block != 'brown') {
						block = 'default';
					}
					$(e).addClass('stmarks-' + block + '-event');
				});
			} else if (agenda.length > 0) {
				$(agenda).each(function(i, e) {
					var block = $(e).text().toLowerCase().trim().replace(/\s+/g,'-').substring(7);
					if (block != 'red' && block != 'orange' && block != 'yellow' && block != 'green' && block != 'blue' && block != 'plum' && block != 'brown') {
						block = 'default';
					}
					$(e).addClass('stmarks-' + block + '-agenda');
				});
			}
		});
	}
};

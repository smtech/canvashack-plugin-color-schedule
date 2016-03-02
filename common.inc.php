<?php

require_once __DIR__ . '/../common.inc.php';

if (file_exists(__DIR__ . '/manifest.xml')) {
	$manifest = simplexml_load_string(file_get_contents(__DIR__ . '/manifest.xml'));
}

// FIXME if the manifest can't be loaded, this won't work either
$pluginMetadata = new Battis\AppMetadata($sql, (string) $manifest->id);
$pluginMetadata['color_schedule'] = 1530;

?>
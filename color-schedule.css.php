<?php

require_once(__DIR__ . '/common.inc.php');

use smtech\StMarksColors as sm;

foreach(sm::all() as $color) {
	$color = strtolower($color);
	echo "

.stmarks-$color-event {
	color: " . sm::get($color)->dark()->hex() . " !important;
	background-color: " . sm::get($color)->light()->hex() . " !important;
	border-color: " . sm::get($color)->dark()->hex() . " !important;
}

.stmarks-$color-agenda {
	color: " . sm::get($color)->dark()->hex() . " !important;
}
	
	";
}

$color = '#999';
$background = '#efefef';
	
?>

.stmarks-default-event {
	color: <?= $color ?> !important;
	background-color: <?= $background ?> !important;
	border-color: <?= $color ?> !important;
}

.stmarks-default-agenda {
	color: <?= $color ?> !important;
}
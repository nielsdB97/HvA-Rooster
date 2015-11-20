<?php
	require 'class.iCalReader.php';
	
	$ical = new ICal('originals/' . $_GET['klas'] . '.ics');
	$events = $ical->events();

	$classes = array();
	foreach($events as $event) {
		if(!in_array($event['SUMMARY'], $classes, true)){
			array_push($classes, $event['SUMMARY']);
		};
	};

	sort($classes);
	
	$counter = 0;
	foreach($classes as $class) {
		echo '<label><input type="checkbox" name="vak" value="' . $class . '" />' . $class . '</label>';
		$counter++;
	};
?>
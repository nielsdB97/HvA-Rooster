<?php
	require 'class.iCalReader.php';
	
	$klas = $_GET['klas'];
	
	echo 'Klas: ' . $klas . '<br />';
	
	$ical = new ICal('originals/' . $klas . '.ics');
	$events = $ical->events();
	
	$ids = explode(',', $_GET['id']);
	
	$classes = array();
	foreach($events as $event) {
		if(!in_array($event['SUMMARY'], $classes, true)){
			array_push($classes, $event['SUMMARY']);
		};
	};
	
	sort($classes);
	
	foreach($ids as $id) {
		foreach($events as $event) {
			if($event['SUMMARY'] == $classes[$id]){
				echo  '<br />' . $event['SUMMARY'];
			}
		}
	}
?>
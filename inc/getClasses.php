<?php
require '../class.iCalReader.php';

// Alles wat gereturned wordt naar javascript
$return = array();

foreach ($_POST['klas'] as $key => $klas) {
	$cleanKlas = '';
	if (strpos($klas, '-') !== false)
		$cleanKlas = str_replace('-', '', $klas);
	else if (strpos($klas, '%20') !== false)
		$cleanKlas = str_replace('%20', '', $klas);

	// Maak voor elke geselecteerde klas een key met array (checkboxes)
	$return[$cleanKlas] = array('checkboxes' => array());

	$ical = new ICal('../originals/'.$klas.'.ics');
	$events = $ical->events();

	// Renamed $classes naar $vakken voor de duidelijkheid
	$vakken = array();
	foreach ($events as $event) {
		if (!in_array($event['SUMMARY'], $vakken, true))
			array_push($vakken, $event['SUMMARY']);
	}

	sort($vakken);

	$counter = 0;
	foreach ($vakken as $vak) {
		$return[$cleanKlas]['checkboxes'][] = '<label><input type="checkbox" name="'.$cleanKlas.'-'.$counter.'" class="'.$cleanKlas.'" value="'.$cleanKlas.'-'.$counter.'" />'.$cleanKlas.': '.$vak.'</label>';
		$counter++;
	}
}

echo json_encode($return);
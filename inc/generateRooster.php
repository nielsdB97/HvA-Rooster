BEGIN:VCALENDAR
PRODID:-//Eveoh//Eveoh iCalExporter 1.3//EN
VERSION:2.0
METHOD:PUBLISH
CALSCALE:GREGORIAN
X-WR-TIMEZONE:Europe/Amsterdam
X-WR-CALNAME:Rijks custom rooster
X-WR-CALDESC:Rijks custom rooster
BEGIN:VTIMEZONE
TZID:Europe/Amsterdam
TZURL:http://tzurl.org/zoneinfo-outlook/Europe/Amsterdam
X-LIC-LOCATION:Europe/Amsterdam
BEGIN:DAYLIGHT
TZOFFSETFROM:+0100
TZOFFSETTO:+0200
TZNAME:CEST
DTSTART:19700329T020000
RRULE:FREQ=YEARLY;BYMONTH=3;BYDAY=-1SU
END:DAYLIGHT
BEGIN:STANDARD
TZOFFSETFROM:+0200
TZOFFSETTO:+0100
TZNAME:CET
DTSTART:19701025T030000
RRULE:FREQ=YEARLY;BYMONTH=10;BYDAY=-1SU
END:STANDARD
END:VTIMEZONE

<?php
require '../class.iCalReader.php';

foreach ($_GET['ids'] as $klas => $ids) {
	// Plaats de speciale karakters terug om het goede bestand te laden $ical
	$dirtyKlas = '';
	if (substr($klas, 0, 2) == 'V1')
		$dirtyKlas = str_replace('V1', 'V1-', $klas);
	else if (substr($klas, 0, 3) == 'P01')
		$dirtyKlas = str_replace('P01', 'P01%20', $klas);

	$ical = new ICal('../originals/' . $dirtyKlas . '.ics');
	$events = $ical->events();

	$vakken = array();
	foreach ($events as $event) {
		if (!in_array($event['SUMMARY'], $vakken, true))
			array_push($vakken, $event['SUMMARY']);
	}

	sort($vakken);

	// De name van checkboxes is KLAS-ID bijv: V0112-35; split op de - en vul array met 'schone' ids
	$cleanIDs = array();
	foreach ($ids as $id) {
		$split = explode('-', $id);
		$cleanIDs[] = $split[1];
	}

	foreach ($cleanIDs as $id) {
		foreach ($events as $event) {
			if ($event['SUMMARY'] == $vakken[$id]){
				echo "\nBEGIN:VEVENT";
				echo "\nDTSTAMP:20151115T154003Z";
				echo "\nDTSTART;TZID=Europe/Amsterdam:" . $event['DTSTART'];
				echo "\nDTEND;TZID=Europe/Amsterdam:" . $event['DTEND'];
				echo "\nSUMMARY:" . $event['SUMMARY'];
				echo "\nLOCATION:" . $event['LOCATION'];
				echo "\nTRANSP:OPAQUE";
				echo "\nSTATUS:CONFIRMED";
				echo "\nSEQUENCE:0";
				echo "\nCREATED:20151115T154003Z";
				echo "\nLAST-MODIFIED:20151115T154003Z";
				echo "\nUID:" . $event['UID'];
				echo "\nDESCRIPTION:" . $event['DESCRIPTION'];
				echo "\nEND:VEVENT";
			}
		}
	}
}

echo "\nEND:VCALENDAR";
?>
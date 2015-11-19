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
	require 'class.iCalReader.php';
	
	$ical = new ICal('originals/' . $_GET['klas'] . '.ics');
	$events = $ical->events();
	
	$ids_encoded = explode(',', $_GET['id']);
	$ids = array();
	foreach($ids_encoded as $id_encoded) {
		array_push($ids, urldecode($id_encoded));
	}
	
	foreach($ids as $id){
		foreach($events as $event){
			if($event['SUMMARY'] == $id){
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
	echo "\nEND:VCALENDAR";
?>
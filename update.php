<?php	

	/*
	* Cron Job: @daily
	*/

	$urls = [
		'http://rooster.hva.nl/ical?564b2134&timetable=2015!studentset!DMCI_P01%20ROZE',
		'http://rooster.hva.nl/ical?5648f34e&timetable=2015!studentset!DMCI_V1-01',
		'http://rooster.hva.nl/ical?5648f359&timetable=2015!studentset!DMCI_V1-02',
		'http://rooster.hva.nl/ical?5648f365&timetable=2015!studentset!DMCI_V1-03',
		'http://rooster.hva.nl/ical?5648f36e&timetable=2015!studentset!DMCI_V1-04',
		'http://rooster.hva.nl/ical?5648f377&timetable=2015!studentset!DMCI_V1-05',
		'http://rooster.hva.nl/ical?5648f380&timetable=2015!studentset!DMCI_V1-06',
		'http://rooster.hva.nl/ical?5648f38d&timetable=2015!studentset!DMCI_V1-07',
		'http://rooster.hva.nl/ical?5648f396&timetable=2015!studentset!DMCI_V1-08',
		'http://rooster.hva.nl/ical?5648f3a0&timetable=2015!studentset!DMCI_V1-09',
		'http://rooster.hva.nl/ical?5648f3a7&timetable=2015!studentset!DMCI_V1-10',
		'http://rooster.hva.nl/ical?5648f3ae&timetable=2015!studentset!DMCI_V1-11',
		'http://rooster.hva.nl/ical?5648f3b4&timetable=2015!studentset!DMCI_V1-12'
	];
	
	foreach($urls as $url) {
		$newfile = $_SERVER['DOCUMENT_ROOT'] . '/hvarooster/originals/' . substr($url, -5) . '.ics';

		if(copy ($url, $newfile)) {
			echo 'Copy Succes!<br/>';
		} else {
			echo 'Copy failed!<br/>';
		}
	}

	
?>
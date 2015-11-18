<?php	

	/*
	* Cron Job: @daily
	*/

	$urls = [
		'http://rooster.hva.nl/ical?564b2134&timetable=2015!studentset!DMCI_P01%20ROZE',
		'http://rooster.hva.nl/ical?564ba754&timetable=2015!studentset!DMCI_P02%20LILA',
		'http://rooster.hva.nl/ical?564ba79b&timetable=2015!studentset!DMCI_P03%20PAARS',
		'http://rooster.hva.nl/ical?564ba7be&timetable=2015!studentset!DMCI_P05%20KORAAL',
		'http://rooster.hva.nl/ical?564ba7e4&timetable=2015!studentset!DMCI_P06%20STEEN',
		'http://rooster.hva.nl/ical?564ba809&timetable=2015!studentset!DMCI_P07%20MINT',
		'http://rooster.hva.nl/ical?564ba824&timetable=2015!studentset!DMCI_P08%20ZEE',
		'http://rooster.hva.nl/ical?564ba841&timetable=2015!studentset!DMCI_P09%20SMARAGD',
		'http://rooster.hva.nl/ical?564ba85b&timetable=2015!studentset!DMCI_P10%20JADE',
		'http://rooster.hva.nl/ical?564ba87e&timetable=2015!studentset!DMCI_P11%20BRILJANT',
		'http://rooster.hva.nl/ical?564ba8a3&timetable=2015!studentset!DMCI_P12%20LIME',
		'http://rooster.hva.nl/ical?564ba8b7&timetable=2015!studentset!DMCI_P13%20MARINE',
		'http://rooster.hva.nl/ical?564ba8c9&timetable=2015!studentset!DMCI_P14%20KOBALT',
		'http://rooster.hva.nl/ical?564ba8ee&timetable=2015!studentset!DMCI_P16%20STAAL',
		'http://rooster.hva.nl/ical?564ba901&timetable=2015!studentset!DMCI_P17%20CYAAN',
		'http://rooster.hva.nl/ical?564ba915&timetable=2015!studentset!DMCI_P18%20AQUA',
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
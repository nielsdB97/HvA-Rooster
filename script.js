document.addEventListener("DOMContentLoaded", function() {
	document.querySelector('[name=ios]').addEventListener('click', function() {
		var checks = document.querySelectorAll('input[type="checkbox"]:checked');
		var klas = document.querySelector('select').value;
		var ids = [];
		for(i=0; i<checks.length; i++) {
			ids.push(checks[i].value);
		}
		
		window.open('webcal://rijks.website/hvarooster/rooster.php?klas=' + klas + '&id=' + ids.join(), '_blank');
	});
	
	document.querySelector('[name=google]').addEventListener('click', function() {
		var checks = document.querySelectorAll('input[type="checkbox"]:checked');
		var klas = document.querySelector('select').value;
		var ids = [];
		for(i=0; i<checks.length; i++) {
			ids.push(checks[i].value);
		}
		
		window.prompt("Kopieer deze url en plak 'm in je Google Calender. http://visihow.com/Use_webcal_url_to_add_a_calendar_to_google_calendar", 'webcal://rijks.website/hvarooster/rooster.php?klas=' + klas + '&id=' + ids.join(), '_blank');
	});
	
});
document.addEventListener("DOMContentLoaded", function() {
	document.querySelector('[name=klas]').addEventListener('change', function() {
		doAjaxRequest(document.querySelector('[name=klas]').value);
	});
	
	document.querySelector('[name=ios]').addEventListener('click', function() {
		var checks = document.querySelectorAll('input[type="checkbox"]:checked');
		var klas = document.querySelector('select').value;
		var ids = [];
		for(i=0; i<checks.length; i++) {
			ids.push(checks[i].value);
		}
		
		window.open('webcal://rijks.website/hvarooster/rooster_V1.5.php?klas=' + klas + '&id=' + ids.join(), '_blank');
	});
	
	document.querySelector('[name=google]').addEventListener('click', function() {
		var checks = document.querySelectorAll('input[type="checkbox"]:checked');
		var klas = document.querySelector('select').value;
		var ids = [];
		for(i=0; i<checks.length; i++) {
			ids.push(checks[i].value);
		}
		
		window.prompt("Kopieer deze url en plak 'm in je Google Calender.", 'webcal://rijks.website/hvarooster/rooster_V1.5.php?klas=' + klas + '&id=' + ids.join(), '_blank');
	});
	
	function doAjaxRequest(klas){
		var request = new XMLHttpRequest();
		
		request.onload = ajaxSucces;
		request.open('GET', 'get_classes.php?klas=' + klas, true);
		request.send();
	}

	function ajaxSucces() {
		document.querySelector('#klassen').innerHTML = this.responseText;
		console.log('vakken updated');
	}
	
});
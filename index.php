<!DOCTYPE html>
<html>
	<head>
		<title>Rijks geweldige HvA Rooster</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="script_v1.2.js"></script>
	</head>
	<body>
		<header>
			<h1>HvA CMD V1 Rooster</h1>
		</header>
		<div class="flex-container">
		<main>
			<div id="main_content">
				<form onsubmit="return false;">
					<div id="klas_selectie">
						<h2>In welke klas zit je?</h2>
						<select name="klas">
							<option value="" disabled="disabled" selected="selected">Selecteer klas</option>
							<option value="V1-01">V1-01</option>
							<option value="V1-02">V1-02</option>
							<option value="V1-03">V1-03</option>
							<option value="V1-04">V1-04</option>
							<option value="V1-05">V1-05</option>
							<option value="V1-06">V1-06</option>
							<option value="V1-07">V1-07</option>
							<option value="V1-08">V1-08</option>
							<option value="V1-09">V1-09</option>
							<option value="V1-10">V1-10</option>
							<option value="V1-11">V1-11</option>
							<option value="V1-12">V1-12</option>
						</select>
					</div>
					<div id="klassen">
						<h3>Vakken</h3>
						<div id="klassenLijst"></div>
					</div>
				</form>
				<div>
					<input type="button" name="ios" value="Mac / iOS" />
					<input type="button" name="google" value="Maak Google Link" />
					<a name="google_link" href="#">Open in Google Calendar</a>
				</div>
			</div>
		</main>
		<aside>
			<h4>Gebruik op eigen risico.</h4>
			<p>Ik ben niet verantwoordelijk als je een les mist of van je fiets valt door dit systeem.</p>
			<p>Dat gezegd hebbende:<br>
			de roosters worden elke dag vers opgehaald van de originelen (rooster.hva.nl). Vervolgens wordt jouw persoonlijke rooster aan de hand hiervan bijgewerkt.
			Zo krijg jij altijd de nieuwste gegevens binnen!</p>
			<footer>
				<p>
					<span>V1.2</span><br>
					&copy; Rijk van Zanten onder <a href="http://opensource.org/licenses/MIT"> MIT</a><br>
					Contributions by<br>
					Niels de Bruin & Ronny Rook
				</p>
			</footer>
		</aside>
		</div>
	</body>
</html>
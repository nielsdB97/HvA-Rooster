<!DOCTYPE html>
<html>
	<head>
		<title>Rijks geweldige HvA Rooster</title>
		<meta charset="utf-8" />
		<link rel="stylesheet" type="text/css" href="style.css" />
		<script src="script.js"></script>
	</head>
	<body>
		<header>
			<h1><span>Reicks</span>  Rijks Geweldige HvA Rooster</h1>
		</header>
		<aside>
			<p>Gebruik op eigen risico.</p> 
			<p>Ik ben niet verantwoordelijk als je een les of watdanook mist door m'n systeem. Dat gezegd hebbende; de roosters worden elke dag vers opgehaald van de originelen (rooster.hva.nl). In PHP worden de roosters geparsed en opnieuw gestructureerd op basis van je selectie.</p>
			<p>V1.1 <br />© Rijk van Zanten onder <a href="http://opensource.org/licenses/MIT"> MIT</a>.
		</aside>
		<main>
			<form onsubmit="return false;">
				<h3>Klas:</h3>
				<select name="klas">
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
				<div id="klassen">
				</div>
			</form>
			<div>
				<input type="button" name="ios" value="Mac / iOS (Agenda)" />
<!-- 				<input type="button" name="google" value="Kopieer webcal link (Google)" /> -->
			</div>
		</main>
	</body>
</html>
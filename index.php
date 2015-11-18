<!DOCTYPE html>
<html>
<head>
	<title>Rijks geweldige HvA Rooster</title>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
	<header>
		<h1><span>Reicks</span>  Rijks Geweldige HvA Rooster</h1>
	</header>

	<aside>
		<p>Gebruik op eigen risico.</p>
		<p>Ik ben niet verantwoordelijk als je een les of watdanook mist door m'n systeem. Dat gezegd hebbende; de roosters worden elke dag vers opgehaald van de originelen (rooster.hva.nl). In PHP worden de roosters geparsed en opnieuw gestructureerd op basis van je selectie.</p>
		<p>© Rijk van Zanten onder <a href="http://opensource.org/licenses/MIT"> MIT</a>.
	</aside>

	<main>
		<form onsubmit="return false;">
			<fieldset>
				<label>Klas <em>(selectie van meerdere klassen is mogelijk)</em>:</label>
				<select name="klas" multiple="multiple">
					<option value="P01%20ROZE">P01 Roze</option>
					<option value="P02%20LILA">P02 Lila</option>
					<option value="P03%20PAARS">P03 Paars</option>
					<option value="P05%20KORAAL">P05 Koraal</option>
					<option value="P06%20STEEN">P06 Steen</option>
					<option value="P07%20MINT">P07 Mint</option>
					<option value="P08%20ZEE">P08 Zee</option>
					<option value="P09%20SMARAGD">P09 Smaragd</option>
					<option value="P10%20JADE">P10 Jade</option>
					<option value="P11%20BRILJANT">P11 Briljant</option>
					<option value="P12%20LIME">P12 Lime</option>
					<option value="P13%20MARINE">P13 Marine</option>
					<option value="P14%20KOBALT">P14 Kobalt</option>
					<option value="P16%20STAAL">P16 Staal</option>
					<option value="P17%20CYAAN">P17 Cyaan</option>
					<option value="P18%20AQUA">P18 Aqua</option>
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
			</fieldset>

			<fieldset id="V1-checkboxes" class="vakken">
				<label>Vakken V1:</label>

				<div></div>
			</fieldset>

			<fieldset id="P-checkboxes" class="vakken">
				<label>Vakken P:</label>

				<div></div>
			</fieldset>
		</form>

		<div class="submit">
			<input type="button" name="ios" value="Mac / iOS (Agenda)" />
			<input type="button" name="google" value="Kopieer webcal link (Google)" />
		</div>
	</main>

	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
	<script src="inc/jquery.json.js"></script>
	<script src="script.js"></script>
</body>
</html>
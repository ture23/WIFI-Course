<h1>Kontaktformular</h1>
<p>Wie können wir behilflich sein?</p>
<?php
if(count($_GET)>0) {
	echo('
		<p>Ihre eingegebenen Daten waren (GET):</p>
		<ul>
			<li>Vorname: ' . $_GET["VN"] . '</li>
			<li>Nachname: ' . $_GET["NN"] . '</li>
		</ul>
	');
}
if(count($_POST)>0) {
	echo('
		<p>Ihre eingegebenen Daten waren (POST):</p>
		<ul>
			<li>Vorname: ' . $_POST["VN"] . '</li>
			<li>Nachname: ' . $_POST["NN"] . '</li>
		</ul>
	');
}
?>
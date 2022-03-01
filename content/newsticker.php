<?php
if(count($_POST)>0) {
	echo('
		<p>' . date("j.n.Y H:i:s") . ' Uhr: ' . $_POST["VN"] . ' ' . $_POST["NN"] . ' schrieb:<br>' . $_POST["Nachricht"] . '</p>
	');
}
?>
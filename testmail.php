<?php
if(isset($_POST['mailform']))

$header="MIME-Version: 1.0\r\n";
$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
$header.='Content-Type:text/html; charset="uft-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
			Une anomalie a été signalé !
		</div>
	</body>
</html>
';

mail("primfxtuto@gmail.com", "Toutapanne !", $message, $header);
?>
<form method="POST" action="">
	<input type="submit" value="Envoyer un mail a l'administrateur !" name="mailform"/>
</form>
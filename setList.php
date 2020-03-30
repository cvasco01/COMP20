<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP SETLIST</title>
</head>

<body>
	<?php
		$word = $_GET["w"];
		if ($word == "R&B")
			echo "Say So, Juicy, Self Love, Play Too Much";
		else if ($word == "Hip-Hop")
			echo "Wanna Get To Know You, Got Your Money, Rapp Snitch Knishes";
		else if ($word == "Reggaeton")
			echo "Si Veo a Tu Mamá, Loco Contigo, Bellacoso";
		else echo "none";
	?>
</body>
</html>

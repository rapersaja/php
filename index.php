<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
</head>
<body>
	<p>
		<?php
		//Declaracion de Variables //
			$Pcantidad = 17;
			$Scantidad = 3;
			$Total = $Pcantidad+$Scantidad;
			if ($Total >=18) {
				echo "Mayor a 18";
			} else {
				echo "Menor a 18";
			}
		?>
	</p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ejercicio 2</title>
</head>
<body>
    <center><h1>CANALES DE TV DE BOLIVIA</h1></center>
    <?php 
		$canal = array ("Canal_1" =>"UNITEL",
						"Canal_2" => "BOLIVISION",
						"Canal_3" => "ATB",
						"Canal_4" => "RED UNO",
						"Canal_5" => "TV UPEA",
						"Canal_6" => "BOLIVIA TV",
						"Canal_7" => "CADENA A"
						);



		echo "<br><br>LOS 7 CANALES DE TELEVISION SON :<br>";
		foreach ($canal as $ind => $valor) {
			echo $ind . " : " .$valor. "<br>";
		}


?>
</body>
</html>
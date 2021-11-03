<!DOCTYPE html>
<html>
<head>
	<title>Martin Calle Vera segunda pregunta </title>
</head>
<body>
	<h1>SEGUNDA PREGUNTA DEL EXAMEN SEGUNDO PARCIAL DE EMERGENTES 1</h1>
    
	<?php 
    	$futbol = array(
	         '1' =>array('EQUIPO' =>'UPEA','CIUDAD'=>'EL ALTO','PUNTOS'=> 21, 'PJ'=>12,'PG'=>7,'PE'=>0,'PP'=>5,'GF'=>30,'GC'=>21,'ASIS'=>500),
	         '2' =>array('EQUIPO' =>'SAN SIMON','CIUDAD'=>'COCHABAMBA','PUNTOS'=> 21, 'PJ'=>12,'PG'=>7,'PE'=>0,'PP'=>5,'GF'=>26,'GC'=>17,'ASIS'=>780),
	         '3' =>array('EQUIPO' =>'UNIFRANZ','CIUDAD'=>'LA PAZ','PUNTOS'=> 20, 'PJ'=>12,'PG'=>6,'PE'=>2,'PP'=>4,'GF'=>28,'GC'=>17,'ASIS'=>354),
	         '4' =>array('EQUIPO' =>'USFX','CIUDAD'=>'CHIQUISACA','PUNTOS'=> 20, 'PJ'=>12,'PG'=>6,'PE'=>2,'PP'=>4,'GF'=>20,'GC'=>16,'ASIS'=>480),
	         '5' =>array('EQUIPO' =>'UTO','CIUDAD'=>'ORURO','PUNTOS'=> 20, 'PJ'=>12,'PG'=>6,'PE'=>2,'PP'=>4,'GF'=>14,'GC'=>11,'ASIS'=>340),
	         '6' =>array('EQUIPO' =>'EMI','CIUDAD'=>'SANTA CRUZ','PUNTOS'=> 20, 'PJ'=>12,'PG'=>6,'PE'=>2,'PP'=>4,'GF'=>15,'GC'=>15,'ASIS'=>240),
	         ' ' =>array('EQUIPO' =>'','CIUDAD'=>'promedio','PUNTOS'=> print $total1, 'PJ'=> $total2,'PG'=>$total3,'PE'=>$total4,'PP'=>$total5,'GF'=>$total6,'GC'=>$total7,'ASIS'=>$total8)

	        );
	 echo'<table border="1" cellpadding="0">';
	    echo'<caption>TABLA DE POSICIONES - LIGA DE FUTBOL UNIVERSITARIO - 2021 </caption>';

	 	echo'<tr>';
	 		echo'<th>Nro</th>';
	 		foreach ($futbol as $ind_fil => $val_fil) {
	 			foreach ($val_fil as $ind_col => $val_col) {
	 				echo '<th>' . $ind_col . '</th>';
	 				
	 			}
	 			break; 
	 		}
	 		
	 	echo'</tr>';
	 	


	 	
	 	foreach ($futbol as $ind_fil => $val_fil) {
	 		echo'<tr>';
	 		  echo'<td>' . $ind_fil . '</td>';
	 		foreach ($val_fil as $ind_col => $val_col) {
	 			echo'<td>' . $val_col . '</td>';
	 		}
	 	}
		
	 	echo'</tr>';
	 echo'</table>';


     
	 ?>
<?php
    $vector = array ("universida1" => "upea",
    "universidad2" => "san simon",
    "Universidad3"=> "unifranz",
    "universidad4"=>"usfx",
    "universidad5"=>"uto",
    "universidad6"=>"emi");
    $vector1 = array ("ciudad1" => "el alto",
    "ciudad2" => "cochabamba",
    "ciudad3" => "la paz",
    "ciudad4" => "chuquisaca",
    "ciudad5" => "oruro",
    "ciudad6" => "santa cruz");
    $vector2 = array ("pt1" => 21,
    "pt2"=>21,
    "pt3"=>20,
    "pt4"=>20,
    "pt5"=>20,
    "pt6"=>20);
    $total1 = array_sum($vector2)/$n;
    $vector3 = array ("pj1" => 12,
    "pj2" => 12,
    "pj3" => 12,
    "pj4" => 12,
    "pj5" => 12,
    "pj6" => 12);
    $total2 = array_sum($vector3)/$n;
    $vector4 = array ("pg1" => 7,
    "pg2" => 7,
    "pg3" =>6,
    "pg4" =>6,
    "pg5" =>6,
    "pg6" =>6);
    $total3 = array_sum($vector4)/$n;
    $vector5 = array ("pe1" => 0,
    "pe2" => 0,
    "pe3" => 2,
    "pe4" => 2,
    "pe5" => 2,
    "pe6" => 2);
    $total4= array_sum($vector5)/$n;
    $vector6 = array ("pp1" => 5,
    "pp2" => 5,
    "pp3" => 4,
    "pp4" => 4,
    "pp5" => 4,
    "pp6" => 4);
    $total5 = array_sum($vector6)/$n;
    $vector7 = array("gf1" => 30,
    "gf2" =>26,
    "gf3" =>28,
    "gf4" =>20,
    "gf5" =>14,
    "gf6" =>15);
    $total6= array_sum($vector7)/$n;
    $vector8 = array ("gc1" =>21,
    "gc2" =>17,
    "gc3" =>17,
    "gc4" =>16,
    "gc5" =>11,
    "gc6" =>15);
    $total7= array_sum($vector8)/$n;
    $vector9 = array ("as1" => 500,
    "as2" => 780,
    "as3" => 354,
    "as4" => 480,
    "as5" => 340,
    "as6" => 240);
    $total8= array_sum($vector9)/$n;
    ?>
	
</body>
</html>
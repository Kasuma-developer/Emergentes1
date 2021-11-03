<?php
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];
$edad = $_POST['edad'];
$grado = $_POST['grado'];
$hijos = $_POST['hijo'];
$sexo = $_POST['sexo'];
$correo = $_POST['correo'];
if($hijos == "0"){
    echo "El cliente ".$nombre." ".$apellido." , es ".$sexo." y tiene ".$edad." años. Su nivel de estudio es "
    .$grado. " y no tiene hijos .Cualquier información se le debe enviar al correo ".$correo;}
elseif($hijos == "1"){
    echo "El cliente ".$nombre." ".$apellido." , es ".$sexo." y tiene ".$edad." años. Su nivel de estudio es "
.$grado. " y tiene " .$hijos." hijo .Cualquier información se le debe enviar al correo ".$correo;}
elseif($hijos >= "2"){
echo "El cliente ".$nombre." ".$apellido." , es ".$sexo." y tiene ".$edad." años. Su nivel de estudio es "
.$grado. " y tiene " .$hijos." hijos .Cualquier información se le debe enviar al correo ".$correo;}
/*El cliente Juan Pérez, es hombre y tiene 45 años. Su nivel de estudio es Primaria, y no
tiene hijos. Cualquier información se le debe enviar al correo juanito@gmail.com*/
?>
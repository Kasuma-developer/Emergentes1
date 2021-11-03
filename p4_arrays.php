<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays escalares</title>
</head>
<body>
    <h1>trabajando con arrays escalares</h1>
    <?php
    //1ra forma con arrays--> 
$par = array(2, 4, 6, 8, 10, 12);
//<!--visualizar el array-->

   // echo '<pre>';

     //  0 print_r($par);
    
    //echo'</pre>';

    echo "PAR =(";  
    for($i=0; $i < 5 ; $i++) { 
        echo $par[$i].",";
    }; 
    echo "$par[5])";

    $impar[] = 1;
    $impar[] = 3;
    $impar[] = 5;
    $impar[] = 7;

    echo "<br>";
    echo "IMPAR =(";  
    for($i=0; $i < 3 ; $i++) { 
        echo $impar[$i].",";
    }; 
    echo "$impar[3])";
echo "<br>";
   /* $n = 5;
    $fibonacci = [];

for($i=0; $i < $n; $i++) {
    if($i <= 1) {
        $fibonacci[$i] = 1;
    continue;
}
    $fibonacci[$i] = $fibonacci[$i-1] + $fibonacci[$i-2]; 
}

print_r($fibonacci);*/
$n = 1 ;
$a = 0;
$b = 1;
for ($i=0; $i <= $n-1 ; $i++) { 
    $fibonacci[] = $a;
    $c = $a + $b;
    $a=$b;
    $b=$c;
}
echo "<pre>";
    print_r($fibonacci);
echo "</pre>"
    ?>
</body>
</html>
<?php 
     $a =725;

     echo "separar los digitos de $a";
     echo "<br>";
     $d1 = $a % 10;
     echo "d1 =$d1";
     $d2 =  intval($a / 10)%10;
     echo "<br>d2 =  $d2";
     $d3 = intval($a / 100)%10;
     echo "<br>d3 =  $d3";
     echo "<br> ordenando de forma ascendente:";
     if ($d1 < $d2 && $d2 < $d3 ) {
     	echo "$d1 , $d2 , $d3";
     } else {
          if ($d1 < $d3 && $d3 < $d2 ) {
               echo "$d1 , $d3 , $d2";
          } else {
               if ($d2 < $d1 && $d1 < $d3) {
                    echo "$d2 , $d1 , $d3";
               } else {
                    if ($d2 < $d3 && $d3 < $d1) {
                         echo "$d2 , $d3 , $d1";   
                    } else {
                         if ($d3 < $d1 && $d1 < $d2) {
                              echo "$d3 , $d1 , $d2";
                         } else {
                              echo "$d3 , $d2 , $d1";

                                } 
                           }
                       }
                  }
             }


 ?>
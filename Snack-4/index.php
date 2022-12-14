
<!-- Snack-4 -->

<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

$arrayNumeriCasuali = [];

for($i = 0; count($arrayNumeriCasuali) < 15; $i++){

   $myNewInt = rand(1 , 100);
   
   if(!in_array($myNewInt,$arrayNumeriCasuali)){

      $arrayNumeriCasuali[] = $myNewInt;
   }
   
}

var_dump($arrayNumeriCasuali);



?>
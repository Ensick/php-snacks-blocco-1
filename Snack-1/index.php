
<?php

/* Snack 1 

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60  */

 $partite = [

    [
        'squadraCasa' => 'Milano',
        'squadraOspite' => 'Cantu', 
        'puntiCasa' => 55,
        'puntiOspite' => 60,
    ],
    [
        'squadraCasa' => 'Genoa',
        'squadraOspite' => 'Bari',  
        'puntiCasa' => 70,
        'puntiOspite' => 80,
    ],
    [
        'squadraCasa' => 'Treviso',
        'squadraOspite' => 'Palermo',  
        'puntiCasa' => 85,
        'puntiOspite' => 60,
    ],
];


for($i = 0; $i < count($partite); $i++){

    echo $partite[$i]['squadraCasa'] . '-' . $partite[$i]['puntiCasa'] . '<br>' . $partite[$i]['squadraOspite'] . '-' . $partite[$i]['puntiOspite'] . '<br><br>';
}; 

?>
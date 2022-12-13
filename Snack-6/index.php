<?php

/* Snack 6 */

/* Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. */

$db = [

    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 

    for($y = 0; $y < count($db['teachers']); $y++){

        echo '<div class="teachers">'.$db['teachers'][$y]['name']." ".$db['teachers'][$y]['lastname'].'</div>';
    }

    
    for($i = 0; $i < count($db['pm']); $i++ ){

        echo '<div class="pm">'.$db['pm'][$i]['name']." ".$db['pm'][$i]['lastname'].'</div>';
    };
   
?>
   
</body>
</html>

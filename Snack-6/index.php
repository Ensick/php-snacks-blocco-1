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

$arrayChaivi = array_keys( $db );

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



 <!--    /* for($y = 0; $y < count($db['teachers']); $y++){

        echo '<div class="teachers">';

        echo $db['teachers'][$y]['name']." ".$db['teachers'][$y]['lastname'];

        echo '</div>';
    }

    
    for($i = 0; $i < count($db['pm']); $i++ ){

        echo '<div class="pm">';

        echo $db['pm'][$i]['name']." ".$db['pm'][$i]['lastname'];

        echo '</div>';
    };  -->

   

    <?php for($i = 0; $i < count( $arrayChaivi ); $i++){ ?>
        
        <?php if($arrayChaivi[$i] == 'teachers'){?>

            <div class="teachers">

            <?php for($k=0; $k < count($db['teachers']);$k++){ ?>

                <ul>
                    <li>
                        <?php echo $db['teachers'][$k]['name']." ".$db['teachers'][$k]['lastname']?>
                    </li>
                </ul>

            <?php } ?>

            </div>

        <?php } else{ ?> 

            <div class="pm">

            <?php for($k=0; $k < count($db['pm']);$k++){ ?>

                <ul>
                    <li>
                        <?php echo $db['pm'][$k]['name']." ".$db['pm'][$k]['lastname']?>
                    </li>
                </ul>

            <?php } ?>

            </div>

        <?php } ?>   

    <?php } ?>
   

   
</body>
</html>

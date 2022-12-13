
<!-- Snack-3 -->

<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

var_dump($posts);

for($i = 0; $i < count($posts['10/01/2019']); $i++){

   echo $posts['10/01/2019'][$i]['title'] .' '. '<br>';
   echo $posts['10/01/2019'][$i]['author'].' ' . '<br>';
   echo $posts['10/01/2019'][$i]['text'].' ' . '<br><br>';
   
}

for($i = 0; $i < count($posts['10/02/2019']); $i++){

    echo $posts['10/02/2019'][$i]['title'] .' '. '<br>';
    echo $posts['10/02/2019'][$i]['author'].' ' . '<br>';
    echo $posts['10/02/2019'][$i]['text'].' ' . '<br><br>';
    
}

for($i = 0; $i < count($posts['15/05/2019']); $i++){

    echo $posts['15/05/2019'][$i]['title'] .' '. '<br>';
    echo $posts['15/05/2019'][$i]['author'].' ' . '<br>';
    echo $posts['15/05/2019'][$i]['text'].' ' . '<br><br>';
    
 }
?>


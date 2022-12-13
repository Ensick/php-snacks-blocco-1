<!-- Snack 5

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. -->

<?php

$paragrafo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit.Harum ullam eum quasi accusantium facere doloribus dolores illum numquam.Commodi rerum quo nesciunt deserunt dolores ex excepturi enim accusantium ducimus ratione! Lorem ipsum dolor sit amet consectetur adipisicing elit.Reiciendis ipsum est ex, maxime velit hic similique repellat excepturi tempora dolor sunt, nisi, ut quam voluptates officiis exercitationem unde odit quidem.';

$paragrafi = explode('.' , $paragrafo);

var_dump($paragrafi);

for($i = 0; $i < count($paragrafi); $i++){

    if($paragrafi == ""){


    }else{
    
     echo '<p>'.$paragrafi[$i].'</p>';
     
    }
}



?>


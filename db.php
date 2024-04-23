<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/Models/Genre.php';
require_once __DIR__ . '/Models/Movies.php';
require_once __DIR__ . '/randomizer.php';


$genre = new Genre('Action', 'Action-Fantasy');
$productions = [
    new Production('Matrix', 'en-US',rand(1,10), $genre ),
    new Production('Cloud Atlas', 'en-US', rand(1,10), $genre),
    new Production('La vita è bella', 'it-IT',  rand(1,10), $genre),
    new Production('Last Emperor', 'en-EN',  rand(1,10),$genre)
];

$movies = [
    new Movie('Lord of the Ring', 'English', rand(1,10), $genre , '1.1 billion', rand(1,4)),
    new Movie('Avatar', 'English',rand(1,10), $genre , '450 million', rand(1,4)),
    new Movie('Indiana Jones', 'English', rand(1,10), $genre , '900 million', rand(1,4)),
    new Movie('Interstellar', 'English', rand(1,10), $genre , '980 million', rand(1,4)),

];

//$prod_length = count($productions);

//var_dump($prod_length);


/*
$array_votes = [];//creo l'array dei numeri
   for($i = 0; $i < $prod_length; $i++){//inizio un ciclo da ripetere quanto la lunghezza dell'array
      $numero = rand(1,10);//genero un numero random tra 1 e 10
      $array_votes[] = $numero;//aggiungo il numero all'array
}//fine ciclo for 

var_dump($array_votes);
$item= null;
foreach($array_votes as $item){
   return $item;
}


*/

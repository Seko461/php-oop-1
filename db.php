<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/randomizer.php';



$productions = [
    new Production('Matrix', 'en-US', $rand_vote ),
    new Production('Cloud Atlas', 'en-US', $rand_vote),
    new Production('La vita è bella', 'it-IT',  $rand_vote),
    new Production('Last Emperor', 'en-EN',  $rand_vote),
];

$prod_length = count($productions);

//var_dump($prod_length);



$array_votes = [];//creo l'array dei numeri
   for($i = 0; $i < $prod_length; $i++){//inizio un ciclo da ripetere quanto la lunghezza dell'array
      $numero = rand(1,10);//genero un numero random tra 1 e 10
      $array_votes[] = $numero;//aggiungo il numero all'array
}//fine ciclo for 

//var_dump($array_votes);
$item= null;
foreach($array_votes as $item){
   return $item;
}




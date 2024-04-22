<?php
require_once __DIR__ . '/Models/Production.php';


use Random\Randomizer;


$randomizer = new Randomizer();
;


var_dump($randomizer->getInt(1, 10));

$rand_vote_prod_1 = $randomizer->getInt(1, 10);


$production_1 = new Production('Matrix', 'en-US', $rand_vote_prod_1);

var_dump($production_1);

print_r($production_1);

$rand_vote_prod_2 = $randomizer->getInt(1, 10);

$production_2 = new Production('Cloud Atlas', 'en-US', $rand_vote_prod_2);

var_dump($production_2);

print_r($production_2);
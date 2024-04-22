<?php
require_once __DIR__ . '/db.php';
use Random\Randomizer;


$randomizer = new Randomizer();

$rand_vote = $randomizer->getInt(1, 10);




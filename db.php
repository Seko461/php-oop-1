<?php

require_once __DIR__ . '/Models/Production.php';
require_once __DIR__ . '/randomizer.php';

$productions = [
    new Production('Matrix', 'en-US', $rand_vote),
    new Production('Cloud Atlas', 'en-US', $rand_vote),
    new Production('La vita è bella', 'it-IT', $rand_vote),
    new Production('Last Emperor', 'en-EN', $rand_vote),
];






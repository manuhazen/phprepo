<?php

$greeting = 'Hello from require';

$names = [
    'Manu',
    'Darwin',
    'Gay'
];


$task = [
    'title' => 'Finish your homework',
    'due' => 'today',
    'assigned_to' => 'Manu',
    'finished' => true,
];

var_dump($task);

require 'index.view.php';
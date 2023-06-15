<?php

use Class\Peugeot;
use Class\Renault;

require '../vendor/autoload.php';

$peugeot = new Peugeot('peugeot');
$renault = new Renault('renault');

// var_dump($peugeot->rouler(),);
var_dump($peugeot->marque(param: 'test'), $renault->marque());

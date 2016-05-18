<?php
require('../vendor/autoload.php');

$manager = new MongoDB\Driver\Manager('mongodb://10.100.14.228:27017');

/** @var MongoDB\Collection $collection */
$collection = new MongoDB\Collection($manager, 'study', 'unicorns');

var_dump($collection);


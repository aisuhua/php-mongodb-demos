<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

/** @var MongoDB\Collection $collection */
$collection = $client->study->test;

var_dump($collection);


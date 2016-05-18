<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

/** @var MongoDB\Database $db */
$db = $client->selectDatabase('study');

/** @var MongoDB\Collection $collection */
$collection = $db->selectCollection('unicorns');

var_dump($collection);




<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$indexName = $collection->createIndex([
    'name' => 1
]);

var_dump($indexName);








<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$document = $collection->findOne([
    '_id' => new MongoDB\BSON\ObjectID("573a90391f8c4522c80073a9")
]);

var_dump($document);






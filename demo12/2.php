<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017', [], [
    'typeMap' => [
        'root' => 'array',
        'document' => 'array',
        'array' => 'array'
    ]
]);

$collection = $client->selectCollection('study', 'test');

$cursor = $collection->find();


foreach ($cursor as $document) {
    var_dump($document);
}
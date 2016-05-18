<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\Driver\Cursor $cursor */

$cursor = $collection->aggregate([
    [
        '$group' => [
            '_id' => '$sex',
            'count' => [
                '$sum' => 1
            ]
        ]
    ],
    [
        '$sort' => [
            'count' => -1
        ]
    ],
    [
        '$limit' => 3
    ]
]);

var_dump($cursor);
var_dump($cursor->toArray());










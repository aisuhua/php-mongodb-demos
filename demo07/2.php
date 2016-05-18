<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// db.test.aggregate([{$match: {sex: '男'}}, {$project: {name: 1, sex: 1}}])

$cursor = $collection->aggregate([
    [
        '$match' => [
            'sex' => '男'
        ]
    ],
    [
        '$project' => [
            'name' => 1,
            'sex' => 1
        ]
    ]
]);

foreach ($cursor as $document) {
    var_dump($document);
}










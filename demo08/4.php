<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\UpdateResult $updatedResult */
$updatedResult = $collection->updateOne(
    [
        'name' => 'lala'
    ],
    [
        '$set' => [
            'sex' => '女',
            'age' => 90
        ]
    ],
    [
        'upsert' => true
    ]
);


echo $updatedResult->getMatchedCount(), '<br>';

echo $updatedResult->getModifiedCount(), '<br>';

echo $updatedResult->getUpsertedCount(), '<br>';

// 573ace8d8a342225787c7108
echo $updatedResult->getUpsertedId(), '<br>';

var_dump($updatedResult);







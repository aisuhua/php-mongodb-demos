<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\UpdateResult $updatedResult */
$updatedResult = $collection->updateMany(
    [
        'name' => 'suhua'
    ],
    [
        '$set' => [
            'sex' => '男'
        ]
    ]
);


echo $updatedResult->getMatchedCount(), '<br>';

echo $updatedResult->getModifiedCount(), '<br>';

echo $updatedResult->getUpsertedCount(), '<br>';

echo $updatedResult->getUpsertedId(), '<br>';

var_dump($updatedResult);







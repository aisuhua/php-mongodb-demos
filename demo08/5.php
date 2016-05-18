<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'hits');

/** @var MongoDB\UpdateResult $updatedResult */
$updatedResult = $collection->updateOne(
    [
        'name' => 'suhua'
    ],
    [
        '$inc' => [
            'hits' => 1
        ]
    ],
    [
        'upsert' => true
    ]
);


echo $updatedResult->getMatchedCount(), '<br>';

echo $updatedResult->getModifiedCount(), '<br>';

echo $updatedResult->getUpsertedCount(), '<br>';

echo $updatedResult->getUpsertedId(), '<br>';

var_dump($updatedResult);







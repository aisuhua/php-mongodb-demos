<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\UpdateResult $updatedResult */
$updatedResult = $collection->replaceOne(
    [
        '_id' => new MongoDB\BSON\ObjectID('573a90391f8c4522c80073a7')
    ],
    [
        'sex' => '女',
        'age' => 90
    ]
);


echo $updatedResult->getMatchedCount(), '<br>';

echo $updatedResult->getModifiedCount(), '<br>';

echo $updatedResult->getUpsertedCount(), '<br>';

echo $updatedResult->getUpsertedId(), '<br>';

var_dump($updatedResult);







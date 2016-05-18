<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$user1 = [
    'name' => 'suhua',
    'age' => 26,
    'sex' => '男'
];

/** @var MongoDB\InsertOneResult $insertOneResult */
$insertOneResult = $collection->insertOne($user1);

/** @var MongoDB\BSON\ObjectID $insertedId */
$insertedId = $insertOneResult->getInsertedId();

echo $insertedId;






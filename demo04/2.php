<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$user1 = [
    'name' => 'suhua',
    'age' => 26,
    'sex' => '男'
];

$user2 = [
    'name' => 'xiaozhang',
    'age' => 28,
    'sex' => '女'
];

$user3 = [
    'name' => 'xiaotian',
    'age' => 30,
    'sex' => '女'
];

/** @var MongoDB\InsertOneResult $insertOneResult */
$insertManyResult = $collection->insertMany([
    $user1,
    $user2,
    $user3
]);

/** @var MongoDB\BSON\ObjectID $insertedId */
$insertedIds = $insertManyResult->getInsertedIds();

$insertedCount = $insertManyResult->getInsertedCount();

print_r($insertedIds);

echo $insertedCount, '<br>';






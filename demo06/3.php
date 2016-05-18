<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$document = $collection->findOne([
    'name' => 'suhua'
]);

/** @var MongoDB\DeleteResult $deleteResult */
$deleteResult = $collection->deleteMany($document1);

echo $deleteResult->getDeletedCount();






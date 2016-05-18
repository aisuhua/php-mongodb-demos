<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\DeleteResult $deleteResult */
$deleteResult = $collection->deleteOne([
    'name' => 'xiaozhang'
]);

echo $deleteResult->getDeletedCount();






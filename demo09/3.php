<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// object|null 返回被删除的文档

$document = $collection->findOneAndDelete(
    [
        '_id' => new MongoDB\BSON\ObjectID('573a90391f8c4522c80073a7')
    ]
);

var_dump($document);


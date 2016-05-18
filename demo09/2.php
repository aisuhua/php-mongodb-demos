<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// object|null 返回被更新前的文档

$document = $collection->findOneAndUpdate(
    [
        '_id' => new MongoDB\BSON\ObjectID('573a90421f8c4522c80073aa')
    ],
    [
        '$set' => [
            'age' => 20
        ]
    ]
);

var_dump($document);


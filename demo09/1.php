<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// object|null 返回被替换前的文档

$document = $collection->findOneAndReplace(
    [
        '_id' => new MongoDB\BSON\ObjectID('573a90421f8c4522c80073aa')
    ],
    [
        'name' => 'suhua',
        'sex' => '女'
    ]
);

var_dump($document);


<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\Driver\Cursor $list */
$cursor = $collection->find(
    [
        'name' => 'xiaotian'
    ],
    [
        'limit' => 2,
        'skip' => 2,
        'sort' => [
            'age' => 1
        ]
    ]
);


/** @var MongoDB\Model\BSONDocument $document */
foreach ($cursor as $document) {
    var_dump($document);
}






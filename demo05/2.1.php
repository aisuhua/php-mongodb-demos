<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\Driver\Cursor $list */
$cursor = $collection->find(
    [
        'sex' => '女'
    ],
    [
        'projection' => [
            'name' => 1
        ]
    ]
);

//第二个参数 projection 限制返回哪些字段
//http://mongodb.github.io/mongo-php-library/tutorial/crud/#query-projection

/** @var MongoDB\Model\BSONDocument $document */
foreach ($cursor as $document) {
    var_dump($document);
}






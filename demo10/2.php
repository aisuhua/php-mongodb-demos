<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// 查看所有索引信息

/** @var MongoDB\Model\IndexInfo $indexInfo */

foreach($collection->listIndexes() as $indexInfo) {
    var_dump($indexInfo);
}








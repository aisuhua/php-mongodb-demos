<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

/** @var MongoDB\Model\BSONDocument $one */
$document = $collection->findOne([
    'name' => 'suhua'
]);

// one = array|object|null 没有查找到数据时，返回 null，所以应该先判断该数据是否存在，再继续进行操作
if($document === null) {
    exit('找不到该数据');
}

echo $document->name;




<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

// 获取所有名字，重复的名字只显示一个就可以

$distinctName = $collection->distinct('name');

var_dump($distinctName);





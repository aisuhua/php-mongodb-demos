<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

/**
 * @var MongoDB\Model\DatabaseInfoLegacyIterator $databaseInfo
 *
 * @see http://mongodb.github.io/mongo-php-library/api/class-MongoDB.Model.DatabaseInfoIterator.html
 */
$databaseInfos = $client->listDatabases();

/**
 * @var  $key
 * @var  MongoDB\Model\DatabaseInfo $databaseInfo
 *
 * @see http://mongodb.github.io/mongo-php-library/api/class-MongoDB.Model.DatabaseInfo.html
 */
foreach ($databaseInfos as $key=>$databaseInfo) {
    echo  $databaseInfo->getName(), '<br>';
}








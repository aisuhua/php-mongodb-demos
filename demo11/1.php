<?php
require('../vendor/autoload.php');

$client = new MongoDB\Client('mongodb://10.100.14.228:27017');

$collection = $client->selectCollection('study', 'test');

$bulkWriteResult = $collection->bulkWrite([
    [
        'insertOne' => [
            [
                'name' => 'demo1',
                'age' => 10,
                'sex' => 'male'
            ]
        ]
    ],
    [
        'insertOne' => [
            [
                'name' => 'demo2',
                'age' => 12,
                'sex' => 'female'
            ]
        ]
    ],
    [
        'insertOne' => [
            [
                'name' => 'demo3',
                'age' => 12,
                'sex' => 'male'
            ]

        ]
    ],
    [
        'updateOne' => [
            [
                'name' => 'demo2'
            ],
            [
                '$set' => [
                    'address' => 'Guangzhou'
                ]
            ]
        ]
    ],
    [
        'deleteOne' => [
            [
                'name' => 'demo3'
            ]
        ]
    ]
]);

echo $bulkWriteResult->getMatchedCount(), '<br>';
echo $bulkWriteResult->getModifiedCount(), '<br>';
echo $bulkWriteResult->getUpsertedCount(), '<br>';
echo $bulkWriteResult->getDeletedCount(), '<br>';
echo $bulkWriteResult->getInsertedCount(), '<br>';

echo '<br>------<br>';

print_r($bulkWriteResult->getInsertedIds());

print_r($bulkWriteResult->getUpsertedIds());






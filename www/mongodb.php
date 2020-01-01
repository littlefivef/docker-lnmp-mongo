<?php
$manager = new MongoDB\Driver\Manager("mongodb://mongo:27017");
$bulk = new MongoDB\Driver\BulkWrite;

$document = ['_id' => new MongoDB\BSON\ObjectID, 'name' => '菜鸟教程'];

$_id= $bulk->insert($document);

var_dump($_id);

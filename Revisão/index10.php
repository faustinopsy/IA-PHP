<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Clustering\DBSCAN;

$dbscan = new DBSCAN(3);

$samples = [[0, 1], [8, 7], [1, 2], [7, 8], [2, 1], [9, 8]];

$result = $dbscan->cluster($samples);

echo "grupo 1: ";
print_r($result[0]);
echo "grupo 2: ";
print_r($result[1]);

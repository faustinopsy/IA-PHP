<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Clustering\KMeans;

group:
$kmeans = new KMeans(2);

$samples = [[1, 2], [100, 200], [3, 4], [300, 400]];

$result = $kmeans->cluster($samples);
if(count($result[0])!=2&&count($result[1])!=2) goto group;

echo "grupo 1: ";
print_r($result[0]);
echo "grupo 2: ";
print_r($result[1]);

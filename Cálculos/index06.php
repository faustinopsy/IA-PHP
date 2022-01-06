<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Set;

$set = new Set([3, 1, 2]);
$result = $set->toArray();
print_r($result);

$set = new Set([3.5, 1.7, 2.1]);
$result = $set->toArray();
print_r($result);

$set = new Set(['B', 'C', 'A']);
$result = $set->toArray();
print_r($result);

echo "\nunion:\n";
$set1 = new Set([1, 3]);
$set2 = new Set([1, 2]);
$union = Set::union($set1, $set2);
$result = $union->toArray();
print_r($result);

echo "\nintersection:\n";
$set1 = new Set([1, 3]);
$set2 = new Set([1, 2]);
$intersection = Set::intersection($set1, $set2);
$result = $intersection->toArray();
print_r($result);

echo "\ndifference:\n";
$set1 = new Set([1, 2, 3]);
$set2 = new Set([1]);
$difference = Set::difference($set1, $set2);
$result = $difference->toArray();
print_r($result);

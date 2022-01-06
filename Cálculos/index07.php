<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Set;

$set = new Set([1, 2]);
$set->addAll([3, 4]);
$set->add(5);
$result = $set->toArray();
print_r($result);

echo "\n\n";
$set = new Set([1, 2, 3, 4, 5]);
$set->removeAll([3, 4]);
$set->remove(5);
$result = $set->toArray();
print_r($result);

echo "\n\n";
$set = new Set([1, 2, 3, 4, 5]);
$result = $set->containsAll([3, 4]);
if($result) echo "1\n"; else echo "0\n";
$result = $set->contains(7);
if($result) echo "1\n"; else echo "0\n";

echo "\n\n";
$set = new Set();
$result = $set->isEmpty();
if($result) echo "1\n"; else echo "0\n";

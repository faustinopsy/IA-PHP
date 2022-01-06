<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;
use Phpml\Association\Apriori;
use Phpml\Pipeline;

$samples = [[0, 1], [2, 0], [7, 9], [9, 8]];
$targets = [0, 0, 1, 1];

$algorithm = "svc";
$input = [0, 1];

if(strtolower($algorithm)=="svc") $estimator = new SVC();
else $estimator = new Apriori();

$pipeline = new Pipeline([], $estimator);
$pipeline->train($samples, $targets);

$predicted = $pipeline->predict($input);
if(strtolower($algorithm)=="svc") echo "predição: " . $predicted . "\n";
else echo "predição: " . $predicted[0][0] . "\n"; 

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;

$svc = new SVC($probabilityEstimates=true);

$samples = [[1], [11], [12], [17], [18], [64], [65]];
$labels = ['criança', 'criança', 'adolescente', 'adolescente', 'adulto', 'adulto', 'idoso'];

$svc->train($samples, $labels);

$input = [[10], [14], [13], [20], [65]];
$result = $svc->predictProbability($input);

print_r($result);

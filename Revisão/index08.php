<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\SVR;

$svr = new SVR();

$samples = [[45, 100000], [50, 200000], [100, 100000]];
$labels = [0, 1, 2];

$targets = ['justo', 'caro', 'barato'];

$svr->train($samples, $labels);

$input = [100, 100000];
$result = $svr->predict($input);
$result = $targets[round($result)];

echo "um apartamento com $input[0]m² por R$ $input[1],00 está com um preço $result\n";

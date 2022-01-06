<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\LeastSquares;

$regression = new LeastSquares();

$samples = [[1], [2], [3], [4]];
$labels = [10, 20, 30, 40];

$regression->train($samples, $labels);

$result = $regression->predict([[5], [7]]);
echo "aplicado o padrão em 5 teremos " . $result[0] . "\n";
echo "aplicado o padrão em 7 teremos " . $result[1] . "\n";

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\LeastSquares;

$squares = new LeastSquares();

$samples = [[1], [2], [3], [4]];
$labels = [10, 20, 30, 40];

$squares->train($samples, $labels);

$input = [55];
$result = $squares->predict($input);

echo "aplicando o padrão em $input[0] teremos $result\n";

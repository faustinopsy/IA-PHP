<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Matrix;

$matrix = new Matrix([
	[10, 12],
	[20, 24]
]);

$result = $matrix->divideByScalar(2);
print_r($result);

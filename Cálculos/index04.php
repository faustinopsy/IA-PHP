<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Matrix;

$matrix1 = new Matrix([
	[1, 2],
	[3, 4]
]);

$matrix2 = new Matrix([
	[5, 6],
	[7, 8]
]);

$result = $matrix1->multiply($matrix2);
print_r($result);

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Matrix;

$flatArray = [1, 2, 3, 4];
$matrix = Matrix::fromFlatArray($flatArray);

print_r($matrix);

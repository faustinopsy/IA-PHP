<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Matrix;

$matrix = new Matrix([
	[1, 2,   3,  4],
	[5, 6,   7,  8],
	[9, 10, 11, 12]
]);

$array = $matrix->toArray();
$values = $matrix->getColumnValues($column=1);
$rows = $matrix->getRows();
$columns = $matrix->getColumns();

//print_r($array);
//print_r($values);
echo "linhas: $rows\n";
echo "columns: $columns\n";

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;

$svc = new SVC();

$samples = [[1], [11], [12], [17], [18], [64], [65]];
$labels = ['criança', 'criança', 'adolescente', 'adolescente', 'adulto', 'adulto', 'idoso'];

$svc->train($samples, $labels);

$input = [[10], [14], [13], [20], [65]];
$result = $svc->predict($input);

for($i=0; $i<count($result); $i++)
	echo "uma pessoa de " . $input[$i][0] . " anos de idade é $result[$i]\n";

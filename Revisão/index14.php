<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\ModelManager;

$filepath = __DIR__ . '/treino/modelo';
$model = new ModelManager();
$mlp = $model->restoreFromFile($filepath);

$targets = ['dígito', 'dezena'];
$input = [[2], [55]];
$result = $mlp->predict($input);

for($i=0; $i<count($result); $i++)
	echo $input[$i][0] . ': ' . $targets[round($result[$i])] . "\n";

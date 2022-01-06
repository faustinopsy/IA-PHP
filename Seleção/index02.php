<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\FeatureSelection\VarianceThreshold;

$samples = [[0, 0, 1, 4], [0, 1, 2, 3], [1, 0, 3, 2], [1, 1, 4, 1]];
$transformer = new VarianceThreshold();

$transformer->fit($samples);
$result = $transformer->transform($samples);

foreach($samples as $values) {
	echo "[" . $values[0] . ", " . $values[1] . ", " . $values[2] . "]\n";
}

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\FeatureSelection\VarianceThreshold;

$samples = [[0, 0, 1], [0, 1, 2], [1, 0, 3], [1, 1, 4]];
$transformer = new VarianceThreshold();

$transformer->fit($samples);
$result = $transformer->transform($samples);

foreach($samples as $values) {
	echo "[" . $values[0] . ", " . $values[1] . "]\n";
}

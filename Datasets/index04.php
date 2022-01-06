<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\Demo\IrisDataset;

$dataset = new IrisDataset();

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

for($i=0; $i<count($samples); $i++) {
	echo "[" . $samples[$i][0] . ", " . $samples[$i][1] . ", " . $samples[$i][2] . ", " . $samples[$i][3] . "]";
	echo "[" . $targets[$i] . "]\n";
}

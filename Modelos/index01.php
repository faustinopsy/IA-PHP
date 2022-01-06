<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;
use Phpml\ModelManager;

$samples = [[1, 2], [10, 20], [3, 4], [30, 40]];
$labels = ['menor', 'maior', 'menor', 'maior'];

$classifier = new SVC();
$classifier->train($samples, $labels);

$filepath = __DIR__ . '/models/model';
$modelManager = new ModelManager();
$modelManager->saveToFile($classifier, $filepath);

$restoreClassifier = $modelManager->restoreFromFile($filepath);
$result = $restoreClassifier->predict($samples);

for($i=0; $i<count($result); $i++) {
	echo "[" . $samples[$i][0] . ", " . $samples[$i][1] . "]: " . $result[$i] . "\n";
}

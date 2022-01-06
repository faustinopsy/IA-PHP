<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\Demo\WineDataset;

$dataset = new WineDataset();

$samples = $dataset->getSamples();
$targets = $dataset->getTargets();

for($i=0; $i<count($samples); $i++) {
	echo "[" . $samples[$i][0] . 
		 ", " . $samples[$i][1] . 
		 ", " . $samples[$i][2] . 
		 ", " . $samples[$i][3] . 
		 ", " . $samples[$i][4] . 
		 ", " . $samples[$i][5] . 
		 ", " . $samples[$i][6] . 
		 ", " . $samples[$i][7] . 
		 ", " . $samples[$i][8] . 
		 ", " . $samples[$i][9] . 
		 ", " . $samples[$i][10] . 
		 ", " . $samples[$i][11] . 
		 ", " . $samples[$i][12] . 
		 "]";
	echo "[" . $targets[$i] . "]\n";
}

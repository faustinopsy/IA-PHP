<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Clustering\KMeans;

$clustering = new KMeans(2);

$samples = [[1, 2], [7, 9], [2, 1], [8, 7], [1, 1], [9, 8], [8, 9]];

$result = $clustering->cluster($samples);

$grouped = array();
$i=0;
foreach($result as $groups) {
	$grouped[$i] = "grupo " . ($i+1) . ": ";
	foreach($groups as $elements) {
		$grouped[$i] .= "[" . $elements[0] . ", " . $elements[1] . "]";
	}
	$i++;
}

foreach($grouped as $values) {
	echo $values . "\n";
}

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Clustering\DBSCAN;

function Cluster($p=2) {
	$clustering = new DBSCAN($p+1);

	$samples = [[1, 2], [7, 9], [2, 1], [8, 7], [1, 1], [9, 8]];

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

	return $grouped;
}

$grouped = Cluster(2);
foreach($grouped as $values) {
	echo $values . "\n";
}

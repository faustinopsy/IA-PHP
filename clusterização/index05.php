<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Clustering\KMeans;

function Cluster($p=2) {
	$clustering = new KMeans($p, $p-1);

	$samples = [[1, 2], [7, 9], [2, 1], [8, 7], [1, 1], [9, 8], [20, 30], [30, 25], [35, 40]];
	cluster:
	$result = $clustering->cluster($samples);

	$grouped = array();
	$i=0;
	if(count($result) == $p) {
		foreach($result as $groups) {
			$grouped[$i] = "grupo " . ($i+1) . ": ";
			foreach($groups as $elements) {
				$grouped[$i] .= "[" . $elements[0] . ", " . $elements[1] . "]";
			}
			$i++;
		}
	}else goto cluster;

	return $grouped;
}

$grouped = Cluster(3);
foreach($grouped as $values) {
	echo $values . "\n";
}

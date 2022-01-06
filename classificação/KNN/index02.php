<?php
function toDesc($p) {
	switch($p) {
		case 'C': return 'criança'; break;
		case 'A': return 'adolescente'; break;
		case 'U': return 'adulto'; break;
		case 'I': return 'idoso'; break;
	}
}

require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\KNearestNeighbors;

$classifier = new KNearestNeighbors();

$samples = [[1], [8], [11], [12], [14], [17], [18], [40], [50], [65], [90], [85]];
$labels = ['C', 'C', 'C', 'A', 'A', 'A', 'U', 'U', 'U', 'I', 'I', 'I'];

$classifier->train($samples, $labels);

$result = $classifier->predict([[10], [15], [35], [70]]);
echo "uma pessoa de 10 ano(s) é " . toDesc($result[0][0][0]) . "\n";
echo "uma pessoa de 15 ano(s) é " . toDesc($result[1][0][0]) . "\n";
echo "uma pessoa de 35 ano(s) é " . toDesc($result[2][0][0]) . "\n";
echo "uma pessoa de 70 ano(s) é " . toDesc($result[3][0][0]) . "\n";

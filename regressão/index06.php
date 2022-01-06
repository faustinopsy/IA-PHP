<?php
function toDay($p) {
	switch($p) {
		case 1: return 'domingo'; break;
		case 2: return 'segunda-feira'; break;
		case 3: return 'terça-feira'; break;
		case 4: return 'quarta-feira'; break;
		case 5: return 'quinta-feira'; break;
		case 6: return 'sexta-feira'; break;
		case 7: return 'sábado'; break;
	}
}
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Regression\LeastSquares;

$regression = new LeastSquares();

$samples = [
	[1, 1], [1, 2], [1, 3], [1, 4], [1, 5], [1, 6], [1, 7],
	[2, 1], [2, 2], [2, 3], [2, 4], [2, 5], [2, 6], [2, 7],
	[3, 1], [3, 2], [3, 3], [3, 4], [3, 5], [3, 6], [3, 7],
	[4, 1], [4, 2], [4, 3], [4, 4], [4, 5], [4, 6], [4, 7],
	[5, 1], [5, 2], [5, 3], [5, 4], [5, 5], [5, 6], [5, 7],
	[6, 1], [6, 2], [6, 3], [6, 4], [6, 5], [6, 6], [6, 7],
	[7, 1], [7, 2], [7, 3], [7, 4], [7, 5], [7, 6], [7, 7],
	[8, 1], [8, 2], [8, 3], [8, 4], [8, 5], [8, 6], [8, 7],
	[9, 1], [9, 2], [9, 3], [9, 4], [9, 5], [9, 6], [9, 7],
	[10, 1], [10, 2], [10, 3], [10, 4], [10, 5], [10, 6], [10, 7],
	[11, 1], [11, 2], [11, 3], [11, 4], [11, 5], [11, 6], [11, 7],
	[12, 1], [12, 2], [12, 3], [12, 4], [12, 5], [12, 6], [12, 7],
];
$labels = [
	1000, 300, 3050, 400, 700, 2000, 2500,
	1200, 100, 550, 400, 700, 2100, 1500,
	1200, 300, 150, 4000, 950, 1000, 1500,
	1200, 300, 3050, 110, 7000, 1000, 1500,
	1200, 300, 950, 4000, 120, 2000, 1500,
	1800, 900, 550, 400, 700, 1000, 1000,
	1500, 3000, 3050, 400, 700, 1000, 1000,
	1200, 300, 3050, 400, 400, 2000, 1000,
	1200, 3000, 5050, 200, 700, 1000, 1500,
	1200, 300, 3500, 4000, 700, 1000, 1500,
	1200, 200, 3050, 400, 700, 2000, 1500,
	1000, 300, 3050, 400, 700, 2000, 1500,
];

$meses=array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");
$regression->train($samples, $labels);
//for($i=1;$i<=12;$i++){
$i=1; //testei mes a mes
$result = $regression->predict([[$i, 1], [$i, 2], [$i, 3], [$i, 4], [$i, 5], [$i, 6], [$i, 7]]);

echo "o melhor dia para postagem no mês ".$meses[$i-1]." é " . toDay(array_search(max($result), $result)) . "<br>";
//}
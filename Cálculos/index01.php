<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Distance\Euclidean;
use Phpml\Math\Distance\Manhattan;
use Phpml\Math\Distance\Chebyshev;
use Phpml\Math\Distance\Minkowski;

$a = [4, 6];
$b = [2, 5];

$euclidean = new Euclidean();
$result = $euclidean->distance($a, $b);
echo "distância euclidean: $result\n";

$manhattan = new Manhattan();
$result = $manhattan->distance($a, $b);
echo "distância manhattan: $result\n";

$chebyshev = new Chebyshev();
$result = $chebyshev->distance($a, $b);
echo "distância chebyshev: $result\n";

$minkowski = new Minkowski();
$result = $minkowski->distance($a, $b);
echo "distância minkowski: $result\n";

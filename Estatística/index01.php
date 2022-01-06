<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Math\Statistic\Correlation;
use Phpml\Math\Statistic\Mean;
use Phpml\Math\Statistic\StandardDeviation;

$x = [4, 1, 2];
$y = [6, 3, 5];
$result = Correlation::pearson($x, $y);
echo "correlação: " . $result . "\n";

$num = [1, 2, 3];
$result = Mean::median($num);
echo "média: " . $result . "\n";
$result = Mean::arithmetic($num);
echo "média: " . $result . "\n";

$population = [4, 5, 7, 6, 8];
$result = StandardDeviation::population($population);
echo "desvio padrão: " . $result . "\n";

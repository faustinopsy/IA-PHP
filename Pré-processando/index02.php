<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Preprocessing\Imputer;
use Phpml\Preprocessing\Imputer\Strategy\MeanStrategy;

$samples = [[-2], [-1], [null], [0], [1], [2]];

$imputer = new Imputer(null, new MeanStrategy(), Imputer::AXIS_COLUMN, $samples);
$imputer->transform($samples);

echo "-2:   "   . $samples[0][0] . "\n";
echo "-1:   "   . $samples[1][0] . "\n";
echo "null:  "  . $samples[2][0] . "\n";
echo " 0:    "  . $samples[3][0] . "\n";
echo " 1:    "  . $samples[4][0] . "\n";
echo " 2:    "  . $samples[5][0] . "\n";

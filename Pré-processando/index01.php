<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Preprocessing\Normalizer;

$samples = [[-2], [-1], [0], [1], [2]];

$normalizer = new Normalizer();
$normalizer->transform($samples);

echo "-2: "  . $samples[0][0] . "\n";
echo "-1: "  . $samples[1][0] . "\n";
echo " 0:  " . $samples[2][0] . "\n";
echo " 1:  " . $samples[3][0] . "\n";
echo " 2:  " . $samples[4][0] . "\n";

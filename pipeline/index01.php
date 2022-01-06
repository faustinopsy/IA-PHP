<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\SVC;
use Phpml\Association\Apriori;
use Phpml\Pipeline;

$estimator1 = new SVC();
$estimator2 = new Apriori();

$samples = [[0, 1], [2, 0], [7, 9], [9, 8]];
$targets = [0, 0, 1, 1];

$pipeline = new Pipeline([], $estimator1);
$pipeline->train($samples, $targets);

$predicted = $pipeline->predict([[0, 1]]);
echo "classificação svc: " . $predicted[0] . "\n";

$pipeline = new Pipeline([], $estimator2);
$pipeline->train($samples, []);

$predicted = $pipeline->predict([7]);
echo "associação apriori: " . $predicted[0][0] . "\n";

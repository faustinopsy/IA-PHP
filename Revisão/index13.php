<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Classification\MLPClassifier;
use Phpml\NeuralNetwork\Layer;
use Phpml\ModelManager;

$hiddenLayer1 = new Layer(2);
$hiddenLayer2 = new Layer(2);
$mlp = new MLPClassifier(1, [$hiddenLayer1, $hiddenLayer2], [0, 1]);

$samples = [[0], [1], [10], [20]];
$labels = [0, 0, 1, 1];

$mlp->train($samples, $labels);

$filepath = __DIR__ . '/treino/modelo';
$model = new ModelManager();
$model->saveToFile($mlp, $filepath);

if(file_exists($filepath)) echo "modelo salvo com sucesso.";

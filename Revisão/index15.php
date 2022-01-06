<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Dataset\CsvDataset;
use Phpml\Math\Statistic\Correlation;

$dataset = new CsvDataset(__DIR__ . '/dataset/dados.csv', 7, true);
$data = $dataset->getSamples();

$y = [];
for($i=0; $i<count($data); $i++) $y[] = $data[$i][6];

for($i=0; $i<count($data); $i++) $x[] = $data[$i][1];
echo "correlação do RH com a RECEITA é: " . round(Correlation::pearson($x, $y)*100) . "%\n"; $x = [];

for($i=0; $i<count($data); $i++) $x[] = $data[$i][2];
echo "correlação do Comercial com a RECEITA é: " . round(Correlation::pearson($x, $y)*100) . "%\n"; $x = [];

for($i=0; $i<count($data); $i++) $x[] = $data[$i][3];
echo "correlação das Vendas com a RECEITA é: " . round(Correlation::pearson($x, $y)*100) . "%\n"; $x = [];

for($i=0; $i<count($data); $i++) $x[] = $data[$i][4];
echo "correlação da Infraestrutura com a RECEITA é: " . round(Correlation::pearson($x, $y)*100) . "%\n"; $x = [];

for($i=0; $i<count($data); $i++) $x[] = $data[$i][5];
echo "correlação da Propaganda com a RECEITA é: " . round(Correlation::pearson($x, $y)*100) . "%\n";

<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\Association\Apriori;

$apriori = new Apriori();

$samples = [
	['maçã', 'pera', 'melancia', 'abacaxi'],
	['alface', 'brócolis', 'couve', 'rúcula'],
	['tomate', 'cenoura', 'mandioca', 'batata'],
	['arroz', 'feijão', 'soja', 'melho']
];

$apriori->train($samples, []);

$input = ['brócolis'];
$result = $apriori->predict($input);
//print_r($result);
$result = $result[count($result)-1];
echo "$input[0] está associado a: ";
$text = '';
for($i=0; $i<count($result); $i++)
	if($i!=count($result)-1)
		$text .= "$result[$i], ";
	else
		$text .= "e $result[$i]";
$text = str_replace(', e ', ' e ', $text);
echo $text . "\n";

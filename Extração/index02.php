<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;
use Phpml\FeatureExtraction\TfIdfTransformer;

$samples = [['Olá, bom dia!'], ['Bom dia, tudo bem com você?']];

$vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());
for($i=0; $i<count($samples); $i++) {
	$vectorizer->fit($samples[$i]);
	$result = $vectorizer->getVocabulary();
	$vectorizer->transform($result);

	$transformer = new TfIdfTransformer($result);
	$transformer->transform($result);

	echo "importância da " . ($i+1) . "º frase: " . $result[0][0] . "\n";
}

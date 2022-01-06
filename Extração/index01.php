<?php
require_once __DIR__ . '/vendor/autoload.php';
use Phpml\FeatureExtraction\TokenCountVectorizer;
use Phpml\Tokenization\WhitespaceTokenizer;

$samples = ['Olá, bom dia!', 'Bom dia, tudo bem com você?'];

$vectorizer = new TokenCountVectorizer(new WhitespaceTokenizer());

$vectorizer->fit($samples);
$result = $vectorizer->getVocabulary();

print_r($result);

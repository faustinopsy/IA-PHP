<?php
if(isset($_GET['imagem'])&&!empty($_GET['imagem'])) $imagem = $_GET['imagem'];
else $imagem = 'img/exemples/acao/img01.jpg';

use Phpml\Association\Apriori;
$associator = new Apriori();

$dirAcao = 'img/exemples/acao/';
$acao = [
	$dirAcao . 'img01.jpg', $dirAcao . 'img02.jpg',
	$dirAcao . 'img03.jpg', $dirAcao . 'img04.jpg',
	$dirAcao . 'img05.jpg'
];
$dirComedia = 'img/exemples/comedia/';
$comedia = [
	$dirComedia . 'img01.jpg', $dirComedia . 'img02.jpg',
	$dirComedia . 'img03.jpg', $dirComedia . 'img04.jpg',
	$dirComedia . 'img05.jpg'
];
$dirDrama = 'img/exemples/drama/';
$drama = [
	$dirDrama . 'img01.jpg', $dirDrama . 'img02.jpg',
	$dirDrama . 'img03.jpg', $dirDrama . 'img04.jpg',
	$dirDrama . 'img05.jpg'
];

$samples = [$acao, $comedia, $drama];
$associator->train($samples, []);
$result = $associator->predict([$imagem]);
?>

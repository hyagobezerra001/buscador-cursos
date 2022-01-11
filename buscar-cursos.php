<?php

require 'vendor/autoload.php';

use Alura\Buscador\Buscador;
use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;


$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscado = new Buscador($client, $crawler);
$cursos = $buscado->buscar('/cursos-online-programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}

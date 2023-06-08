<?php

// Carrega a biblioteca Tesseract OCR
require_once './vendor/autoload.php';
use thiagoalessio\TesseractOCR\TesseractOCR;

// Define o caminho para a imagem contendo o texto
$imagePath = 'imagem.jpg';

// Instancia o objeto TesseractOCR e define a linguagem para o reconhecimento de caracteres
$tesseract = new TesseractOCR($imagePath);
$tesseract->setLanguage('por');

// Executa o OCR na imagem e retorna o texto reconhecido
$textoReconhecido = $tesseract->run();

// Imprime o texto reconhecido na tela
echo $textoReconhecido;

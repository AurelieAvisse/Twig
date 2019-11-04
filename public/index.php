<?php
require __DIR__ . '/../vendor/autoload.php';

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;
use Twig\Loader\FilesystemLoader;

$loader = new FilesystemLoader(__DIR__ . '/../src/View');
$twig = new Environment($loader);

$products = ['chocolat', 'fraise', 'framboise', 'caramel', 'nougat'];

try {
    $template = $twig->load('index.html.twig');
} catch ( LoaderError $e ) {
} catch ( RuntimeError $e ) {
} catch ( SyntaxError $e ) {
}

echo $template->render([
'products'=> $products
]);




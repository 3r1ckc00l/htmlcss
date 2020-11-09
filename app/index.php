<?php 

require_once '../vendor/autoload.php';

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader('../views/');

$twig = new Environment($loader);

echo $twig->render('page.html.twig', ['text' => 'Fabien']);

?>

<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Views\PhpRenderer;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->setBasePath('/cps530-project/public');
$renderer = new PhpRenderer('../templates', ['title' => 'Hello Groceries', 'basePath' => '/cps530-project/public'], 'baseLayout.php');

$app->get('/', function (Request $request, Response $response, $args) use ($renderer) {
    return $renderer->render($response, "exampleContent.php", ['exampleVariable' => 'Example Variable']);
});

$app->run();

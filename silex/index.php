<?php
require 'vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/app/views',
));


$app->get('/', 'MyApp\Controller\Home::SayHello');

$app->post('/testPageForm', 'MyApp\Controller\Home::Form');


$app->run();
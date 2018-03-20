<?php
require 'vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;


$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/app/views',
));


$app->get('/', 'MyApp\Controller\Home::SayHello');

$app->post('/testPageForm', 'MyApp\Controller\Home::Form');
// route
$app->get('/hello/{firstname}/{lastname}', 'MyApp\Controller\Bonjour::SayHello');


// route
$app->get('/Products/{coucou1}/{coucou2}', 'MyApp\Controller\Products::sayHello');

$app->get('/flickr', 'MyApp\Controller\Flickr::httpGetMethod');

$app->post('/flickr', 'MyApp\Controller\Flickr::httpPostMethod');

$app->run();
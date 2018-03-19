<?php

require 'vendor/autoload.php';

/*$oHello = new MyApp\Controller\Test();
$oHello->sayHello();

echo '<br />';

$oHello->sayGoodBye();*/
$app = new Silex\Application();
$app['debug'] = true;

//https://silex.symfony.com/doc/2.0/providers/twig.html
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', 'MyApp\Controller\Home::SayHello');


$app->run();
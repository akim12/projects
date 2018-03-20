<?php
namespace MyApp\Controller;

use Silex\Application AS App;
use Symfony\Component\HttpFoundation\Request;

class Flickr
{
	
	public function httpGetMethod(App $app, Request $request)
    {
    echo $request->request->get('theme');
	//var_dump($request->request->get('firstname'));

    	$toto = new  \MyApp\Model\Flickr();
    	$toto->getPictures();






    	return $app['twig']->render('flickr.twig');
    }





	public function httpPostMethod(App $app, Request $request)
    {
    	var_dump($request->request->get('theme'));

    	$toto = new  \MyApp\Model\Flickr();
    	$toto->getPictures();

    	return $app['twig']->render('flickr.twig');

    }


}


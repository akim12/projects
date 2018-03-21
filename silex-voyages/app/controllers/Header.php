<?php

namespace MyApp\Controller;

use Silex\Application AS AppSilex;
use Symfony\Component\HttpFoundation\Request;

class Header
{
	public function sayHello(AppSilex $app, Request $request)
    {
    	return $app['twig']->render('header.twig');
    }
    

}

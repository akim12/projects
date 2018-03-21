<?php

namespace MyApp\Controller;

use Silex\Application AS AppSilex;

use Symfony\Component\HttpFoundation\Request;

class Home
{
	public function sayHello(AppSilex $app, Request $request)
    {
    	return $app['twig']->render('home.twig');
    }
    
    public function Form(AppSilex $app, Request $request)
    {
    	var_dump($request->request->get('firstname'));
        var_dump($request->request->get('lastname'));
        exit();
    }
}

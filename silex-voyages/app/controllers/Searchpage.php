<?php

namespace MyApp\Controller;

use Silex\Application AS AppSilex;
use Symfony\Component\HttpFoundation\Request;

class Searchpage
{
	public function searchPage(AppSilex $app, Request $request)
    {
    	return $app['twig']->render('searchpage.twig');
    }

}

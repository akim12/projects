<?php
/**
* 
*/
namespace MyApp\Controller;

class Bonjour
{
	
	public function sayHello($lastname, $firstname)
	{
		return 'bonjour'.' '.$lastname. ' '.$firstname;
	}
}

//$app->get('/hello/{firstname}/{lastname}', 'MyApp\Controller\Bonjour::SayHello');
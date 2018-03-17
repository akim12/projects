<?php

class HomeController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        
        $oMeal = new MealModel();
        return [
            'flashBag' => new FlashBag(),
            'meals' => $oMeal->listAll()
        ];
        //var_dump($aDb);


    	/*
    	 * Méthode appelée en cas de requête HTTP GET
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $queryFields contient l'équivalent de $_GET en PHP natif.
    	 */

       //return ['name'=>$queryFields['firstname']];
       //return $toto;
    }

    public function httpPostMethod(Http $http, array $formFields)
    {
    	/*
    	 * Méthode appelée en cas de requête HTTP POST
    	 *
    	 * L'argument $http est un objet permettant de faire des redirections etc.
    	 * L'argument $formFields contient l'équivalent de $_POST en PHP natif.
    	 */
    }
}
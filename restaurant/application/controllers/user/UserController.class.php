<?php

class UserController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {




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
        $oUser = new UserModel();
        $oUser->add($formFields);
        
        $oSessionFlash = new FlashBag();
        $oSessionFlash->add('Vous êtes maintenant inscrit sur notre site.');
        
        
        $mResult = $oUser->login($formFields);

        if ($mResult !== false)
        {
            $oUserSession = new UserSession();
            $oUserSession->create($mResult['Id'], $mResult['FirstName'], $mResult['LastName'], $mResult['Email']);
        }  
        $http->redirectTo('/');
    }
}

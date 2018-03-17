<?php

class LoginController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        $oUserSession = new UserSession();
        
        if($oUserSession->isAuthenticated()) {
            $http->redirectTo('/');
        }



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
        //var_dump($formFields);

      $oUser = new UserModel();
        $mResult = $oUser->login($formFields);
        
        if ($mResult !== false)
        {
            echo 'Mot de passe valide';
           
           // écriture en session
            $oUserSession = new UserSession();
             $oUserSession->create(
                $mResult['Id'],
                $mResult['FirstName'],
                $mResult['LastName'],
                $mResult['Email']
              );

             echo '<h2>email en session ::: </h2>'.$oUserSession->getEmail();
             echo '<h2>firstname en session ::: </h2>'.$oUserSession->getFirstName();

            $oSessionFlash = new FlashBag();
            $oSessionFlash->add('Vous êtes connecté.');


        $http->redirectTo('/');
        }
        else {
            echo 'Vos identifiants sont incorrects';
        }

    }
}
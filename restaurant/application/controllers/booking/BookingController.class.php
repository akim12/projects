<?php

class BookingController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
 
    }

    
    public function httpPostMethod(Http $http, array $formFields)
    {

        //var_dump($formFields);
        $oUser = new UserSession();
        $User_Id = $oUser->getUserId();
        
        $formFields['heure']= $formFields['heure']
        .':'.$formFields['minute'];

        $formFields['Id'] = $User_Id;
        //echo 'heure : '.$formFields['heure'].'<br>Id dans session : '.$formFields['Id'];

        // enregistrement de la réservation
        $oBookingSave = new BookingModel();
        $oBookingSave->add($formFields);
    }
}

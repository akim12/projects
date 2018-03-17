<?php

class AddproductController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        if(isset($queryFields["idProd"])){
           $mealModel = new MealModel();
           $meal= $mealModel->listOne($queryFields['idProd']);
            return ['_default_layout' => "layout/LayoutAdminView.phtml", "idProd"=>$queryFields["idProd"], "meal"=>$meal];
        }

        return ['_default_layout' => "layout/LayoutAdminView.phtml"];
    }
    
    
    public function httpPostMethod(Http $http, array $formFields)
    {
        $photo = 'no-photo.png';
        if($http->hasUploadedFile('photo') == true) // test s'il y'a une photo à charger
        {
            $photo = $http->moveUploadedFile('photo', '/images/meals');
            // la fonction return le nom de l'image
        }

        $mealModel = new MealModel();

        if(isset($formFields["idProd"])){

            if($photo == "no-photo.png"){ // si l'utilisateur n'a pas selectionner de photo
                $dataProd = $mealModel->listOne($formFields["idProd"]);
                $photo = $dataProd["Photo"];
            }

            // modification
            $mealModel->update
            (
                $formFields['idProd'],
                $formFields['name'],
                $formFields['description'],
                $photo,
                $formFields['qte'],
                $formFields['buyPrice'],
                $formFields['salePrice']
            );
        } else {
            // ajout
            $mealModel->create
            (
                $formFields['name'],
                $formFields['description'],
                $photo,
                $formFields['qte'],
                $formFields['buyPrice'],
                $formFields['salePrice']
            );
        }

        $http->redirectTo('/admin');
    }
}

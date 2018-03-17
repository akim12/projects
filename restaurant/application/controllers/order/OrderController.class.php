<?php

class OrderController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {



        // Récupération de tous les produits alimentaires.
        $mealModel = new MealModel();
        $meals     = $mealModel->listAll();

        return
        [
            'meals'    => $meals,
        ];
    }




    public function httpPostMethod(Http $http, array $formFields)
    {


    }
}

<?php

class AdminController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
    if(isset($queryFields["delProd"])){
       $mealModel = new MealModel();
       $meals = $mealModel->deleteProductMeal($queryFields['delProd']);

     $oMeal = new MealModel();
        return [
            'flashBag' => new FlashBag(),
            'meals' => $oMeal->listAll(),
            '_default_layout' => "layout/LayoutAdminView.phtml",
            "delProd"=>$queryFields["delProd"]
        ];
    }

    $oMeal = new MealModel();
        return [
            'flashBag' => new FlashBag(),
            'meals' => $oMeal->listAll(),
            '_default_layout' => "layout/LayoutAdminView.phtml"
        ];
      }
        
    public function httpPostMethod(Http $http, array $formFields)
    {
       
       
      
    }



}

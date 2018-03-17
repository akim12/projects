<?php

class BasketController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {
        //print_r($queryFields);
        //die();
       
        // ICI on doit enregistrer en SESSION ($_SESSION['basket'])
        $oBasketSession = new BasketSession();

        // suppression d'un produit
        if (isset($queryFields['id_delete'])) {
            $oBasketSession->delete($queryFields['id_delete']);
        }
        $aProducts = [];
        $aBasket = $oBasketSession->getBasket();



        $oMealModel = new MealModel();
        foreach ($aBasket as $iProduct => $iQty)
        {
            $aInfosProduct = $oMealModel->listOne($iProduct);
            $aInfosProduct['Quantite'] = $iQty;
           
           
            array_push($aProducts, $aInfosProduct); 
        }
       
       return ['_raw_template' => true ,'aProducts' => $aProducts];


    }
    
    
    public function httpPostMethod(Http $http, array $formFields)
    {
        // ICI on doit enregistrer en SESSION ($_SESSION['basket'])
        $oBasketSession = new BasketSession();
        
        if (isset($formFields['id']) && isset($formFields['qty'])) {
            $oBasketSession->create($formFields['id'], $formFields['qty']);
        }
        $aProducts = [];
        $aBasket = $oBasketSession->getBasket();


        $oMealModel = new MealModel();
        foreach ($aBasket as $iProduct => $iQty)
        {
            $aInfosProduct = $oMealModel->listOne($iProduct);
            $aInfosProduct['Quantite'] = $iQty;
           
           
            array_push($aProducts, $aInfosProduct); 
        }
       
       return ['_raw_template' => true ,'aProducts' => $aProducts];
    }



}

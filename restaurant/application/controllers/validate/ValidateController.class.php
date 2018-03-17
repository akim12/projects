<?php

class ValidateController
{
    public function httpGetMethod(Http $http, array $queryFields)
    {

        $oBasketSession = new BasketSession();

        $aProducts = [];
        $aBasket = $oBasketSession->getBasket();

        $oMealModel = new MealModel();
        foreach ($aBasket as $iProduct => $iQty)
        {
            $aInfosProduct = $oMealModel->listOne($iProduct);
            $aInfosProduct['Quantite'] = $iQty;
            array_push($aProducts, $aInfosProduct); 
        }
       
       //var_dump($aProducts);

        if(isset($queryFields['order']))
        {
        $totalAmount = 0;
       foreach ($aProducts as $aProduct) {
       $totalAmount =  $totalAmount + $aProduct['SalePrice']*$aProduct['Quantite'];
        }

       $oUserSession = new UserSession();
       $oUserSession->getUserId();

     
        $aTabOrder['User_Id']=$oUserSession->getUserId();
        $userId = $aTabOrder['User_Id'];// User 
        $taxRate=20;// TVA
        $TaxAmont=($totalAmount*$taxRate)/100;// MontTVA
      
        $sendValidateOrder = new ValidateModel();
        $idOrder = $sendValidateOrder->addOrder($userId, $totalAmount, $taxRate, $TaxAmont);
        echo '<br><br><br>';
        
        // GENERATION ORDER DETAILS TABLE
        //Envoye des éléments produits et order id
        $addOrderLine = new ValidateModel();
        foreach ($aProducts as $aProduct) 
        {
            $addOrderLine->addOrderLine(
            $idOrder, $aProduct);
        }
        // affichage du message panier vidé !
        $flashBag = new FlashBag();
        $flashBag->add('panier vidé !');
        //redi home

       return ['aProducts' => $aProducts];
      
       //$http->redirectTo('/');
   }
    }
    
    
    public function httpPostMethod(Http $http, array $formFields)
    {

        var_dump($formFields);

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
       
      
    }



}

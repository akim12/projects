<?php
class ValidateModel {

    public function addOrder($userId, $totalAmount, $taxRate, $taxAmont)
    {
    	$oDb = new Database();
       	return $oDb->executeSql('INSERT INTO `Order`(
          `User_Id`, 
          `TotalAmount`,
          `TaxRate`,
          `TaxAmount`,
          `CreationTimestamp`,
          CompleteTimestamp)
       		VALUES(?,?,?,?, NOW(), NOW())',
          [$userId, 
            $totalAmount,
            $taxRate, 
            $taxAmont]);
    }
   public function addOrderLine($idOrder, $aProduct)
    {
		$oDb = new Database();
		foreach ($aProduct as $key => $value) {
			echo $key . ' :: ' .$value.'<br>';
		return $oDb->executeSql('INSERT INTO `OrderLine`(
          `QuantityOrdered`, 
          `Meal_Id`,
          `Order_Id`,
          `PriceEach`)
       		VALUES(?,?,?,?)',
           [$aProduct['Quantite'], 
            $aProduct['Id'], 
            $idOrder, 
            $aProduct['SalePrice']]);
		}
	}
 }

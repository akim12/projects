<?php


class MealModel
{
	public function listAll()
	{
		$oDb = new Database();
		return $oDb->query('SELECT * FROM Meal');
	}

    public function listOne($iId)
    {
    	$oDb = new Database();
       	return $oDb->queryOne('SELECT  `Id`, `Name`, `Photo`, `Description`, `QuantityInStock`, `BuyPrice`, `SalePrice` FROM Meal WHERE Id=?', [$iId]);
    }

    public function addProduct(array $formFields)
    {
    	$oDb = new Database();
       	return $oDb->executeSql('INSERT INTO Meal(`Name`, `Photo`, `Description`, `QuantityInStock`, `BuyPrice`, SalePrice)
       		VALUES(?,?,?,?,?,?)',[
          $formFields['name'],
          $formFields['Photo'], 
          $formFields['description'], 
          $formFields['qte'], 
          $formFields['buyPrice'],
          $formFields['salePrice']
          ]);
    }

    public function update($id, $name, $description, $photo, $initialStock, $buyPrice, $salePrice)
    {
        $sql = 'UPDATE Meal SET 
            Name = ?,
            Description = ?,
            Photo = ?,
            BuyPrice = ?,
            SalePrice = ?,
            QuantityInStock = ?
        WHERE Id = ?';

        // Insertion du produit alimentaire dans la base de données.
        $database = new Database();
        $database->executeSql($sql,
            [
                $name,
                $description,
                $photo,
                $buyPrice,
                $salePrice,
                $initialStock,
                $id
            ]);
    }



public function create($name, $description, $photo, $initialStock, $buyPrice, $salePrice)
{
    $sql = 'INSERT INTO Meal
    (
        Name,
        Description,
        Photo,
        BuyPrice,
        SalePrice,
        QuantityInStock
    ) VALUES (?, ?, ?, ?, ?, ?)';

    // Insertion du produit alimentaire dans la base de données.
    $database = new Database();
    // executeSql : insertions ou des modifications
    $database->executeSql($sql,
        [
            $name,
            $description,
            $photo,
            $buyPrice,
            $salePrice,
            $initialStock
        ]);
}


    public function deleteProductMeal($delProd)
    {
        $sql = 'DELETE FROM Meal WHERE Id = ?';
        // Suppression dans la base de données.
        $database = new Database();
        $database->executeSql($sql,[$delProd]);
    }


}





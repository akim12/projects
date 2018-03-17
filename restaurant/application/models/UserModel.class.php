<?php
class UserModel {

	public function add(array $aInfosUser)
    {     
       
        $oDb = new Database();
        
        
        // On vérifie si l'Email n'existe pas déjà
        $mExists = $oDb->queryOne('SELECT `Id` FROM `User` WHERE `Email`=?', [$aInfosUser['email']]);
        
        // si il n'existe pas ...
        if (empty($mExists)) {    
        
        	$aInfosUser['password'] = $this->hashPassword($aInfosUser['password']);
            
        	// ... on peut enregistrer notre utilisateur
            $oDb->executeSql(
                'INSERT INTO `User` 
                    (`FirstName`, `LastName`, `Email`, `Password`, 
                        `BirthDate`, `Address`, `City`, `ZipCode`, 
                        `Country`, `Phone`, `CreationTimestamp`)
                    VALUES(?,?,?,?,?,?,?,?,?,?, NOW())', 
                [
                    $aInfosUser['prenom'],
                    $aInfosUser['nom'],
                    $aInfosUser['email'],
                    $aInfosUser['password'],
                    $aInfosUser['date_naissance'],
                    $aInfosUser['adresse'],
                    $aInfosUser['ville'],
                    $aInfosUser['code_postal'],
                    $aInfosUser['pays'],
                    $aInfosUser['telephone']
                ]
            );        
        }
                
    }
    
    
    public function login($aInfosConnect)
    {
    	 $oDb = new Database();
         
         $mUser = $oDb->queryOne('SELECT * FROM `User` WHERE `Email`=?', [$aInfosConnect['email']]);
         
         if (!empty($mUser)) {
         	
            if (password_verify($aInfosConnect['password'], $mUser['Password'])) {
            	return $mUser;
            }
         
         }
         
         
         return false;
    }
    
    
    private function hashPassword($sPassword)
    {    	
     	return password_hash($sPassword, PASSWORD_DEFAULT);
    }
    
}





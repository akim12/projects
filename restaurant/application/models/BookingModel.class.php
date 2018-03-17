<?php
class BookingModel {

   public function add(array $aInfosBooking)
    {     
        $oDb = new Database();
     
        
        // si il n'existe pas ...
    
            // ... on peut enregistrer notre utilisateur
            $oDb->executeSql(
                'INSERT INTO `Booking` 
                    (
                    `BookingDate`, 
                    `BookingTime`,
                    `NumberOfSeats`,
                    `User_Id`,
                    `CreationTimestamp`
                     )
                    VALUES(?,?,?,?, NOW())', 
                [
                    $aInfosBooking['date'],
                    $aInfosBooking['heure'],
                    $aInfosBooking['nb_couverts'],
                    $aInfosBooking['Id']
                ]
            );        
      
                
    }
    
}
<?php


class BookingModel
{
	public function create(
		$userId,
		$bookingDate,
        $bookingTime,
		$numberOfSeats)
	{
		$sql = "INSERT INTO Booking
        (
			User_Id,
			BookingDate,
			BookingTime,
			CreationTimestamp,
			NumberOfSeats
		) VALUES (?, ?, ?, NOW(), ?)";

        // Insertion de la r\Uffffffffrvation dans la base de donn\Uffffffff.
        $database = new Database();
		$database->executeSql($sql,
		[
            $userId,
            $bookingDate,
            $bookingTime,
            $numberOfSeats
		]);

        // Ajout d'un message de notification.
        $flashBag = new FlashBag();
        $flashBag->add('Votre r\Uffffffffrvation est bien enregistr\Uffffffff nous vous en remercions.');
	}
}
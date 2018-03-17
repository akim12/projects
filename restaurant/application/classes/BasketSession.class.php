<?php

class BasketSession
{
	public function __construct()
	{
		if(session_status() == PHP_SESSION_NONE)
		{
            // Démarrage du module PHP de gestion des sessions.
			session_start();
		}
	}

    public function create($iIdProduct, $iQty)
    {
        // Construction de la session basket.
        if(!isset($_SESSION['basket'][$iIdProduct])) {
        	$_SESSION['basket'][$iIdProduct] = 0;
        }
        
        $_SESSION['basket'][$iIdProduct] += $iQty;
    }

    public function destroy()
    {
        $_SESSION['basket'] = array();
    }
    
    public function getBasket()
    {
    	if (isset($_SESSION['basket'])) {
        	return $_SESSION['basket'];
        }
        return []; // sinon on retourne un tableau vide
    }

    public function delete($iIdProduct)
    {
        unset($_SESSION['basket'][$iIdProduct]);

    }
}


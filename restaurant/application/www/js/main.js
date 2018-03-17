'use strict';

/////////////////////////////////////////////////////////////////////////////////////////
// FONCTIONS                                                                           //
/////////////////////////////////////////////////////////////////////////////////////////

$(function(){
	
    $("#add_basket").on('click', onAddBasket);

    // suppression d'un produit
    $("#basket").on('click','.deleteProd', onDelProduct);
   $("#validate_order").on('click', validateOrder);
    $(".update").on('click', updateProduct);
    

   
    $("#meal").on('change', onChangeMeal);
	$("#meal").trigger('change');
    
    // si la fonction loadBasket existe on est dans la page order
    if(typeof loadBasket != 'undefined')
    {
    	loadBasket();
    }
});


/////////////////////////////////////////////////////////////////////////////////////////
// CODE PRINCIPAL                                                                      //
/////////////////////////////////////////////////////////////////////////////////////////


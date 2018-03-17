
function onChangeMeal(event)
{
	// Vous devez faire une requete Ajax (getJSON)
    // URL = getRequestUrl()+'/meal'
    // il serait peut être judicieux d'envoyer l'id du menu sélectionné ?!?
    $.getJSON(getRequestUrl()+'/meal', { id : $("#meal").val() } ,onAjaxChangeMeal);
    
    //$.getJSON(getRequestUrl()+'/meal?id='+$("#meal").val() ,onAjaxChangeMeal);
    
}

function onAjaxChangeMeal(Data)
{
    //console.log(Data);
    $('#pic').attr("src", getWwwUrl() +'/images/meals/'+Data.Photo);
    $("#description").html(Data.Description);
    $("#price").text(Data.SalePrice);
}

function loadBasket()
{
	$.post(getRequestUrl()+'/basket', printBasket);
}

function onAddBasket(event)
{
	$.post(getRequestUrl()+'/basket',{id : $("#meal").val(),
									  qty : $("#quantity").val() }, printBasket);
}


function printBasket(Data)
{
	$('#basket').html(Data);
}

function printBasket(Data)
{
    $('#basket').html(Data);
}

function onDelProduct(event){
    event.preventDefault();
    //alert($(this).attr("data-id"));
    $.get(getRequestUrl()+'/basket', { "id_delete" : $(this).attr("data-id") }, printBasket);

    //console.log('suppression détecter');
}

function validateOrder(){
    $.get(getRequestUrl()+'/validate?order=validate');

}

function updateProduct(){
    window.location.href = getRequestUrl()+"/admin/addproduct?idProd=" + $(this).attr("data-id");
    //$.get(getRequestUrl()+'/addproduct', { "id_delete" : $(this).attr("data-id") }, printBasket);
}


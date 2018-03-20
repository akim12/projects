<?php
/*
https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=814772198ec9aa500687da8dcc184605&format=json&per_page=2&tags=avion



https://www.flickr.com/services/api/misc.urls.html



infos sur la base url = https://www.flickr.com/services/api/request.rest.html
https://www.flickr.com/services/api/response.json.html
api_key (is required) https://www.flickr.com/services/api/flickr.photos.search.html



https://api.flickr.com/services/rest/?method=
https://www.flickr.com/services/api/request.rest.html

*/

//api key : 814772198ec9aa500687da8dcc184605
namespace MyApp\Model;

class Flickr
{
	
	function getPictures()
	{

	echo file_get_contents('https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=814772198ec9aa500687da8dcc184605&format=json&per_page=2&tags=avion');



	}
}

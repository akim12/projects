<?php

		$tag='cat';
		$url='https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=814772198ec9aa500687da8dcc184605&tags=cats&perPage=3&format=json&nojsoncallback=1';

		$data =file_get_contents($url);
		var_dump($data);

		$atab=json_decode($data);
		//echo $atab->photos->farm;
		echo $atab->photos->page;
		echo $atab->photos->total;





		https://farm{farm-id}.staticflickr.com/{server-id}/{id}_{secret}.jpg

		/*die();
		
		$data=json_decode($data);
		echo $photo->total;
		/*die();
		
		$photos=$data->photos->photo;
	

		
		foreach ($photos as $photo) {
			print_r($photo);
			echo '<h1>'.$photo.'</h1>';
			}*/


/*
https://api.flickr.com/services/rest/?method=flickr.photos.search&api_key=814772198ec9aa500687da8dcc184605&format=json&per_page=2&tags=avion



https://www.flickr.com/services/api/misc.urls.html



infos sur la base url = https://www.flickr.com/services/api/request.rest.html
https://www.flickr.com/services/api/response.json.html
api_key (is required) https://www.flickr.com/services/api/flickr.photos.search.html



https://api.flickr.com/services/rest/?method=
https://www.flickr.com/services/api/request.rest.html

*/






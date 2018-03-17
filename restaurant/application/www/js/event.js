'use strict';

function onClickButton()
{
	$("#target").empty();
	
	console.log('choice : '+ $('[name="choice"]:checked').val());

	switch( $('[name="choice"]:checked').val()) {
	    case '1':
	        $.get('hello_world.html', retourHtml);
	        break;

	    case '2':
	        $.getJSON('php/hello_world-json.php', jsonDisplay);
	        break;

	    case '3':
	        $.get('php/movies.php', getMovies);
	        break;

	    case '4':
	        $.get('php/movies.php', {movie : $("#movie_name").val() }, searchMovie);
	        break;
	    default:
	        // $.get('hello_wordl-img.html', retourHtml);
	        break;
	}


}


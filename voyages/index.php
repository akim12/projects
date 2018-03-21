<!DOCTYPE html>
<html>
<head>
	<title>exemple</title>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="js/jquery.flexslider-min.js"></script>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/flexslider.css">
	<link href="https://fonts.googleapis.com/css?family=Candal|Open+Sans" rel="stylesheet">
</head>
<body>
<div class="wrapper">
<header>
	<div class="container-1">
		<div class="box-1">
			<img src="img/logo-forest-travel.png"">
		</div>
		<div class="box-2">
			<img src="img/contact-header.jpg">
			</div>
			<div class="box-3">
					<div class="news smallTxt">NEWSLETTER</div>
					Recevez toutes nos offres exclusives avant-premières
				
					<form action="" method="post">
						<input type="text" name="newlster">
						<input type="submit" name="inscription_news" value="je m'inscris">
					</form>
				</div>
	</div>
	<div class="container-2">
			<div class="container-2-box">
				<nav>
				<ul>
				<li><i class="fa fa-home"></i></li>
					<li><a href="">Séjour</a></li>
					<li><a href="">Ski</a></li>
					<li><a href="">Camping</a></li>
					<li><a href="">Promos</li>
					<li><a href="">Nos agences</a></li>
					<li><a href="">Dernières minutes</a></li>
					<li><a href="">Notre sélection</a></li>
					<li><a href="">Vente flash</a> </li>
				</ul>
				</nav>
			</div>

	</div>
</header>

<div class="container_main_aside">
	<main>
		<div class="box_slider">
			<img src="img/slider/1.jpg">
		</div>


			<div class="container-row">
				<div class="box-derniere-min">
					<h2 class="blueTxt">DERNIÈRE MINUTE SÉJOURS</h2>
					<div class="container-row">
					<img src="img/La-Perla-piscine.jpg" width="120" height="100">
					<div class="tabCom">
					<ul>
						<li><p class="blueTxt bold">Canaries</p></li>
						<li>7 nuits</li>
						<li>Départs de Paris</li>
					</ul>
					</div>
					<div class="tabComPrice">
						<span class="smallTxt">à partir de </span>
						<span class="price blueTxt">359€</span>
						<span class="smallTxt">par  personne </span><br><br>
						<span class="pourcent">-45%</span>
					</div>
					</div>

					<div class="container-row">
					<img src="img/maroc.jpg" width="120" height="100">
					<div class="tabCom">
					<ul>
						<li><p class="blueTxt bold">Canaries</p></li>
						<li>7 nuits</li>
						<li>Départs de Paris</li>
					</ul>
					</div>
					<div class="tabComPrice">
						<span class="smallTxt">à partir de </span>
						<span class="price blueTxt">416€</span>
						<span class="smallTxt">par  personne </span><br><br>
						<span class="pourcent">-15%</span>
					</div>
					</div>
				</div>

<div class="box-derniere-min">
	<h2 class="blueTxt">WEEK-ENDS</h2>
	<div class="container-row">
		<img src="img/La-Perla-piscine.jpg" width="120" height="100">
		<div class="tabCom">
		<ul>
			<li><p class="blueTxt bold">Venise</p></li>
			<li>2 nuits</li>
			<li>Départs de Marseille</li>
		</ul>
		</div>
		<div class="tabComPrice">
			<span class="smallTxt">à partir de </span>
			<span class="price blueTxt">292€</span>
			<span class="smallTxt">par personne</span><br><br>
			<span class="pourcent">-60%</span>
		</div>
		</div>

		<div class="container-row">
		<img src="img/new-york.jpg" width="120" height="100">
		<div class="tabCom">
		<ul>
			<li><p class="blueTxt bold">New-York</p></li>
			<li>3 nuits</li>
			<li>Départs de Paris</li>
		</ul>
		</div>
		<div class="tabComPrice">
			<span class="smallTxt">à partir de </span>
			<span class="price blueTxt">744€</span>
			<span class="smallTxt">par personne</span><br><br>
			<span class="pourcent">-8%</span>
		</div>
		</div>
		


</div>


		

	</main>




<div class="col-right">

	<div class="search_travel_form">
	<div class="search-icon">
		<i class="fa fa-search"></i>
	</div>
		<form>

		<h2>
			<label class="bold blueTxt">Trouver votre voyage</label></h2>
			<select name="travSelect">
				<option value="maroc" selected>Destinations</option>
				<option value="maroc">Maroc</option>
				<option value="Espagne">Espagne</option>
				<option value="Canada">Canada</option>
				<option value="USA">USA</option>
				<option value="turquie">Turquie</option>
				<option value="inde">Inde</option>
			</select>


		<div>
			<select name="jours">
			<?php for ($i=1; $i <= 31 ; $i++) { ?>
			<option>
				<?php echo $i;?>
			</option>
			<?php } ?>
			</select>
		
			<select name="travSelect">
				<option value="mois depart" selected>Mois de départ</option>
				<option value="Mars 2018">Mars 2018</option>
				<option value="Avril 2018">Avril 2018</option>
				<option value="Mai 2018">Mai 2018</option>
				<option value="Juin 2018">Juin 2018</option>
				<option value="Juillet 2018">Juillet 2018</option>
			</select>
			<br><br>
			<label>date de départ :</label>
			<input type="date" name="date">
			<br><br>
			<select name="duree">
				<option selected="duree">Durée</option>
				<option value="paris">1 Nuit</option>
				<option value="beauvais">2 Nuits</option>
				<option value="nantes">3 à 6 Nuits</option>
				<option value="toulouse">moins d'une semaine</option>
				<option value="marseille">Une semaine</option>
			</select>

			<select name="cityStart">
				<option selected="cityStart">Ville de départ</option>
				<option value="paris">Paris</option>
				<option value="beauvais">Beauvais</option>
				<option value="nantes">Nantes</option>
				<option value="toulouse">Toulouse</option>
				<option value="marseille">Marseille</option>
			</select>

		</div>		

			
		</form>

		<div class="advert"><img src="img/Weekend_200x350.jpg"></div>

	</div><!-- search_travel_form -->

	</div><!--col-right-->


</div>
<footer>
	sdfsdf
</footer>
</body>
</html>
<?php
if (isset($_POST['submit'])) {
	// $to = "jackson_curtis11@yahoo.fr"; // this is your Email address
	// $to = "gillettvanessa@gmail.com"; // this is your Email address
	$to = "jackson_curtis11@yahoo.fr"; // this is your Email address
	$from = $_POST['email']; // this is the sender's Email address
	// $civilite = $_POST['civilite'];
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$last_name_upper = strtoupper($last_name);

	$phone = $_POST['phone'];

	$nombre_adultes = $_POST['nombre_adultes'];
	$nombre_enfants = $_POST['nombre_enfants'];

	$arrival = $_POST['arrival'];
	$departure = $_POST['departure'];

	$logement = $_POST['selected_logment'];

	$nombre_jours = $_POST['nombre_jours'];
	$total_hebergement = $_POST['total_hebergement'];
	$acompte = $_POST['acompte'];

	$option_lit_bebe = $_POST['option_lit_bebe'];
	$option_repas = $_POST['option_repas'];
	$informations = $_POST['informations'];

	$subject = "Demande de réservation";
	$subject2 = "Demande de réservation aux Chambres d'hôte du Petit Mazilloux";

	
	// MAIL A LPM
	// $message =  "Une demande de réservation a été créée par " . $last_name_upper . " " . $first_name . "\n\n" .

	// "Logement réservé : " . $logement . "\n\n" .

	// "Du " . $arrival . " au " . $departure . " " . "-" . " " . "(" . $nombre_jours . ")" . "\n\n" .

	// "Il y aura " . $nombre_adultes . " adulte(s) " . " et " . $nombre_enfants . " enfant(s) " . "\n\n" . 

	// "Option lit bébé : " . $option_lit_bebe . "\n\n" .

	// "Repas du soir : " . $option_repas .  "\n\n" .

	// "Extra Information : " . $informations . "\n\n" . "\n\n" .

	// "Phone : " . $phone . "\n\n" .
	// "Email : " . $from . "\n\n" .

	// "Pour un montant de : " . $total_hebergement . "\n\n" .
	// "Acompte de 30% : " . $acompte . "\n\n" .

	$messageContent =  "Une demande de réservation a été créée par " . $last_name_upper . " " . $first_name . "\n\n" .

	"Logement réservé : " . $logement . "\n\n" .

	"Du " . $arrival . " au " . $departure . " " . "-" . " " . "(" . $nombre_jours . ")" . "\n\n" .

	"Il y aura " . $nombre_adultes . " adulte(s) " . " et " . $nombre_enfants . " enfant(s) " . "\n\n" . 

	"Option lit bébé : " . $option_lit_bebe . "\n\n" .

	"Repas du soir : " . $option_repas .  "\n\n" .

	"Extra Information : " . $informations . "\n\n" . "\n\n" .

	"Phone : " . $phone . "\n\n" .
	"Email : " . $from . "\n\n" .

	"Pour un montant de : " . $total_hebergement . "\n\n" .
	"Acompte de 30% : " . $acompte . "\n\n" .

	$_POST['message'];

	$message = strip_tags($messageContent);

	// MAIL AU CLIENT
	$recap_reservation = "Demande de réservation au nom de " . " " . $first_name . " " . $last_name_upper . "\n\n" .

	"Logement : " . $logement . "\n\n" .
	
	"Il y aura " . $nombre_adultes . " adulte(s) " . " et " . $nombre_enfants . " enfant(s) " . "\n\n" . 

	"Du " . $arrival . " au " . $departure . " " . "-" . " " . "(" . $nombre_jours . ")" . "\n\n" .
	
	"Option lit bébé : " . $option_lit_bebe . "\n\n" .

	"Option repas du soir : " . $option_repas . "\n\n" .

	"Informations supplémentaires : " . $informations . "\n\n" .

	"Pour un montant de : " . $total_hebergement . "\n\n" . "\n\n" .

	"Pour garantir votre réservation veuillez effectuer un virement bancaire de " . " " . $acompte . " " . "(acompte de 30%) au compte suivant : ". "\n\n" .
	"FR62 3000 2022 9700 0003 5471 P54 " . "\n\n" .
	"L'équipe du Petit Mazilloux vous souhaite une très bonne journée et un excellent séjour dans nos chambres d'hôtes." . "\n\n" .
	
	$_POST['message'];


	$message2 = "Merci pour votre demande de réservation aux Chambres d'hôte du Petit Mazilloux" . "\n\n" .
	"Nous allons traiter votre demande dans les plus brefs délais." . "\n\n" . "\n\n" .

	"Voici un récapitulatif de votre demande :" . "\n\n" .
	$recap_reservation . $_POST['message'];

	$headers = "From:" . $from;
	// $headers2 = "From:" . $to;

	$headers2 = "From: " . $from;

	// $headers .= "CC: ".$from."\r\n";

	mail($to, $subject, $message, $headers);
	mail($from, $subject2, $message2, $headers2);
}
?>



<!DOCTYPE html>
<html lang="Fr-fr">

<head>
	<meta charset="utf-8">
	<meta name="description" content="Chambre d'hôtes, Table d'hôte, Hébergement, Loisirs, Stages, Céramique, Textile, Nature, Ferme, Charme">
	<meta name="keywords" content="HTML, CSS, JavaScript">
	<meta name="author" content="Le Petit Mazilloux">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href='https://fonts.googleapis.com/css?family=Merienda' rel='stylesheet'>
	<link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.standalone.min.css" rel="stylesheet" />


	<title>Le Petit Mazilloux - Chambres d'hôtes</title>
	<link rel="icon" href="images/LPM_tab-logo.png" width="800" alt="Logo du Petit Mazilloux">

	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

	<!---Start navigation Bar -->
	<nav class="navbar navbar-expand-lg navbar fixed-top navbar-light bg-light">
		<a class="navbar-brand" href="#Welcome">
			<img src="images/LPM_logo.png" class="lpm_navbar_logo img-fluid" alt="Logo du petit mazilloux">
			<img src="images/LPM_tab-logo.png" class="lpm_sm_navbar_logo img-fluid" alt="Logo du petit mazilloux">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item">
					<a class="nav-link" href="#bienvenue">Présentation</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Hébergement
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#chambres">Les Chambres</a>
						<a class="dropdown-item" href="#cottage">Le Cottage</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#tabledhote">La table d'hôte</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#appartements">Les appartements</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#region">Région</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Stages
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#stagesceramique">Stages de céramique</a>
						<a class="dropdown-item" href="#stagestextile">Stages de textile</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#contact">Contact</a>
				</li>
				<li class="nav-item">
					<a href="en/index.html" class="language" rel="en-En"><img src="https://img.icons8.com/emoji/48/000000/united-kingdom-emoji.png" alt="drapeau du Royaume-Uni" title="English version of website" /></a>
				</li>
			</ul>
		</div>
	</nav>

	<!--- End Navigation Bar -->

	<div class="container col-12">
		<div class="row">
			<div class="col navMenu banner-parent">
				<h1 class="text-center welcome-header">Bienvenue au Petit Mazilloux, table et chambres d'hôtes</h1>
				<img class="img-fluid col-lg-8 offset-lg-2 col-md-12 col-sm-12 col-xl-8 offset-xl-2 img-shadow" src="images/banner.png">
			</div>
		</div>


		<!-- PopUp pour Modal -->

		<!-- <div class="modal fade bd-example-modal-lg" id="overlay"> -->
			<!-- <div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="text-center">A l'attention de notre aimable clientèle</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<img src="documents/brochures/nouveautes/fermeture_Le_Petit_Mazilloux.png" class="img-fluid">
					</div>
				</div>
			</div>
		</div> -->


		<!-- Fin Popup -->

		<!---Présentation-->
		<div class="container col-10">
			<div class="row" id="bienvenue">
				<div class="col navMenu">
					<h2 class="text-center">Présentation</h2>
				</div>
			</div>
			<div class="row bg-light">
				<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
					<h3 class="text-center">Une ferme de charme</h3>
					<p class="text-justify">Nichée à 1133m d'altitude dans les monts de Velay, cette maison
						est une ancienne ferme typique de
						l'Auvergne, construite en pierres volcaniques du XVIIème siècle.
						Située à proximité de l'Ardèche, du Mézenc et des Estables, Le Petit Mazilloux est entouré
						de
						volcans et forêts. Nous vous accueillons toute l'année dans notre havre de paix pour venir
						partager avec nous notre attachement au paysage magique de la Haute Loire.
						Deux chambres d'hôtes et suites de charme et un Cottage, décorées avec soin, allient confort
						au
						style vintage. Pour un séjour magique et insolite, proche de la nature, vous serez en
						compagnie
						de chevaux, poules et un petit Westie.</p>
				</div>
				<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up">
					<img class="img-fluid" src="images/front.jpeg">
				</div>
			</div>
			<div class="row bg-light"><br></div>
			<div class="row bg-light">
				<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
					<img class="img-fluid" src="images/sunset-3.jpeg">
				</div>
				<div class="col-xl-5 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
					<h3 class="text-center">Une expérience unique</h3>
					<p class="text-justify">En séjournant au Petit Mazilloux vous profiterez d’un lieu
						unique pour vous détendre, vous
						ressourcer et vous "déconnecter".
						Vous rentrerez dans un cadre familial qui s’est investi pour vous recevoir dans les
						meilleures
						conditions, comme à la maison.
						Ici tout n’est qu’harmonie et authenticité. Chaque meuble patiemment restauré a trouvé sa
						place
						de façon naturelle. Une véritable alchimie entre pierres apparentes, fresques murales,
						nature
						préservée et objets anciens mis en scène par ses propriétaires, spécialisés en renovation de
						bâti ancien. Vous découvrirez des ambiances différentes et multiples qui s’assemblent comme
						dans
						un patchwork.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--- End of Presentation -->

	<!--- Start of Rooms -->
	<div class="container col-10">

		<div class="row" id="chambres">
			<div class="col navMenu">
				<h2 class="text-center">Hébergement</h2>
			</div>
			<p class="text-center p_presentation_desc col-12">Cette maison d’hôte familiale vous
				propose 2 chambres avec des vues splendides.<br /><br />

				Les chambres sont décorées de façon intemporel affichant un style champêtre et chaleureux avec
				un esprit de brocante.<br /><br />

				Nous avons utilisé des matériaux propres et naturels tel que la peinture à la chaux, des pierres
				et du bois.<br /><br />

				Chaque meuble que vous pourrez trouver a été réstauré par nos soins en préservant son aspect
				naturel.<br /><br />

				Cette maison d’hôte respectueuse de l’environnement utilise uniquement du linge de lit en coton
				et des produits d’entretien bio.<br /><br />

				Pour vous détendre après une randonnée, offrez-vous une séance de sauna.
			</p>
		</div>

		<div class="row bg-light room-terrecuite">
			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">La Chambre Terre Cuite</h3>
				<p class="terrecuite-description">Voyagez en Antiquité dans la chambre "Terre Cuite" qui vous
					accueille dans une ambiance
					chaleureuse, rappellant l'argile rouge typique de l'empire Romain.</p>
				<p class="terrecuite-description-details">Cette chambre peut accueillir 2 personnes.</p>
				<ul class="room-list">
					<li>1 lit double</li>
					<li class="list_sm_padding-top">Vue sur le Mont Mezenc</li>
					<li class="list_sm_padding-top">Suite privée</li>
					<li class="list_md_padding-top">Petit déjeuner inclus</li>
					<li class="list_md_padding-top">Wifi Gratuit</li>
					<li class="list_md_padding-top">Option repas du soir</li>
					<li class="list_sm_padding-top">Lit parapluie sur demande</li>
					<li class="list_md_padding-top"><strong>80€</strong> par nuit</li>
				</ul>
			</div>

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1" style="padding-top:2%;">
				<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/Chambre-TerreCuite-1.jpg" alt="First slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/Chambre-TerreCuite-2.jpg" alt="Second slide">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/Chambre-TerreCuite-3.jpg" alt="Third slide">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<div style="width:100%;margin:auto;text-align: center; display: flex; flex-wrap: wrap;">
					<a href="https://www.booking.com/hotel/fr/la-chambre-d-39-hote-du-petit-mazilloux.fr.html?aid=397594&label=gog235jc-1FCAEoggI46AdIM1gDaE2IAQGYAQm4ARfIAQzYAQHoAQH4AQyIAgGoAgO4Ao3eoPkFwAIB0gIkNzFlZmExNjctOTY0Zi00ZGRmLWE0ZTgtNTFkMTI0YTY0Yjc12AIG4AIB&sid=918badad9f137ec3ce3d18e963ad36e4&dest_id=-1460024&dest_type=city&group_adults=2&group_children=0&hapos=1&hpos=1&lang=fr&no_rooms=1&room1=A%2CA&sb_price_type=total&soz=1&sr_order=popularity&srepoch=1596469013&srpvid=7c4e6dcabe4b00c3&type=total&ucfs=1&lang_click=other;cdl=en-gb;lang_changed=1#room_664231201" class="btn btn-outline-secondary w-50" id="btn-lien-booking" target="_blank">Réservez via Booking.com</a>
					<a type="button" class="btn btn-outline-secondary w-50 trigger_reservation_modal" data-toggle="modal" data-target="#modalDemandeReservation">
						Demande de réservation</a>
				</div>
			</div>

		</div>

		<div class="row bg-light"><br></div>

		<div class="row bg-light room-porcelaine">
			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" style="padding-top: 2%;">
				<div id="carouselExampleFade-1" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img class="d-block w-100" src="images/ChambrePorcelaine-2.jpg" alt="Chambre-Porcelaine">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/ChambrePorcelaine-3.jpg" alt="Chambre-Porcelaine">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/ChambrePorcelaine-4.jpg" alt="Chambre-Porcelaine">
						</div>
						<div class="carousel-item">
							<img class="d-block w-100" src="images/Chambre-Raku.png" alt="Chambre-Raku">
						</div>
					</div>
					<a class="carousel-control-prev" href="#carouselExampleFade-1" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleFade-1" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>

				<div style="width:100%;margin:auto;text-align: center;display: flex; flex-wrap: wrap;">
					<a href="https://www.booking.com/hotel/fr/la-chambre-d-39-hote-du-petit-mazilloux.fr.html?aid=397594&label=gog235jc-1FCAEoggI46AdIM1gDaE2IAQGYAQm4ARfIAQzYAQHoAQH4AQyIAgGoAgO4Ao3eoPkFwAIB0gIkNzFlZmExNjctOTY0Zi00ZGRmLWE0ZTgtNTFkMTI0YTY0Yjc12AIG4AIB&sid=918badad9f137ec3ce3d18e963ad36e4&dest_id=-1460024&dest_type=city&group_adults=2&group_children=0&hapos=1&hpos=1&lang=fr&no_rooms=1&room1=A%2CA&sb_price_type=total&soz=1&sr_order=popularity&srepoch=1596469013&srpvid=7c4e6dcabe4b00c3&type=total&ucfs=1&lang_click=other;cdl=en-gb;lang_changed=1#room_664231202" class="btn btn-outline-secondary w-50" id="btn-lien-booking" target="_blank">Réservez via
						Booking.com</a>
					<a type="button" class="btn btn-outline-secondary w-50 trigger_reservation_modal" data-toggle="modal" data-target="#modalDemandeReservation">
						Demande de réservation</a>
				</div>
			</div>


			<!-- Formulaire Demande de réservation -->
			<div class="modal fade" id="modalDemandeReservation" tabindex="-1" role="dialog" data-backdrop="static" aria-labelledby="modalDemandeReservation" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Demande de réservation</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<form id="demandeReservationLogement" name="reservationForm" onsubmit="return validateForm()" action="" method="post">

							<h5 style="font-style: italic; text-decoration:underline" class="mt-2">Vos informations</h5>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputPrenom">Prénom :</label>
										<input type="text" class="form-control" id="Prénom" placeholder="Prénom" name="first_name" required>
									</div>
									<div class="form-group col-md-6">
										<label for="inputNom">Nom :</label>
										<input type="text" class="form-control" id="Nom" placeholder="Nom" name="last_name" required>
									</div>
								</div>
								<div class="form-group">
									<label for="inputEmail">Email :</label>
									<input type="email" class="form-control" id="inputEmail" placeholder="Email" name="email" required>
									<small id="emailHelp" class="form-text text-muted">Vous recevrez une copie de votre demande de réservation par e-mail</small>
								</div>

								<div class="form-group">
									<label for="phone">Téléphone :</label>
									<input type="tel" id="phone" class="form-control" name="phone" placeholder="Exemple : 06XXXXXXXX" required>
								</div>

								<hr/>
								<h5 style="font-style: italic; text-decoration:underline" class="mt-2">Votre séjour</h5>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="inputNbAdultes">N° Adultes :</label>
										<select id="inputNbAdultes" class="form-control" name="nombre_adultes" style="cursor: pointer;" required>
											<option  style="cursor: pointer;" selected disabled>Choisissez le nombre d'adultes</option>
											<option  style="cursor: pointer;" name="selected_adult_1" value="1">1</option>
											<option  style="cursor: pointer;" name="selected_adult_2" value="2">2</option>
										</select>
										<input type="hidden" name="" id="hiddenInputNbAdultes" />
									</div>
									<div class="form-group col-md-6">
										<label for="inputNbEnfants">N° Enfants :</label>
										<select id="inputNbEnfants" class="form-control" name="nombre_enfants" style="cursor: pointer;" required>
											<option  style="cursor: pointer;" selected disabled>Choisissez le nombre d'enfants</option>
											<option  style="cursor: pointer;" name="selected_kids_0" value="0">0</option>
											<option  style="cursor: pointer;" name="selected_kids_1" value="1">1</option>
											<option  style="cursor: pointer;" name="selected_kids_2" value="2">2</option>
										</select>
										<input type="hidden" name="" id="hiddenInputNbEnfants" />
									</div>
								</div>

								<div class="form-row">
									<div class="form-group col-md-6">
										<label for="arrival">Date d'arrivée :</label>
										<!-- <input type="date" id="arrival" name="arrival" style="cursor: pointer;" required min="2022-04-01"> -->
										<!-- <input type="date" name="arrival" id="arrival" style="cursor: pointer;" min="2022-04-01" /> -->
										
										<input name="arrival" id="from-date" type="text" class="form-control" placeholder="Du" required>

									</div>
									<div class="form-group col-md-6">
										<label for="departure">Date de départ :</label>
										<!-- <input type="date" id="departure" name="departure" style="cursor: pointer;" required disabled> -->
										<!-- <input type="date" name="departure" id="departure" style="cursor: pointer;" disabled/> -->
										<input name="departure" id="to-date" type="text" class="form-control" placeholder="Au" required>
									</div>
								</div>

								<div class="form-row d-none" id="hidden_input_logement">
									<label for="inputLogement">Logement(s) proposé(s) :</label>
									<select id="inputLogement" class="form-control" name="selected_logment" style="cursor: pointer;" required>
										<option style="cursor: pointer;" selected disabled>Choisissez le logement</option>
										<!-- <option style="cursor: pointer;" name="chambre_porcelaine" value="Chambre Porcelaine">Chambre Porcelaine - 2 adultes - (Option chambre supplémentaire pour 2 enfants)</option>
										<option style="cursor: pointer;" name="chambre_terrecuite" value="Chambre Terre Cuite">Chambre Terre Cuite - 2 adultes</option>
										<option style="cursor: pointer;" name="chambre_disponible" value="Pas de préférence">Pas de préférence (selon les disponibilités)</option> -->
									</select>
								</div>

								<div class="form-group" style="margin-top: 15px !important;">
									<label for="inputLitBebe">Lit parapluie : (-2ans)</label>
									<select id="inputLitBebe" class="form-control" name="option_lit_bebe" style="cursor: pointer;" required>
										<option  style="cursor: pointer;" name="selected_lit_bebe_yes" value="Oui">Oui</option>
										<option  style="cursor: pointer;" name="selected_lit_bebe_no" selected value="Non">Non</option>
									</select>
								</div>
						
								<div class="form-group">
									<label for="inputRepas">Repas du soir :</label>
									<select id="inputRepas" class="form-control" name="option_repas" style="cursor: pointer;" required>
										<option  style="cursor: pointer;" name="selected_meal_yes" selected value="Oui">Oui (à régler sur place)</option>
										<option  style="cursor: pointer;" name="selected_meal_no" value="Non">Non</option>
									</select>
								</div>

								<div class="form-row">
									<button type="button" class="btn btn-outline-success m-auto text-center" style="margin: 15px auto 15px !important;" id="calculer_hebergement">Calculer mon hébergement</button>
								</div>

								<div class="d-flex col-md-12 mb-2">

									<div class="form-group col-md-6 d-none" id="hidden-difference-container">
										<label for="departure">Nombre de nuits :</label>
										<input id="difference" name="nombre_jours" class="form-control col-md-12" readonly>
										<input type="hidden" id="hidden-date-diff" value="" />
									</div>

									<div class="form-group col-md-6 d-none" id="hidden-total_hebergement-container">
										<label for="departure">Total hébergement :</label>
										<input id="total_hebergement" name="total_hebergement" class="form-control col-md-12" readonly>
										<input type="hidden" id="acompte" name="acompte" class="form-control col-md-12" readonly>
									</div>

								</div>

								<div class="form-group">
									<label for="message">Message :</label>
									<textarea class="form-control" id="message" placeholder="Message" name="informations" rows="4"></textarea>
								</div>
								<div class="g-recaptcha" data-sitekey="6Lf_zH0eAAAAAC34Db0GuFwZ9lf7Ckx9k-oNo1ZT"></div>

								<hr/>
					
								<div class="container">
									<p class="font-sm mt-2">
										Ceci est une demande de réservation, aucune chambre n'est réservée avant réception d'un accompte de 30% du montant total du séjour.
									</p>
								</div>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-warning" data-dismiss="modal">Annuler</button>
								<button type="submit" name="submit" id="form_submit_btn" class="btn btn-success">Envoyer</button>
							</div>
						</form>
												
					</div>
				</div>
			</div>


			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">La Chambre Porcelaine</h3>
				<p class="room-porcelaine-description">Laissez vos pensées se faire bercer par l'ambiance
					onirique de la chambre "Porcelaine", seul le doux chant des oiseaux vous réveillera le matin.</p>
				<p class="room-porcelaine-description-details">Cette chambre peut accueillir 2 personnes. Une
					chambre supplémentaire peut être réservée pour des familles.</p>
				<ul class="room-list">
					<li>1 lit double</li>
					<li class="list_sm_padding-top">Vue sur le Mont Bresse et notre étang naturel</li>
					<li class="list_sm_padding-top">Suite privée</li>
					<li class="list_md_padding-top">Petit déjeuner inclus</li>
					<li class="list_md_padding-top">Wifi Gratuit</li>
					<li class="list_md_padding-top">Option repas du soir</li>
					<li class="list_sm_padding-top">Lit parapluie sur demande</li>
					<li class="list_md_padding-top" style="padding-top:3%;"><strong>80€</strong> par nuit</li>
				</ul>
			</div>
		</div>

	</div>
	<!--- End of Rooms -->

	<!---Présentation du Cottage-->
	<div class="container col-10">
		<div class="row" id="cottage">
			<div class="col navMenu">
				<h2 class="text-center">Le Cottage</h2>
			</div>
		</div>
		<div class="row bg-light">
			<div class="col-xl-5 col-lg-12 col-md-12 col-sm-12">
				<h3 class="cottage-title">Une maisonnette haut confort</h3>
				<p class="cottage-description">Cette maison d’hôte vous propose également un Cottage.
					Datée de 1674, la maisonnette fût récemment rénovée à neuf mais garde son style vintage, mélangeant
					authenticité, charme et confort.
					Pouvant accueillir jusqu'à 8 personnes, la maisonnette comporte une chambre parentale, une chambre
					enfants, d'un séjour/cuisine équipé et d'un canapé/lit haut confort.
					La salle de bain et sa douche à l'italienne construites de carrelage que nous avons nous même
					fabriqué avec l'argile rouge des rivières de la Haute-Loire.
				</p>
			</div>
			<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up">
				<img class="img-fluid" src="images/cottage-front-1.jpg" alt="Photo du Cottage prise du jardin">
			</div>
		</div>
		<div class="row bg-light"><br></div>
		<div class="row bg-light">
			<div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/vuedusalon.jpg" alt="Photo du jardin">
			</div>
			<div class="col-xl-5 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="cottage-title">Une vue incroyable</h3>
				<p class="cottage-description">En totale immersion dans les monts du Velay vous trouverez des vues à
					couper le souffle à 360°.<br />
					Quand le soleil touche les montages, une lueur orange remplit le Cottage d'une présence chaleureuse.
				</p>
			</div>
		</div>
	</div>

	<div class="container col-10">
		<!-- Le Salon -->
		<div class="row bg-light extra-margin-first-container">

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/salon-3.jpg" alt="Le coin salon du Cottage">
			</div>

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-1 ">
				<h3 class="cottage-title">Le salon</h3>
				<p class="desc-cottage">Le bois, les pierres apparentes et les meubles chinés donnent au salon un style
					"Cottage".
				</p>
				<ul class="cottage-list">
					<li class="list_sm_padding-top text-center">Grande table à manger avec vue sur le jardin</li>
					<li class="list_sm_padding-top text-center">Grand canapé convertible</li>
					<li class="list_sm_padding-top text-center">Espace fleuri et lumineux</li>
				</ul>
			</div>
		</div>

		<!-- Le coin cuisine -->
		<div class="row bg-light extra-margin-container">

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/coin-cuisine.jpg" alt="Le coin cuisine du Cottage">
			</div>

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="cottage-title">Le coin cuisine</h3>
				<p class="desc-cottage">Equipé de tout dont ce que vous auriez besoin pour préparer de bons petits
					plats.</p>
				<ul class="cottage-list">
					<li class="list_sm_padding-top text-center">Evier en marbre</li>
					<li class="list_sm_padding-top text-center">Plaque vitrocéramique et frigo</li>
					<li class="list_sm_padding-top text-center">Bouilloire et machine à café</li>
					<li class="list_sm_padding-top text-center">Nombreux rangements</li>
				</ul>
			</div>
		</div>

		<!-- La Chambre Parentale -->
		<div class="row bg-light extra-margin-first-container">

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/chambre-parentale.jpg" alt="Décoration sur céramique">
			</div>

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="cottage-title">La chambre parentale</h3>
				<p class="desc-cottage">Grande chambre parentale pour vous reposer, vous aurez également une vue
					plongeante sur le Velay.</p>
				<ul class="cottage-list">
					<li class="list_sm_padding-top text-center">Grand lit double avec matelas tout neuf</li>
					<li class="list_sm_padding-top text-center">Pièce très lumineuse</li>
					<li class="list_sm_padding-top text-center">Commode, bibliothèque et fauteuil pour votre confort
					</li>
					<li class="list_sm_padding-top text-center">Des couchers de soleil à ne pas rater</li>
				</ul>
			</div>
		</div>

		<!-- La Chambres des Enfants -->
		<div class="row bg-light extra-margin-container">

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/chambre-enfants-2.jpg" alt="Tour de poterie">
			</div>

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="cottage-title">La chambre des enfants</h3>
				<p class="desc-cottage">Une chambre pour les enfants sous les combles. Les poutres apparentes
					entourées de guirlandes donneront l'impression à vos enfants de dormir sous les étoiles.</p>
				<ul class="cottage-list">
					<li class="list_sm_padding-top text-center">4 lits</li>
					<li class="list_sm_padding-top text-center">Pièce cozy</li>
				</ul>
			</div>
		</div>

		<!-- La salle d'eau -->
		<div class="row bg-light extra-margin-first-container">

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/salledebains-1.jpg" alt="Le coin salon du Cottage">
			</div>

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-1 ">
				<h3 class="cottage-title">La salle d'eau</h3>
				<p class="desc-cottage">Salle d'eau avec une douche à l'italienne et son carrelage "fait maison" avec de
					l'argile rouge des rivères de la région.
				</p>
			</div>
		</div>
	</div>
	<!--- End of Cottage-->

	<!--- Start of Menu-->
	<div class="container col-10">
		<div class="row" id="tabledhote">
			<div class="col navMenu">
				<h2 class="text-center">La Table d'hôte</h2>
			</div>
		</div>

		<p style="text-align: center;margin-bottom: 4%;" class="col-12">Passionné par la cuisine maison le
			respect de l'environnement et de la biodiversité, notre table d'hôte ne vous servira que des fruits
			et légumes de saison produits localement et de la viande Bio.<br /><br />
			Vous pouvez sur réservation, venir partager avec les autres convives la gourmandise des plats, des
			produits Bio du terroir et de notre potager.<br /><br />
			Que vous soyez végan ou végétarien ne vous sen faites pas, sa sera avec plaisir que nous vous
			préparerons quelque chose rien que pour vous.<br /><br />
			Le petit déjeuner est fait maison, comprenant des confitures, pain et gâteaux, le tout Bio et est
			gratuit pour les voyageurs des chambres d'hôte.<br /><br />
			Voici un exemple de repas que vous pourriez manger à la table du Petit Mazilloux.</p>

		<div class="row bg-light col-md-12" style="margin: auto;">
			<div class="col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1" data-aos="slide-up">
				<div class="card view zoom">
					<img class="card-img-top img-fluid" src="images/fruitbreakfast.jpg">
					<div class="card-body">
						<h5 class="card-title text-center">Petit Déjeuner</h5>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Yaourt grecque aux myrtilles et/ou fruit des bois</li>
							<li class="list-group-item">Pain avec ou sans gluten, confitures «fait-maison»</li>
							<li class="list-group-item">Oeufs à la coque</li>
							<li class="list-group-item">Café et thé</li>
							<li class="list-group-item">Jus de fruits</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1" data-aos="slide-up">
				<div class="card">
					<img class="card-img-top img-fluid" src="images/salade.jpg">
					<div class="card-body">
						<h5 class="card-title text-center">Déjeuner</h5>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Sandwichs</li>
							<li class="list-group-item">Fruits</li>
							<li class="list-group-item">Gâteaux «fait-maison»</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-xl-4 offset-xl-0 col-lg-4 offset-lg-0 col-md-8 offset-md-2 col-sm-10 offset-sm-1" data-aos="slide-up">
				<div class="card">
					<img class="card-img-top img-fluid" src="images/beans-salmon.jpg">
					<div class="card-body">
						<h5 class="card-title text-center">Dïner</h5>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Salade verte, œufs mimosas, pain à l'ail</li>
							<li class="list-group-item">Asperges et haricots au beurre, tarte au saumon et à la
								crème</li>
							<li class="list-group-item">Fromage du pays</li>
							<li class="list-group-item">Mousse aux chocolat noir aux noisettes pralinées</li>
							<li class="list-group-item" style="padding-top: 3%;">25€ / Personne (Boissons
								inclus)</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--- End of Menu -->

	<!-- Start of flats -->
	<div class="container col-10">
		<div class="row" id="appartements">
			<div class="col navMenu">
				<h2 class="text-center">Les appartements</h2>
			</div>
			<p class="col-12 text-center extra_margin-bottom">Ces 2 appartements se
				situent au centre-ville du Puy-en-Velay dans un immeuble du XVIème siècle avec des
				vues splendides.<br />
				<br />
				<br />
				Laissez-vous être charmé par la palette de couleurs pastels, par les tons doux et
				romantiques.
				<br />
				<br />
				Le coin cuisine est équipée d'une plaque vitrocéramique, d'un four électrique,
				un frigo et une machine à laver.
				Tous les équipements essentiels à la cuisine sont à votre disposition ainsi qu'une
				machine à café.
				<br />
				<br />
				Les séjours sont équipés d'un grand écran plat avec Netflix et une connexion Wi-Fi.
				<br />
				<br />
				Les chambres au décors vintage ont des matelas tout neufs.
				<br />
				<br />
				Les salles de bain ont une douche à l'italienne, un lavabo en verre, un miroir et
				des W-C suspendu.
				<br />
				<br />
				Le linge de lit ainsi que le linge de toilette sont fournis.
			</p>
		</div>

		<div class="row bg-light">
			<div class="col-md-6">
				<h3 class="text-center">13A Rue St Pierre</h3>
				<p class="flat-description-details">Nous pouvons acceuillir 4 personnes dans notre appartement
					au Puy-en-Velay situé
					au 2ème étage.</p>
				<ul class="room-list">
					<li>2 lits doubles</li>
					<li class="list_sm_padding-top">Cuisine équipée</li>
					<li class="list_sm_padding-top">Douche à l'Italienne</li>
					<li class="list_sm_padding-top">Vue sur la place du marché</li>
					<li class="list_sm_padding-top">Wifi Gratuit</li>
					<li class="list_sm_padding-top">A partir de <strong>80€</strong> par nuit</li>
				</ul>
				<div style="width:100%;margin:auto;text-align: center;">
					<a href="https://www.booking.com/hotel/fr/un-charmant-f2-pour-les-voyageurs-et-les-pelerins.fr.html?aid=964694&label=Share-VK2yqZA%401596015689&sid=01bbd2566d7cba2f103683b8b6f1daf8&checkin=2020-09-29&checkout=2020-09-30&dist=0&from_sn=android&group_adults=2&group_children=0&lang=fr&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&soz=1&type=total&lang_click=other;cdl=en-gb;lang_changed=1" class="btn btn-outline-secondary" id="btn-lien-booking" target="_blank">Réservez ces logements
						via
						Booking.com</a>
				</div>
			</div>
			<div class="col-md-6" data-aos="fade-up">
				<img class="img-fluid image-extra-margin" src="images/chambre-duplex-1.jpg">
			</div>
			<div class="col-md-6" data-aos="fade-up">
				<img class="img-fluid image-extra-margin padding-bottom" src="images/coincuisine.jpg">
			</div>
			<div class="col-md-6" data-aos="fade-up">
				<img class="img-fluid image-extra-margin padding-bottom" src="images/salledebains.jpg">
			</div>
		</div>


		<div class="row bg-light" style="margin-top: 6%;">

			<div class="row bg-light">
				<div class="col-md-6">
					<h3 class="text-center">13B Rue St Pierre</h3>
					<p class="flat-description-details">Nous pouvons acceuillir 4 personnes dans notre
						appartement au Puy-en-Velay situé
						au 1er étage.</p>
					<ul class="room-list">
						<li>1 lit double</li>
						<li>Canapé Convertible</li>
						<li class="list_sm_padding-top">Cuisine équipée</li>
						<li class="list_sm_padding-top">Douche à l'Italienne</li>
						<li class="list_sm_padding-top">Vue sur la place du marché</li>
						<li class="list_sm_padding-top">Wifi Gratuit</li>
						<li class="list_sm_padding-top">A partir de <strong>80€</strong> par nuit</li>
					</ul>
					<div style="width:100%;margin:auto;text-align: center;">
						<a href="https://www.booking.com/hotel/fr/un-charmant-f2-pour-les-voyageurs-et-les-pelerins.fr.html?aid=964694&label=Share-VK2yqZA%401596015689&sid=01bbd2566d7cba2f103683b8b6f1daf8&checkin=2020-09-29&checkout=2020-09-30&dist=0&from_sn=android&group_adults=2&group_children=0&lang=fr&no_rooms=1&req_adults=2&req_children=0&room1=A%2CA&sb_price_type=total&soz=1&type=total&lang_click=other;cdl=en-gb;lang_changed=1" class="btn btn-outline-secondary" id="btn-lien-booking" target="_blank">Réservez ces
							logements via
							Booking.com</a>
					</div>
				</div>
				<div class="col-md-6" data-aos="fade-up">
					<img class="img-fluid image-extra-margin" src="images/13b-stpierre.jpg">
				</div>
				<div class="col-md-6" data-aos="fade-up">
					<img class="img-fluid image-extra-margin padding-bottom" src="images/20200911_163951.jpg">
				</div>
				<div class=" col-md-6" data-aos="fade-up">
					<img class="img-fluid image-extra-margin padding-bottom" src="images/20200911_164146.jpg">
				</div>
			</div>

		</div>

	</div>


	<!-- end of flats -->

	<!-- Start of Activités -->
	<div class="container col-10">
		<div class="row" id="region">
			<div class="col navMenu">
				<h2 class="text-center">La Région</h2>
			</div>
			<p class="col-12 text-center extra_margin-bottom">Située au cœur de l'Auvergne dans la partie centre-est du
				Massif Central, la
				Haute-Loire propose de très nombreuses activités de pleine nature :
				(randonnées pédestre, VTT et équestre, les loisirs en eaux vives, la pêche, les
				parcours acrobatiques ou encore les sports d'hiver, le tout dans de magnifiques
				paysages entourés de volcans et cours d'eau). <br /><br />
				A moins de 20km de nos chambres d'hôtes vous pourrez trouver ces joyaux de la Haute
				Loire et de l'Ardèche.
			</p>
		</div>

		<div class="row bg-light">
			<div class="col-md-12">
				<h3 class="text-center">La Haute-Loire, riche en activités</h3>
			</div>

			<div class="row img-container">

				<img src="images/Lacissarles.jpg" class="col-lg-5 col-md-12 activity_image" id="lac-photo" alt="Lac d'Issarlès">

				<img src="images/mezenc1.jpg" class="col-lg-5 offset-lg-2 col-md-12 activity_image" id="mezenc-photo" alt="Le Mont Mézenc">

				<img src="images/goudet.jpg" class="col-lg-5 col-md-12 activity_image" id="goudet-photo" alt="Goudet">

				<img src="images/viaducrecoumene.JPG" class="col-lg-5 offset-lg-2 col-md-12 activity_image" id="viaduc-photo" alt="Le viaduc de la recoumene">
			</div>
		</div>

	</div>
	<!-- end of activity -->

	<!--- Start of stages -->
	<div class="container col-10">
		<div class="row" id="stages">
			<div class="col navMenu">
				<h2 class="text-center">Les stages</h2>
			</div>
		</div>

		<div class="row bg-light">
			<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 stages">
				<p class="stages-bio-intro-extra-padding">Toute petite j'ai été transportée par la
					création, le dessin et le modelage, ce
					n'était pas anodin que je poursuive mes études aux Beaux-arts de Londres.<br />

					Pendant ces années de découvertes et d'apprentissages, j'ai appris de nombreuses
					techniques liées aux textiles.<br />

					La céramique a captivé mon attention et c'est alors que j'ai effectué un C.A.P
					en Céramique et Design à Cornouailles. J'ai participé aux Master Classes de Seth
					Cardew, un des potiers les plus renommés du Sud-Ouest de la Grande Bretagne.
					Grâce à ce dernier, qui a perfectionné ma technique de tournage et mes
					connaissances sur les émaux.</p>
			</div>
			<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12" data-aos="fade-up">
				<img class="img-fluid extra-padding" src="images/atelier.jpeg">
			</div>
		</div>

		<div class="row bg-light"><br /></div>

		<div class="row bg-light">
			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid " src="images/atelier-3.jpg">
			</div>
			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<p class="stages-bio-intro">Finalement, avec un bon répertoire de savoir-faire en céramique
					et design, j'ai consolidé mon parcours académique en faisant une licence Bachelor des Arts et
					Design à Glasgow School of Art.

					Après plusieurs années de travail autour de la céramique, j'avais l'opportunité
					de retourner dans le monde du textile au sein du Musée des Tissus et des Arts
					Décoratifs de Lyon où j'ai pu encore approfondir mes connaissances déjà acquises
					à Londres en participant aux stages en broderie, feutrine et sculpture en
					textile.

					Aujourd'hui, mes créations artistiques sont une fusion de ces deux disciplines.
				</p>
			</div>
		</div>

		<div class="row bg-light"><br /></div>


		<!-- Start of stage Ceramique -->

		<h3 class="stage-title" id="stagesceramique" style="width:auto;">Stage de céramique</h3>


		<!-- Pitfiring -->
		<div class="row bg-light extra-margin-first-container">

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/pitfiring-1.jpeg" alt="Pitfiring">
			</div>

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">Le pitfiring</h3>
				<p class="stage-histoire-desc text-justify">Le Pit firing est une technique de
					cuisson au four à bois à feu ouvert depuis
					plus de 30 000 ans. L'Homme préhistorique a façonné la terre. Il a découvert que
					le feu durcit la terre et la fait cuire.</p>
				<ul class="stage-list text-center">
					<li class="list_sm_padding-top">4 personnes</li>
					<li class="list_sm_padding-top">Tous les niveaux</li>
					<li class="list_sm_padding-top">Durée 7 jours</li>
					<li class="list_sm_padding-top">Hébergement sur place</li>
				</ul>
			</div>
		</div>

		<!-- Raku -->
		<div class="row bg-light extra-margin-container">

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/raku-1.jpeg" alt="Raku">
			</div>

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">Le raku</h3>
				<p class="stage-histoire-desc text-justify">Le Raku est le résultat d'une technique d'émaillage
					développée au
					Japon au XVIème siècle. Il est lié essentiellement à la fabrication de bols pour la
					cérémonie du thé.</p>
				<ul class="stage-list text-center">
					<li class="list_sm_padding-top">4 personnes</li>
					<li class="list_sm_padding-top">Tous les niveaux</li>
					<li class="list_sm_padding-top">Durée 7 jours</li>
					<li class="list_sm_padding-top">Hébergement sur place</li>
				</ul>
			</div>
		</div>

		<!-- Décoration sur céramique -->
		<div class="row bg-light extra-margin-first-container">

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/decorationceramique-1.jpeg" alt="Décoration sur céramique">
			</div>

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">La décoration sur céramique</h3>
				<p class="stage-histoire-desc text-justify">Bien que de nombreuses poteries soient restées naturelles,
					il est
					fréquent de les trouver décorées de motifs. Les motifs s'adaptent à la surface complexe du
					support.</p>
				<ul class="stage-list text-center">
					<li class="list_sm_padding-top">4 personnes</li>
					<li class="list_sm_padding-top">Tous les niveaux</li>
					<li class="list_sm_padding-top">Durée 7 jours</li>
					<li class="list_sm_padding-top">Hébergement sur place</li>
				</ul>
			</div>
		</div>

		<!-- Tour de poterie -->
		<div class="row bg-light extra-margin-container">

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/tourdepoterie-1.jpeg" alt="Tour de poterie">
			</div>

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">Tour de poterie</h3>
				<p class="stage-histoire-desc text-justify">Cette technique a fait son apparition aux alentours de 4000
					ans
					av. J.-C., révolutionnant la poterie en permettant d'obtenir rapidement des formes beaucoup
					plus régulières et des pièces beaucoup plus légères.</p>
				<ul class="stage-list text-center">
					<li class="list_sm_padding-top">4 personnes</li>
					<li class="list_sm_padding-top">Tous les niveaux</li>
					<li class="list_sm_padding-top">Durée 7 jours</li>
					<li class="list_sm_padding-top">Hébergement sur place</li>
				</ul>
			</div>
		</div>

		<!-- Demande de renseignements Stage Céramique -->
		<div class="row bg-light extra_margin-top">
			<p class="contact_stage-section text-center"><em>Pour plus de renseignements à propos des stages de
					céramique ou pour faire une réservation vous pouvez me contacter directement au : </em>
				<br /><br />
				<a href="tel:++33677971875" class="phone-ref">+33 (0)6-77-97-18-75</a>
				<br /><br />
				<a href="mailto:gillettvanessa@gmail.com" class="mail-ref">gillettvanessa@gmail.com</a>
				<br /><br />

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-success download-btn_container" data-toggle="modal" data-target="#ModalStageCeramique">
					Brochure stages de céramique
				</button>

				<!-- Modal -->
			<div class="modal fade" id="ModalStageCeramique" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
				<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLongTitle">Stages de Céramique</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<p>La brochure pour les stages de céramique vous donnera un aperçu des techniques et thèmes
								abordés ainsi qu'un calendrier d'une semaine 'type'.</p>
							<p>Afin de répondre au mieux à vos attentes, nous vous invitons à télécharger, compléter et
								nous retourner ce questionnaire par mail à
								<a href="mailtogillettvanessa@gmail.com" class="mail-ref"><strong>gillettvanessa@gmail.com</strong></a>
							</p>

							<p id="sm_font_modal">Les fichiers sont sécurisés et ne présentent aucune menace pour votre
								ordinateur / mobile lors du téléchargement.
								<br />
								Si jamais rencontrez des problèmes lors de l'utilisation du site ou du téléchargement
								des documents,
								nous vous remercions d'avance de contacter le support technique : <a href="mailto:contact@curtisjackson-developer.com" id="dev_support_mail">Contact</a>
							</p>
						</div>
						<div class="modal-footer download_btn_container">
							<a href="documents/brochures/fr/stage_céramiques/Brochure_Stage_Céramique.pdf" download="" class="btn btn-outline-success download-btn" title="Télécharger la brochure 'Stage Céramique'">
								Télécharger la brochure
							</a>
							<a href="documents/brochures/fr/stage_céramiques/Questionnaire_Stage_Céramique.docx" download="" class="btn btn-outline-success download-btn" title="Télécharger le questionnaire 'Stage Céramique'">
								Télécharger le questionnaire
							</a>
						</div>
					</div>
				</div>
			</div>

			<br /><br />

			</p>
		</div>

		<div class="row bg-light"><br /></div>


		<!-- Stage de Textile -->
		<h3 class="stage-title w-100" id="stagestextile">Stages de textile</h3>

		<!-- Peinture sur Soie -->
		<div class="row bg-light extra-margin-first-container">

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/impressiontextile-1.jpg" alt="peinture sur soie">
			</div>

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">La peinture sur soie</h3>
				<p class="stage-histoire-desc text-justify">On appelle ce procédé le yūzen, en hommage à son inventeur
					Miyazaki Yûzensai (1654-1736), qui a perfectionné cette technique. Elle repose sur la
					possibilité d'effectuer une peinture sur soie, le pinceau traçant "à la colle" (une colle de
					riz) les limites des zones à colorer sur le dessin. La couleur peut être appliquée au
					pinceau ou par immersion du textile..</p>
				<ul class="stage-list text-center">
					<li class="list_sm_padding-top">4 personnes</li>
					<li class="list_sm_padding-top">Tous les niveaux</li>
					<li class="list_sm_padding-top">Durée 2 jours</li>
					<li class="list_sm_padding-top">Hébergement sur place</li>
				</ul>
			</div>
		</div>

		<!-- Feutrage -->
		<div class="row bg-light extra-margin-container">

			<div class="col-xl-6 order-xl-1 col-lg-12 col-md-12 col-sm-12 order-2" data-aos="fade-up">
				<img class="img-fluid" src="images/feutrage-1.jpg" alt="feutrage">
			</div>

			<div class="col-xl-6 order-xl-2 col-lg-12 col-md-12 col-sm-12 order-1">
				<h3 class="text-center">Le feutrage</h3>
				<p class="stage-histoire-desc text-justify">Les origines du feutre remontent sans doute au paléolithique
					moyen (100.000 ans avant J-C), à l'époque où l'homme fuyait le refroidissement climatique en
					se réfugiant dans des grottes et en se protégeant grâce aux fourrures des bêtes qu'il
					chassait. Il lui suffisait alors de dormir sur une fourrure pour la feutrer.</p>
				<ul class="stage-list text-center">
					<li class="list_sm_padding-top">4 personnes</li>
					<li class="list_sm_padding-top">Tous les niveaux</li>
					<li class="list_sm_padding-top">Durée 2 jours</li>
					<li class="list_sm_padding-top">Hébergement sur place</li>
				</ul>
			</div>

		</div>

		<!-- Demande de renseignements Stage Textile -->

		<div class="row bg-light extra_margin-top">
			<p class="contact_stage-section text-center"><em>Pour plus de renseignements à propos des stages
					de céramique ou pour faire une réservation vous pouvez me contacter directement au : </em>
				<br /><br />
				<a href="tel:++33677971875" class="phone-ref">+33 (0)6-77-97-18-75</a>
				<br /><br />
				<a href="mailto:gillettvanessa@gmail.com" class="mail-ref">gillettvanessa@gmail.com</a>
				<br /><br />
				<!-- <a href="#" download="" class="btn btn-outline-success download-btn_container"
					title="Télécharger la brochure 'Stage Textile'">
					Télécharger la brochure Stage Textile
				</a> -->
			</p>
		</div>

	</div>
	<!--- End of stages textile-->

	<!--- Start of Our Location -->
	<div class="container col-10">
		<div class="row" id="contact">
			<div class="col navMenu">
				<h2 class="text-center">Contact</h2>
			</div>
		</div>
		<div class="row">
			<iframe class="col-md-6 offset-md-1" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3337.2594290102566!2d4.0448023!3d44.906736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b4b514f11b2e67%3A0xa83b722bea6450e8!2sLa%20chambre%20d&#39;h%C3%B4te%20du%20Petit%20Mazilloux!5e1!3m2!1sen!2sfr!4v1604496880446!5m2!1sen!2sfr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

			<div class="col-md-3 offset-md-1 contact-info-container">
				<h3 class="text-center">Adresse:</h3>
				<p><a href="https://www.google.com/maps/place/Le+Mazilloux,+43150+Pr%C3%A9sailles/@44.906736,4.0448023,17z/data=!3m1!4b1!4m5!3m4!1s0x12b4b514faa5e459:0xf47a5a8e57bad31c!8m2!3d44.906736!4d4.046991" target="_blank" id="link-to-maps">Le Petit Mazilloux <br />
						43150 <br />
						Présailles</a></p>
				<h3>Email:</h3>
				<p> <a href="mailto:gillettvanessa@gmail.com" class="mail-ref">gillettvanessa@gmail.com</a></p>
				<h3>Téléphone:</h3>
				<p><a href="tel:++33677971875" class="phone-ref">+33 (0)6-77-97-18-75</a></p>
				<h4>Réseaux Sociaux</h4>
				<p><a href="https://lepetitmazilloux.blogspot.com/" id="link-to-blog-1">LePetitMazilloux
						(Blogspot.com)</a></p>
				<p><a href="https://www.instagram.com/lepetitmazilloux/" id="link-to-instagram" target="_blank">Instagram</a>
				</p>
				<p><a href="http://vanessagillettceramiques.blogspot.com/" id="link-to-blog-2">VanessaGillettCéramiques
						(Blogspot.com)</a></p>

				<h4>Nos Partenaires</h4>
				<p><a href="https://aneazimut.com/" target="_blank" id="link-to-blog-1">Ane Azimut</a></p>
				<p><a href="tel:++33660471702" id="link-to-blog-1">+33 (0)6-60-47-17-02</a></p>

				<h6><em><a href="" type="button" id="mentions_legales_link" data-toggle="modal" data-target="#mentionslegalesModal">Mentions légales</em></a></h6>

				<!-- Modal Mentions Légales -->
				<div class="modal fade" id="mentionslegalesModal" tabindex="-1" role="dialog" aria-labelledby="mentionslegalesModal" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Mentions légales</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<p id="desc_mentions_legales">En vertu de l'article <em>6 de la loi n° 2004-575 du 21
										juin 2004</em> pour la confiance dans l'économie numérique,
									il est précisé aux utilisateurs du site internet <a href="http://www.lepetitmazilloux.com/" id="lpm_link_mentions_legales">www.lepetitmazilloux.com</a> l'identité des
									différents intervenants dans le cadre de sa réalisation et de son suivi.
									<br /><br />

									<strong>Propriétaire :</strong>
									<br />
									Mme. GILLETT Vanessa<br />
									Le Petit Mazilloux<br />
									Présailles<br />
									43150 - Haute-Loire<br />

									Téléphone : <a href="tel:++33677971875" id="phone_ref_mentions_legales">+33
										(0)6-77-97-18-75</a>
									<br />

									E-mail : <a href="mailto:gillettvanessa@gmail.com" id="mail_ref_mentions_legales">gillettvanessa@gmail.com</a>
									<br /><br />

									Responsable de la publication : Le Petit Mazilloux
									<br /><br />

									Les Chambres d'hôte du Petit Mazilloux proposent les services suivants : <br />

									<em>Chambres d’hôtes, table d’hôte et atelier (Création, vente de céramiques et
										stages
										de céramique & textile).</em>
									<br /><br />
								</p>

								<hr style="width:100%">

								<p id="desc_mentions_legales_2">
									<strong>Hébergement Web :</strong>
									<br />
									1&1
									<br />
									701 Lee Road, Suite 300
									<br />
									Chesterbrook, PA 19087
									<br />
									1-484-254-5555
									<br />
									info@IONOS.com
									<br />
									VAT ID: 74-3093319
								</p>

								<hr style="width:100%">

								<p id="desc_mentions_legales_3">
									<strong>Conception & developpement :</strong>
									<br />

									M. MARTY-JACKSON Curtis <span id="sm_font">(Concepteur Développeur
										d'Applications, Développeur Web & Web Mobile).</span>
									<br />

									Téléphone : <a href="tel:++33633293256" id="phone_ref_mentions_legales">+33(0)
										06-33-29-32-56</a>
									<br />

									E-mail : <a href="mailto:contact@curtisjackson-developer.com" id="mail_ref_mentions_legales">contact@curtisjackson-developer.com</a>
									<br />
								</p>

								<hr style="width:100%">

								<p class="conditions_utilisation">
									<span class="mentions_legales_header">Conditions d'utilisation du site</span>
									<br />
									Le présent site Web est la propriété exclusive des « Chambres et Table d'hôtes du
									Petit Mazilloux ».
									Les éléments du site, tels que les textes, les images fixes ou animées, les bases de
									données, les programmes, les langages, etc...,
									sont protégés par toute législation en vigueur (le droit d’auteur, le droit suis
									generis du producteur de la base de données,
									droit des marques…). L’autorisation de reproduction ne vous est concédée que sous
									forme numérique en consultation.
									L’impression papier est autorisée aux fins de copie privée à l’usage exclusif du
									copiste au sens de l’article L. 122-5 2° du
									Code de la Propriété Intellectuelle.Les informations contenues dans le présent site
									web sont données à titre indicatif et sont
									sujettes à changement sans préavis. Nous ne pouvons garantir l’exactitude des
									informations qu’il contient,
									ni le fonctionnement du site Web dans tous les cas de figure.Nous n’assumons aucune
									responsabilité relative aux informations
									contenues et à l’existence ou la disponibilité de toute offre mentionnée dans le
									présent site Web et décline toute
									responsabilité découlant d’une négligence ou autre concernant ces informations.
								</p>

								<hr style="width:100%">

								<p class="conditions_utilisation">
									<span class="mentions_legales_header">Droits de propriété Intellectuelle</span>
									<br />
									L’ensemble des éléments de ce site est protégé par copyright © – tous droits
									réservés.Tous les éléments de propriété intellectuelle,
									marques, noms commerciaux et logos sont la propriété des « Chambres et Table d'hôtes
									du Petit Mazilloux » sauf mentions contraires.
									Toute reproduction du présent site Web est interdite.Les dessins, photographies,
									images, textes, séquences animées sonores ou non,
									et autres documentations représentées sur le présent site internet sont objet de
									droits de propriété industrielle et/ou intellectuelle,
									propriétés des « Chambres et Table d'hôtes du Petit Mazilloux ». A ce titre, toute
									reproduction, représentation, adaptation, traduction,
									et/ou transformation, partielle ou intégrale, ou transfert sur un autre site sont
									interdits. La copie à usage privé de ces différents
									objets de droit est autorisée, sous réserve de la mention de la source. Les
									renseignements et présentations contenus dans les pages de
									ce site sont fournis à titre purement indicatif et restent susceptibles de
									modifications à tout moment et sans préavis.
									Leur utilisation à des fins privées ou professionnelles ne saurait engager la
									responsabilité des
									« Chambres et Table d'hôtes du Petit Mazilloux » de quelque manière que ce soit.
									« Les Chambres et Table d'hôtes du Petit Mazilloux » ne peut garantir l’exactitude,
									la précision ou l’exhaustivité des informations mises
									à disposition sur ce site, les photos ne sont pas contractuelles.
								</p>

								<hr style="width:100%">

								<p class="conditions_utilisation">
									<span class="mentions_legales_header">Liens hypertextes</span>
									<br />
									La présence de liens hypertexte renvoyant vers d’autres sites web ne constitue pas
									une garantie sur la qualité de contenu
									et de bon fonctionnement desdits sites. Notre responsabilité ne saurait être engagée
									quant au contenu de ces sites.
									L’internaute doit utiliser ces informations avec les précautions d’usage.La création
									de liens hypertexte vers nos sites
									est soumise à notre accord préalable. Dans le cas de la création d’un lien
									hypertexte vers nos sites qui n’aurait pas
									fait l’objet d’un accord préalable, nous nous réservons le droit d’exiger à tout
									moment le retrait dudit lien hypertexte
									pointant sur nos sites.
								</p>

								<hr style="width:100%">

								<p class="conditions_utilisation">
									<span class="mentions_legales_header">Limitation de responsabilité</span>
									<br />
									Les renseignements et présentations contenus dans les pages de ce site sont fournis
									à titre purement indicatif et restent
									susceptibles de modifications à tout moment et sans préavis. Leur utilisation à des
									fins privées ou professionnelles
									ne saurait engager la responsabilité des « Chambres et Table d'hôtes du Petit
									Mazilloux » de quelque manière que ce soit.
									« Les Chambres et Table d'hôtes du Petit Mazilloux » ne peut garantir l’exactitude,
									la précision ou l’exhaustivité des informations
									mises à disposition sur ce site, les photos ne sont pas contractuelles.En aucun cas,
									l’éditeur ni l’hébergeur du site ne peuvent être tenus
									responsables de dommages directs ou indirect, y compris mais de façon non
									limitative, de la perte de bénéfice, de clientèle
									ou de données, dus à l’utilisation ou de l’impossibilité d’utiliser le site et son
									contenu, ainsi que les éléments auxquels
									le site permet d’accéder. Cette limitation vaut, tant en matière contractuelle que
									délictuelle, même si l’éditeur et/ou
									l’hébergeur ont été informé de la possibilité d’un tel dommage.
								</p>

								<hr style="width:100%">

								<p class="conditions_utilisation">
									<span class="mentions_legales_header">Loi applicable</span>
									<br />
									Le présent site, dans tous ses éléments, est régi par la loi française.
								</p>

							</div>

							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--- End of Our Location -->

	<!-- start of footer -->
	<div class="row footer bg-light col-12">
		<div class="col-8-xl col-lg-8 col-md-8 offset-md-2 col-sm-10 offset-sm-1 col-12">
			<p class="text-center">Vous pouvez réserver l'ensemble de nos logements sur <br />
				<a href="https://www.booking.com/hotel/fr/la-chambre-d-39-hote-du-petit-mazilloux.en-gb.html?aid=397594;label=gog235jc-1FCAEoggI46AdIM1gDaE2IAQGYAQm4ARfIAQzYAQHoAQH4AQyIAgGoAgO4Ao3eoPkFwAIB0gIkNzFlZmExNjctOTY0Zi00ZGRmLWE0ZTgtNTFkMTI0YTY0Yjc12AIG4AIB;sid=af36632c1cb5fd89f2fb4199f57b32d2;dest_id=-1460024;dest_type=city;dist=0;group_adults=2;group_children=0;hapos=1;hpos=1;no_rooms=1;room1=A%2CA;sb_price_type=total;sr_order=popularity;srepoch=1596469013;srpvid=7c4e6dcabe4b00c3;type=total;ucfs=1&#hotelTmpl" target="_blank" id="link-to-booking"><strong>Booking.com</strong></a>
			</p>
			<p class="text-center">ou en appelant directement au<br />
				<a href="tel:++33677971875" class="phone-ref"><strong>+33 (0)6-77-97-18-75</strong></a>
			</p>
		</div>
	</div>

	<div class="col-8-xl col-lg-8 col-md-8 offset-md-2 col-sm-10 offset-sm-1 ccol-12">
		<p class="text-center" style="flex-wrap: wrap;">Conçu & Développé par :<br /> <a href="http://www.curtisjackson-developer.com/" target="_blank" id="link-to-site"><strong>The Fox
					Byte</strong></a></p>
	</div>

	<div class="col-12">
		<p class="text-center">Copyright &copy; 2021</p>
	</div>
	<footer class="container">
		<div class="row only-mobile">
			<div class="col-6 offset-2">
				<a class="btn btn-success btn-block text-center" href="tel:++33677971875"><i class="fa fa-phone" aria-hidden="true"></i> Appeler</a>
			</div>
		</div>
	</footer>

	<!-- Cookie Consent Banner -->
	<script src="https://cdn.websitepolicies.net/lib/cookieconsent/1.0.3/cookieconsent.min.js" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.1/moment.min.js"></script>
	<script type="text/javascript" src="js/map.js"></script>
	<script type="text/javascript" src="js/smooth-scroll.js"></script>
	<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
	<script type="text/javascript" src="js/image-effect.js"></script>
	<script type="text/javascript" src="js/script.js"></script>




	<script>

		$('#inputNbAdultes').on('change', function() {
			// alert( $( "#inputNbAdultes" ).val());
			// alert($('#inputNbAdultes option:selected').val());
			$('#hiddenInputNbAdultes').val($('#inputNbAdultes option:selected').val());
		});

		$('#inputNbEnfants').on('change', function() {
			// alert( $( "#inputNbAdultes" ).val());
			// alert($('#inputNbEnfants option:selected').val());
			$('#hiddenInputNbEnfants').val($('#inputNbEnfants option:selected').val());
		});


		$("#form_submit_btn").click(function (){

			if ($("#inputNbAdultes").val() == null){
				alert("Veuillez renseigner le nombre d'adulte(s)");
			} else if ($("#inputNbEnfants").val() == null){
				alert("Veuillez renseigner le nombre d'enfants(s)");
			}

			// if ($("#inputNbEnfants").val() == null || $("#inputNbEnfants").val() == null){

			// 	alert("Veuillez choisir le nombre d'adultes et d'enfants ainsi que les dates d'arrivée et de départ afin de calculer le montant de votre séjour.");

			// 	} else if ($("#from-date").val() == "" || $("#to-date").val() == ""){
			// 	alert("Veuillez choisir les dates d'arrivée et de départ afin de calculer le montant de votre séjour.");

			// 	} else {

			// 	$( "#hidden-difference-container" ).removeClass( "d-none" );
			// 	$( "#hidden-total_hebergement-container" ).removeClass( "d-none" );

			// 	if( $("#inputLogement").val() == "Chambre Porcelaine + Chambre Enfant") {
					
			// 		var nb_nights = $("#hidden-date-diff").val();
			// 		var price_per_night = 80;
			// 		var price_optional_room = 50;
			// 		var total_hebergement = nb_nights * price_per_night + nb_nights * price_optional_room;

			// 		$('#total_hebergement').val(total_hebergement + ' €');

			// 		var acompte = total_hebergement * 30 / 100;
			// 		$('#acompte').val(acompte + ' €');

			// 	} else if ($("#inputLogement").val() == "Chambre Porcelaine")  {

			// 		var nb_nights = $("#hidden-date-diff").val();
			// 		var price_per_night = 80;
			// 		var total_hebergement = nb_nights * price_per_night;

			// 		$('#total_hebergement').val(total_hebergement + ' €');

			// 		var acompte = total_hebergement * 30 / 100;
			// 		$('#acompte').val(acompte + ' €');

			// 	} else {

			// 		var nb_nights = $("#hidden-date-diff").val();
			// 		var price_per_night = 80;
			// 		var total_hebergement = nb_nights * price_per_night;

			// 		$('#total_hebergement').val(total_hebergement + ' €');

			// 		var acompte = total_hebergement * 30 / 100;
			// 		$('#acompte').val(acompte + ' €');
			// 	}
			// }		
		});


	// 	$("#inputNbAdultes").change(function() {
	// 	var nb_adultes = $('#hiddenInputNbAdultes').val();
	// 	// var nb_enfants = $('#hiddenInputNbEnfants').val();

    //     // var val = $(this).val();

    //     if (nb_adultes == 1) {
    //         $("#inputLogement").html("<option value='Chambre Porcelaine' name='chambre_porcelaine'>Chambre Porcelaine</option><option value='Chambre Terre Cuite' name='chambre_terrecuite'>Chambre Terre Cuite</option>");
    //     } else if (nb_adultes == 2) {
    //         $("#inputLogement").html("<option value='Chambre Porcelaine' name='chambre_porcelaine'>Chambre Porcelaine</option><option value='Chambre Terre Cuite' name='chambre_terrecuite'>Chambre Terre Cuite</option>");
	// 	}
	// });


	// $("#inputNbEnfants").change(function() {
	// 	var nb_adultes = $('#hiddenInputNbAdultes').val();
	// 	var nb_enfants = $('#hiddenInputNbEnfants').val();

    //     // var val = $(this).val();

    //     if (nb_adultes == 1 || nb_adultes && nb_enfants == 0) {
    //         $("#inputLogement").html("<option value='Chambre Porcelaine' name='chambre_porcelaine'>Chambre Porcelaine</option><option value='Chambre Terre Cuite' name='chambre_terrecuite'>item1: test 2</option>");
    //     } else if (nb_adultes == 2 || nb_adultes && nb_enfants == 0) {
    //         $("#inputLogement").html("<option value='Chambre Porcelaine' name='chambre_porcelaine'>Chambre Porcelaine</option><option value='Chambre Terre Cuite' name='chambre_terrecuite'>item1: test 2</option>");

    //     } else if (nb_adultes == 2 || nb_adultes && nb_enfants < 0) {
    //         $("#inputLogement").html("<option value='Chambre Porcelaine option chambre' name='chambre_porcelaine_option_chambre'>Chambre Porcelaine avec option chambre supplémentaire</option>");

    //     }
    // });

	$("#inputNbAdultes").change(function() {
		var nb_adultes = $('#hiddenInputNbAdultes').val();
		var nb_enfants = $('#hiddenInputNbEnfants').val();

		$( "#hidden_input_logement" ).removeClass( "d-none" );

        if ((nb_adultes == 1 || nb_adultes == 2) && nb_enfants == 0 ) {
            $("#inputLogement").html("<option value='Chambre Porcelaine' name='chambre_porcelaine'>Chambre Porcelaine</option><option value='Chambre Terre Cuite' name='chambre_terrecuite'>Chambre Terre Cuite</option>");
        }
	});


	$("#inputNbEnfants").change(function() {
		var nb_adultes = $('#hiddenInputNbAdultes').val();
		var nb_enfants = $('#hiddenInputNbEnfants').val();

		$( "#hidden_input_logement" ).removeClass( "d-none" );

        if (nb_adultes != 0 && nb_enfants != 0) {
			$("#inputLogement").html("<option value='Chambre Porcelaine + Chambre Enfant' name='chambre_porcelaine_option_chambre'>Chambre Porcelaine avec option chambre supplémentaire (+50€/nuit)</option>");
		} else if (nb_adultes != 0 && nb_enfants == 0 ) {
			$("#inputLogement").html("<option value='Chambre Porcelaine' name='chambre_porcelaine'>Chambre Porcelaine</option><option value='Chambre Terre Cuite' name='chambre_terrecuite'>Chambre Terre Cuite</option>");
		}
	});
	
	$("#calculer_hebergement").click(function (){

		if ($("#inputNbEnfants").val() == null || $("#inputNbEnfants").val() == null){

			alert("Veuillez choisir le nombre d'adultes et d'enfants ainsi que les dates d'arrivée et de départ afin de calculer le montant de votre séjour.");

		} else if ($("#from-date").val() == "" || $("#to-date").val() == ""){
			alert("Veuillez choisir les dates d'arrivée et de départ afin de calculer le montant de votre séjour.");

		} else {

			$( "#hidden-difference-container" ).removeClass( "d-none" );
			$( "#hidden-total_hebergement-container" ).removeClass( "d-none" );
			
			if( $("#inputLogement").val() == "Chambre Porcelaine + Chambre Enfant") {
				
				var nb_nights = $("#hidden-date-diff").val();
				var price_per_night = 80;
				var price_optional_room = 50;
				var total_hebergement = nb_nights * price_per_night + nb_nights * price_optional_room;

				$('#total_hebergement').val(total_hebergement + ' €');

				var acompte = total_hebergement * 30 / 100;
				$('#acompte').val(acompte + ' €');

			} else if ($("#inputLogement").val() == "Chambre Porcelaine")  {

				var nb_nights = $("#hidden-date-diff").val();
				var price_per_night = 80;
				var total_hebergement = nb_nights * price_per_night;

				$('#total_hebergement').val(total_hebergement + ' €');

				var acompte = total_hebergement * 30 / 100;
				$('#acompte').val(acompte + ' €');

			} else {

				var nb_nights = $("#hidden-date-diff").val();
				var price_per_night = 80;
				var total_hebergement = nb_nights * price_per_night;

				$('#total_hebergement').val(total_hebergement + ' €');

				var acompte = total_hebergement * 30 / 100;
				$('#acompte').val(acompte + ' €');
			}
		}		
	});


	$("#form_submit_btn").click(function (){

		if ($("#inputNbEnfants").val() == null || $("#inputNbEnfants").val() == null){

			alert("Veuillez choisir le nombre d'adultes et d'enfants ainsi que les dates d'arrivée et de départ afin de calculer le montant de votre séjour.");

		} else if ($("#from-date").val() == "" || $("#to-date").val() == ""){
			alert("Veuillez choisir les dates d'arrivée et de départ afin de calculer le montant de votre séjour.");

		} else {

			$( "#hidden-difference-container" ).removeClass( "d-none" );
			$( "#hidden-total_hebergement-container" ).removeClass( "d-none" );
			
			if( $("#inputLogement").val() == "Chambre Porcelaine + Chambre Enfant") {
				
				var nb_nights = $("#hidden-date-diff").val();
				var price_per_night = 80;
				var price_optional_room = 50;
				var total_hebergement = nb_nights * price_per_night + nb_nights * price_optional_room;

				$('#total_hebergement').val(total_hebergement + ' €');

				var acompte = total_hebergement * 30 / 100;
				$('#acompte').val(acompte + ' €');
				alert(total_hebergement);

			} else if ($("#inputLogement").val() == "Chambre Porcelaine")  {

				var nb_nights = $("#hidden-date-diff").val();
				var price_per_night = 80;
				var total_hebergement = nb_nights * price_per_night;

				$('#total_hebergement').val(total_hebergement + ' €');

				var acompte = total_hebergement * 30 / 100;
				$('#acompte').val(acompte + ' €');
				alert(total_hebergement);

			} else {

				var nb_nights = $("#hidden-date-diff").val();
				var price_per_night = 80;
				var total_hebergement = nb_nights * price_per_night;

				$('#total_hebergement').val(total_hebergement + ' €');

				var acompte = total_hebergement * 30 / 100;
				$('#acompte').val(acompte + ' €');

				alert(total_hebergement);
			}
		}		
		});



		// $("#to-date").change(function (){

		// 	if($("#inputLogement").val() == "Chambre Porcelaine option chambre"){
				
		// 		var nb_nights = $("#hidden-date-diff").val();
		// 		var price_per_night = 80;
		// 		var price_optional_room = 50;

		// 		var total_hebergement = nb_nights * price_per_night + nb_nights * price_optional_room;

		// 		$('#total_hebergement').val(total_hebergement + ' €');
		// 		// alert(total);

		// 	} else {

		// 		var nb_nights = $("#hidden-date-diff").val();
		// 		var price_per_night = 80;

		// 		var total_hebergement = nb_nights * price_per_night;

		// 		$('#total_hebergement').val(total_hebergement + ' €');
		// 		// alert(total);
		// 	}

		// 	});

		// var price_per_night = 80;
		// 			var total_hebergement = duration.days() * price_per_night;
				
		// 			$('#total_hebergement').val(total_hebergement + ' €');

		// 			// Chambre Porcelaine avec option chambre enfants
		// 				var price_per_night = 80;
		// 				var price_optional_room = 50;

		// 				var total_hebergement = (duration.days() * price_per_night) + (duration.days() * price_optional_room);
					
		// 				$('#total_hebergement').val(total_hebergement + ' €');

		// $( "#inputNbAdultes" ).change(function() {
		// 	var value = $(this).val();
		// 	if(value == 8) {
		// 		$("#inputLogement ").hide();
		// 	} else {
		// 		$("#location-two").show();
		// 	}
		// 	});

		// if($('#inputNbAdultes option:selected').val() == 1){
		// 	alert('one adult');
		// } else if ($('#inputNbAdultes option:selected').val() == 2){
		// 	alert('two adults');
		// } else if ($('#inputNbAdultes option:selected').val() == 2 && $('#inputNbEnfants option:selected').val() == 1){
		// 	alert('one adults and one kid');
		// }

		// $('#arrival').change(function(){
		// 	var arrival = $('#arrival').val();
		// 	$('#departure').prop("disabled", false);
		// 	$("#departure").attr("min", arrival);
		// });


		// Disable Option 
		// $('#inputLogement').on('change', function() {
		// 	// alert( this.value );
		// 	if(this.value === "Chambre Terre Cuite"){
		// 		// $("#inputNbEnfants").prop('disabled', true);
		// 		// $("#inputNbEnfants").prop('readOnly', true);
		// 		// $("#inputNbEnfants").val(0);
		// 		// $("#inputNbEnfants").attr('disabled', true);
		// 		// alert($("#inputNbEnfants").val());
		// 		// $('select[name="nombre_enfants"]').val('0');
		// 		$('select[name="nombre_enfants"]').prop('selectedIndex', 1);
		// 		// alert($('select[name="nombre_enfants"]').val('0'));
		// 	} else {
		// 		$("#inputNbEnfants").prop('readonly', false);
		// 	}
		// });

		// if($("#inputNbEnfants option").val() == 0){
		// 	alert('yes');
		// }


		// var arrival = document.querySelector('#arrival');
		// var departure = document.querySelector('#departure');

		// arrival.addEventListener('change', function(){
		// 	if(this.value != '') setEndDate(this.value);
		// 	$('#departure').prop("disabled", false);
		// });

			
		// function setEndDate(meetingDate){
		// 	let date = new Date(meetingDate);
		// 	// adding 1 day to meeting date
		// 	date = new Date(date.setDate(date.getDate() + 1));

		// 	// This function add 0 before number if number is less than 10
		// 	// * This function is important if you want to show date on html date picker
		// 	function formatNum(num) {
		// 		if(num < 10) return `0${num}`
		// 		return num;
		// 	}

		// 	// change date format to "year-month-day" format to set on date picker value
		// 	let newFormatedDate = `${date.getFullYear()}-${formatNum(date.getMonth()+1)}-${formatNum(date.getDate())}`;

		// 	departure.value = newFormatedDate;
		// 	departure.setAttribute('min', newFormatedDate);

		// 	alert(newFormatedDate);
		// }

		

		$(function() {

			// create the from date
			$('#from-date').datepicker({
			autoclose: true,
			format: 'dd-mm-yyyy',
			min: '01-04-2022',
			}).on('changeDate', function(ev) {
			ConfigureToDate();
			});


			$('#to-date').datepicker({
			autoclose: true,
			format: 'dd-mm-yyyy',
			startDate: $('#from-date').val()
			});

			// Set the min date on page load
			ConfigureToDate();

			// Resets the min date of the return date
			function ConfigureToDate() {
				$('#to-date').val("").datepicker("update");
				$('#to-date').datepicker('setStartDate', $('#from-date').val());
				}

				$("input[name='departure']").on('change', function() {
				var fromDate = moment($('#from-date').val(), 'DD-MM-YYYY');
				var toDate = moment($('#to-date').val(), 'DD-MM-YYYY');

				if (fromDate.isValid() && toDate.isValid()) {
					var duration = moment.duration(toDate.diff(fromDate));
					$('#difference').val(
					duration.days() + ' Nuit(s)'
					);

					$('#hidden-date-diff').val(
					duration.days()
					);

					// var price_per_night = 80;

					// var total_hebergement = duration.days() * price_per_night;
				
					// $('#total_hebergement').val(total_hebergement + ' €');
					
				}
				});
			});

			// $("#total_hebergement").val($('#hidden-date-diff').val() * )

					// if($("#inputLogement").val() == "Chambre Porcelaine option chambre"){
					// 	var price_per_night = 80;
					// 	var price_optional_room = 50;

					// 	var total_hebergement = (duration.days() * price_per_night) + (duration.days() * price_optional_room);
					
					// 	$('#total_hebergement').val(total_hebergement + ' €');
					// } 
					
					// else {
					
					// var price_per_night = 80;
					// var total_hebergement = duration.days() * price_per_night;
				
					// $('#total_hebergement').val(total_hebergement + ' €');
					// }


					// Chambre Porcelaine sans option ou Terre Cuite
					



	// 				$("#check-room").click(function (){
	// 					if($("#inputLogement").val() == "Chambre Porcelaine option chambre"){
	// 						alert('OPtion chambre Porcelaine et Plus')					
	// 						} else {
	// 							alert('chambre normale')					

	// 					}

	// });
					
				


			// $("#to-date").on('click', function(){
			// 	$( "#hidden-difference-container" ).removeClass( "d-none" );
			// 	$( "#hidden-total_hebergement-container" ).removeClass( "d-none" );
			// });

			// $("#calculate_price").on('click', function(){
			// 	$('#demo').val($('#hidden-date-diff').val() * 80);
			// });


			// $( "#calculate_price" ).click(function() {
			// 	var nb_night = $('#hidden-date-diff').val();
			// 	var price_night = 80;
			// 	var total = nb_night * price_night;

			// 	$('#total_sejour').html( total + '€' );
			// });


		window.addEventListener("load", function() {
			window.wpcc.init({
				"border": "thin",
				"corners": "small",
				"colors": {
					"popup": {
						"background": "#f6f6f6",
						"text": "#000000",
						"border": "#555555"
					},
					"button": {
						"background": "#555555",
						"text": "#ffffff"
					}
				},
				"position": "bottom",
				"content": {
					"message": "Ce site utilise des cookies pour vous garantir la meilleure expérience sur notre site. En utilisant notre site, vous acceptez les cookies.",
					"link": "En savoir plus",
					"button": "Accepter"
				}
			})
		});

		// Prevent Form Rebsubmission on page Refresh
		if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
		}

	
		// Form Validation
		function validateForm() {
			var $fname = document.forms["reservationForm"]["first_name"].value;
			var $lname = document.forms["reservationForm"]["last_name"].value;
			var $email = document.forms["reservationForm"]["email"].value;
			var $phone = document.forms["reservationForm"]["phone"].value;
			var $logement = document.forms["reservationForm"]["selected_logment"].value;
			var $arrival = document.forms["reservationForm"]["arrival"].value;
			var $departure = document.forms["reservationForm"]["departure"].value;
			var $nombre_adultes = document.forms["reservationForm"]["nombre_adultes"].value;
			var $nombre_enfants = document.forms["reservationForm"]["nombre_enfants"].value;
			var $option_lit_bebe = document.forms["reservationForm"]["option_lit_bebe"].value;
			var $option_repas = document.forms["reservationForm"]["option_repas"].value;
			var $informations = document.forms["reservationForm"]["informations"].value;

			var recaptcha = $("#g-recaptcha-response").val();

			
			if ($fname == "" || $lname == "" || $email == "" || $phone == "" || $logement == "" || $arrival == "" || $departure == "" || $nombre_adultes == "" ||
				$nombre_enfants == "" || $option_lit_bebe == "" || $option_repas == "" || recaptcha == "") {

					event.preventDefault();
					alert("Tous les champs ne sont pas renseignés, verifiez si vous bien avez validé le reCaptcha");
				
				return false;
			}
			else {
				alert("Merci pour votre demande, un e-mail récapitulatif de votre demander vous sera envoyé prochainement. L'équipe du Petit Mazilloux")
			}
		}
		

	</script>
</body>

</html>
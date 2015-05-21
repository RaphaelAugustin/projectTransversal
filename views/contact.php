<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="../web/css/contact.css">
</head>
<body>
	<!-- MENU -->
	<div class="menu">
		<ul>
			<li><a class="lien-logo" href="">SCOOT'LIB</a></li>
			<li><a class="lien-menu" href="home.php">Accueil</a></li>
			<li><a class="lien-menu" onclick="scrollComment()" href="#Comment">Comment ca marche?</a></li>
			<li><a class="lien-menu" onclick="scrollPlan()" href="#Plan">Plan des stations</a></li>
			<li><a class="lien-menu" onclick="scrollOffres()" href="#Offres">Offres et tarifs</a></li>
			<li><a class="lien-menu" href="">FAQ</a></li>
			<li><a class="lien-menu" onclick="scrollContact()" href="#Contact">Contact</a></li>
		</ul>
		<ul>
			<li><a class="lien-connect" href="">Connexion</a></li>
			<li><a class="lien-inscription" href="">Inscription</a></li>
		</ul>
	</div>
	<!-- CONTACT -->
	<div class="bloc-contact">
		<p class="contact-scoot"> Contacter Scootlib'</p>
		<p class="question">Une question sur le service? Les forfaits? Les tarifs?
		<br>Les stations? Les véhicules? Envoyez nous un email !</p> 
		<p class="nom">Votre nom:</p>
		<input class="input-nom" type="text" name="nom" placeholder="ex:Michel Sardou">
		<p class="mail">Votre mail:</p>
		<input class="input-mail" type="text" name="mail" placeholder="ex:michelsardou@gmail.com">
		<p class="message">Votre message:</p>
		<input class="input-message" type="text" name="message">
		<input type="button" class="button" value="Envoyer">
		<p class="contact-client">Contacter le centre  de relation client <br>
			7j/7 et 24h/24h </p>
		<p class="numero">Numéro Tel: 0800 94 2000 (numéro vert)</p>
		<p class="ecrire">Nous écrire</p>
		<p class="adresse-ecrire">Scootlib'<br>23 rue du professeur Victor Pauchet <br>
			92420 Vaucresson</p>
		<p class="centre">Notre centre d'acceuil</p>
		<p class="adresse-centre">5 rue Edouard VII <br>
			75009 Paris <br>
			Ouvert de 11h à 20h du lundi au samedi<br>
			Fermé les dimanches et jours fériés</p>
		<p class="reclamation">Envoyez une réclamation</p>
		<p class="adresse-reclamation">Service reclamation Scootlib'<br>
			23 rue du professeur Victor Pauchet <br>
			92420 Vaucresson</p>
		<hr>
		<ul class="ul-flooter">
            <li><a class="lien-floot" href="home.php">Accueil</a></li>
            <li><a class="lien-floot" href="">Comment ca marche?</a></li>
            <li><a class="lien-floot" href="">Plan des stations</a></li>
            <li><a class="lien-floot" href="">Offres et tarifs</a></li>
            <li><a class="lien-floot" href="">FAQ</a></li>
            <li><a class="lien-floot" href="">Contact</a></li>
        </ul>
        <img class="logo-twitter" src="../web/img/logo-twitter.png" alt="twitter">
             <img class="logo-facebook" src="../web/img/logo-facebook.png" alt="facebook">
             <img class="logo-google" src="../web/img/logo-google.png" alt="google">
             <img class="logo-youtube" src="../web/img/logo-youtube.png" alt="youtube">
	</div>
</body>
</html>
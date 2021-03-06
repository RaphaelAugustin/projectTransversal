<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400' rel='stylesheet' type='text/css'>
    <script src= "../web/js/script.js"></script>
	<link rel="stylesheet" href="../web/css/home.css">
</head>
<body>
	<div class="menu">
		<ul>
			<li><a class="lien-logo" href="home.php">SCOOT'LIB</a></li>
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
		 <div class="large-background-slider">
               <div class="mini-wrap">
                    <div class="home-slider">
                    	<h2 class="title">Mettre un Titre</h2>
                    	<div class="bloc">
                    	<p class="p-bloc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>
            		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            		<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            		</p> 
                    	</div>
                    	<img class="img-scooter" src="../web/img/image-scooter.jpg" alt="liste">

                        <ul class="slider-list">
                            <li class="slider-item">
                                <div class="bg"></div>
                                <div class="content-box">
                                    <div class="content">
                           				
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <div class="pagination">
                            <div class="list">
                            	<button type="button" class="btn-reset bullet active"></button>
                                <button type="button" class="btn-reset bullet"></button>
                                <button type="button" class="btn-reset bullet"></button>
                            </div>
                        </div>
                        <div class="navigation">
                            <button type="button" class="btn-reset arrow left"><span class="icon-arrow"></span></button>
                            <button type="button" class="btn-reset arrow right"><span class="icon-arrow"></span></button>
                        </div>
                    </div>
                </div>
            </div>	
            <!-- SEPATEUR -->
            <div class="rectangle"><p class="separator-text">Comment ca marche?</p>
            </div>
            <!-- Comment ca marche? -->
            <div class="bloc-tarif">
            	<p class="p-offre">Lorem ipsum dolor sit amet, consectetur adipisicing elit, <br>
            		sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
            		<br>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
            	</p>
            	 <img class="cercle1" src="../web/img/cercle.png" alt="cercle">
            	 <img class="icon-men" src="../web/img/men.png" alt="men">
            	 <img class="cercle2" src="../web/img/cercle.png" alt="cercle">
            	 <img class="icon-reservation" src="../web/img/icon-reservation.png" alt="reservation">
            	  <img class="cercle3" src="../web/img/cercle.png" alt="cercle">
            	 <img class="icon-main" src="../web/img/icon-main.png" alt="main">
            	  <img class="cercle4" src="../web/img/cercle.png" alt="cercle">
            	 <img class="icon-scooter" src="../web/img/icon-scooter.png" alt="rouler">
            	  <img class="cercle5" src="../web/img/cercle.png" alt="cercle">
            	 <img class="icon-parking" src="../web/img/icon-parking.png" alt="parking">
            </div>
            <!-- Separateur -->
        <div class="bloc-station">
             <div class="rectangle-2"><p class="separator-text">Plans des stations</p>
                <input class="recherche" type="text" name="recherche" placeholder="Saisir un lieu">
                <input class="ok-recherche" type="submit" value="Recherche">   
             <img class="map" src="img/map.png" alt="map"> 
            </div>
        </div>
        <!-- Offres et tarifs -->
        <div class="bloc-offre">
                <div class="rectangle-3"><p class="separator-text">Offres et tarifs</p>
                    <div class="forme-tarif">
                        <div class="bloc-formule"><p class="text-formule-1">Scootlib' 1 semaine</p>
                        </div>
                        <p class="prix">10€</p><p class="jours">/7jours</p>
                        <p class="plus">+</p><p class="text-plus"> 7€ par 1/2 heure d'utilisation</p>
                        <p class="text-body">Scootlib’ 1 semaine est utilisé par les personnes <br>qui souhaitent se déplacer de façon ponctuelle 
                        <br>sur une semaine. Le badge doit être retiré en <br>espace d'abonnement.</p>
                         <input type="button" class="bouton-offres" value="Souscrire à cette offre">
                  </div> 
                  <div class="forme-tarif-2">
                    <a class="bloc-formule-2" href=""><p class="text-formule-2">Scootlib' 1 mois</p></a>
                    <p class="prix">25€</p><p class="jours">/mois</p>
                    <p class="plus">+</p><p class="text-plus"> 6.5€ par 1/2 heure d'utilisation</p>
                    <p class="text-body">Scootlib 1 mois est adapté aux personnes qui <br>ont besoin de disposer d’un scooter sur 
                        <br>plusieurs semaines.</p>
                 <input type="button" class="bouton-offres" value="Souscrire à cette offre">
                </div>
                <div class="forme-tarif-3">
                    <div class="bloc-formule"><p class="text-formule-3">Scootlib' 1 an</p>
                    <p class="prix-3">120€</p><p class="jours-3">/an</p>
                    <p class="plus-3">+</p><p class="text-plus-3"> 5.5€ par 1/2 heure d'utilisation</p>
                     <p class="text-body-3">Scootlib’ 1 an est recommandé aux personnes <br>qui veulent disposer d’un scooter à tout<br>
                      moment et tout au long de l’année au tarif <br>le plus avantageux..</p>
                       <input type="button" class="bouton-offres" value="Souscrire à cette offre">
                    </div>
                </div>
            </div>
        </div>
        <!-- CONTACT -->
        <div class="bloc-contact">
            <p class="text-contact">Des questions? N'hesitez pas à nous contacter </p>
            <form> 
                    <input type="button" class="bouton" value="Contact" onclick="location.href='contact.php'">
            </form> 
        </div>
        <!-- Flotter -->
        <div class="bloc-flooter">
        <ul>
            <li><a class="lien-menu-floot" href="home.php">Accueil</a></li>
            <li><a class="lien-menu-floot" href="">Comment ca marche?</a></li>
            <li><a class="lien-menu-floot" href="">Plan des stations</a></li>
            <li><a class="lien-menu-floot" href="">Offres et tarifs</a></li>
            <li><a class="lien-menu-floot" href="">FAQ</a></li>
            <li><a class="lien-menu-floots" href="contact.php">Contact</a></li>
        </ul>
             <img class="logo-twitter" src="../web/img/logo-twitter.png" alt="twitter">
             <img class="logo-facebook" src="../web/img/logo-facebook.png" alt="facebook">
             <img class="logo-google" src="../web/img/logo-google.png" alt="google">
             <img class="logo-youtube" src="../web/img/logo-youtube.png" alt="youtube">
            <img class="logo-googleplay" src="../web/img/google-play.jpg" alt="google-play">
            <img class="logo-apple" src="../web/img/apple-store.png" alt="apple-store">
        </div>		
</body>
</html>
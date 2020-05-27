<!DOCTYPE html>
<html lang="fr">
<head>

  <title>Aeroclub de Chinon</title>
  <meta charset="utf-8"> 
  
  <link rel="stylesheet" href="../Aero.css" />
  <link rel="icon" href="../img/favicon.ico" />
  
</head>
<body>

	<?php include("../menu.php");?>


	<h1 class="titre">CONTACT</h1>
	
	<div id="contact">
		<h2 class="sousTitre">INFORMATIONS</h2>
		<p>N'hésitez pas à nous contacter ou à venir nous rendre visite ! </p>
		<p>Nous sommes situés à 45 min de Tours en voiture, ou à 50 min par le TER Transilien.</p>
	
		<h3>Aérodrome de Chinon</h3>
		<p>37500 Chinon, 14 route d'Azay.</p>
		<p>aeroclubchinon@web.org</p>
		<p>08 00 56 13 69</p>
		

		<img src="../img/chinon.png" height="300" width="600">
	</div>
	<div id="formulaire">
		<h2 class="sousTitre">FORMULAIRE DE CONTACT</h2>
		<form action="" method="">
			Nom :
			<input type="text" name="nom" placeholder="Nom" required>
			<br><br>
			E-mail :
			<input type="email" name="email" placeholder="E-mail" required>
			<br><br>
			Objet :
			<input type="text" name="objet" placeholder="Objet" required>
			<br><br>
			<textarea type="text" name="message" placeholder="Message" required></textarea>
			<input type="submit" value="Envoyer">
		</form>
	</div>

	<div id="horaires">
		<h2 class="sousTitre">HORAIRES</h2>
		<p>
			Nous sommes ouverts du lundi au samedi.
			<br>
			<li>Horaire d'été : 08:00 - 20:00</li>
			<li>Horaire d'hiver : 09:00 - 18:30</li>
		</p>
	</div>

	<?php include("../bouton_top.php");?>
	<?php include("../pied_de_page.php");?>
	
</body>
</html>

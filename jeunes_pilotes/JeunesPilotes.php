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
	
	<div id="flotte">
		<h1 class="titre">BAPTÊME DE L'AIR</h1>
		<img src="../img/bandeau-bapteme-avion.jpg" />
		<p id="tapealeoeil">
			Vous êtes curieux ou bien votre rêve est de devenir pilote, venez tenter l'expérience avec l'équipe pour vous faire découvrir 
			nos installations, notre flotte et vous transmettre le goût pour l'aéronautique.
		</p>
		<h3>Tarif 120 €</h3>
	</div>		
	
	<div id="presentation">
		<h2 class="sousTitre" >PRÉSENTATION</h2>
		<p>Le baptême de l'air est un stage d’été organisé par la Fédération Française Aéronautique.</p>
		<p>Une trentaine de jeunes âgés de 18 à 24 ans choisis se lancent chaque année dans cette aventure qui dure 15 jours (à partir du mois de juillet jusqu'à fin août).</p>
		<p>Chaque jour, nos novices effectuent une navigation dont la qualité est notée par nos bénévoles (habilités par la FFA). </p>
		<p>Le facteur principal est la précision de la trajectoire imposée pour le vol ; pour cela, les bénévoles disposent des tracés d’un GPS enregistreur embarqués dans l’avion du candidat.</p>
		<p>Le Tour Aérien des Jeunes Pilotes est une excellente aventure où les jeunes sillonnent la France et vivent une expérience aéronautique très enrichissante. </p>
		<p>Par ailleurs cet événement est bénéfique pour faire la promotion de notre passion pour l’aviation auprès du grand public.</p>
		<img src="../img/baptêmes.jpg" />
		<h2 class="sousTitre" >L'ÉPREUVE</h2>
		<ul>
			<li>1. Précision des trajectoires</li>
			<li>2. Estimation de la consommation carburant durant chaque vol</li>
			<li>3. Atterrissages de précision, tenue d'axe au décollage</li>
			<li>4. 3000 km à parcourir, le tout en 20 heures de vol</li>
		</ul>
		<h2 class="sousTitre" >LA JOURNÉE TYPE</h2>
		<p>On commence par une vérification météorologique suivi d'un briefing sur la procédure de départ et d'arriver.</p>
		<p>Les avions décollent toute les 2 minutes et lorsque l'ensemble des vols touche à sa fin, les bénévoles présentent le plan de vol du lendemain. </p> 
		<p>Pour finir, un moment de partage est organisé entre les jeunes pilotes, nos bénévoles ainsi que le public venu observer l'événement.</p> 
		
	</div>
	
	<div id="photos">
		<h2 class="sousTitre" >PHOTOS</h2>
		<img id="im" src="../Photos/image1.jpg">
		<p>Premier vol pour l'un de nos candidats à la formation.</p>

		<img id="im" src="../Photos/image4.jpg">

		<p>
			Notre flotte et notre équipe composée de nos bénévoles et nos jeunes pilotes lors de la 11ème édition du tour aérien des jeunes pilotes à notre aéroclub.
		</p>
		
		<h2>PARTAGEZ VOTRE EXPERIENCE ICI</h2>
		<form action="" method="">
			Nom :
			<input type="text" name="nom" placeholder="Nom" required>
			<br><br>
			<textarea type="text" name="message" placeholder="Message" required></textarea>
			<br><br>
			<input type="file"  name="photo" accept="image/png, image/jpeg">
			<br><br>
			<input type="submit" value="Envoyer">
		</form>
	</div>
	<?php include("../bouton_top.php");?>
	<?php include("../pied_de_page.php");?>
	
</body>
</html>

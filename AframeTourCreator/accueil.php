<!DOCTYPE html>
<html lang="fr">
<head>
	 <meta charset="utf-8">																						
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aframe Tour Creator</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/tourCreator.css" />
</head>
<body>
	<div><h1>Voici la liste des photos de votre tour 360° :</h1></div>
	<section id="listeImg">
		<script type="text/javascript" src="js/gestionImages.js"></script>
	</section>
	<footer>
	<div class="container-fluid">
		<script type="text/javascript">
			<?php
				if($dossier = opendir('./uploads')){
					while(false !== ($fichier = readdir($dossier)))
					{
						if($fichier != '.' && $fichier != '..' && $fichier != 'ajout.jpeg' && $fichier != 'validation.png')
						{
							$ext = ".".strtolower(pathinfo($fichier,PATHINFO_EXTENSION));
							echo "ajoutImage('".basename($fichier,$ext)."','uploads/".$fichier."');";
							
						}
					}
				}
			?>
		</script>
		<button id="Ajout" class="btn btn-primary" onclick="ajoutDossier()">
			<img class="imgBtn" src="images/ajout.jpeg" alt="Désolé notre image a rencontré des problèmes">
		</button>

		<button class="btn btn-success">
			<img class="imgBtn" src="images/validation.png" alt="Désolé notre image a rencontré des problèmes">
		</button>
	</div>	
	</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/java.js"></script>
</body>
</html>

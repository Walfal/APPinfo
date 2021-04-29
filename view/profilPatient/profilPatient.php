<!DOCTYPE html>
<html lang="fr">
 	<head>
		<meta charset="UTF-8" />
		<title>Mon profil </title>
		<link href="../headerFooter/headerFooter.css" rel="stylesheet" />
		<link href="profilPatient.css" rel="stylesheet" />
		<link href="http://fonts.cdnfonts.com/css/gemina-2-3d" rel="stylesheet">
		<link rel="icon" href="../images/logo/logo.png" />
	</head>
	<!-- -------------------------------------------- BARRE DE NAVIGATION -------------------------------------------------------------------------------------- -->
	<?php require '../header/header.php'; ?>

	<body>
    <div class="title">
    	<p class="textSize">
    	Nom Personne
    	<img class="imgProfil" src="../images/icons/perm_identity-24px.svg">
    	<p> 
    </div>
       	<div class="principal">
       		<div class="left">
	    		<div class="linedisplay">
					<li> Nom : <br>
		    		<p> Afficher le Nom </p></li>
		    	</div>
		    	<div class = "linedisplay">
		    		<li> Prénom : <br>
		    		<p> Afficher le prénom </p></li>
		    	</div>	
	    		<div class="linedisplay">
					<li > Adresse mail : <br>
	    			<p> Afficher l'adresse Mail </p></li>
		    	</div>		    	 				    	 		
	    		<div class="linedisplay">
	    			<li>Date de naissance : <br>
	    			<p> Afficher la date de naissance </p></li>   		
	    		</div>
	    		<div class="linedisplay"> 
					<li> Genre : </label> <br>
		    		<p> Afficher le genre </p></li>
		    	</div>	
	    		<div class = "linedisplay">
	    			<li> Pays : <br>
		    		<p> Afficher le pays </p></li>
		    	</div>	
				<div class="linedisplay">
					<li> Numéro de téléphone: <br>
	    			<p> Afficher le numéro de téléphone </p></li>	
		    	</div>
		    </div>
		    <div class="right">
		    	<img src="../images/icons/user.png/>"  alt="image profil"/>
		    </div>
		    <div class = "separation">
				<label> _______________________________________________________________________________________________________________ </label>
			</div>	
			<div class = "bouttonCentrageModif">
				<input class="styleValidate" type="button" value="Modifier mon profil">
			</div>		
		</div>
    </div>	
	<div class="title">
		<p class ="textSize">
	    Dernier(s) test(s) passé(s)
		</p>
	</div> 
	<div class="dernierTest">
		<p class = "textSizeNomCentre">
			Nom du centre :
		</p>
		<form action="../mesResultats/mesResultats.php">
		<input type="SUBMIT" input class="buttonResultat" value="Accéder aux résultats"></form>
		
	</div>


</body>



		<!-- ----------------------------------------------------------- FOOTER ---------------------------------------------------------------------------------- -->

<?php require '../footer/footer.php'; ?>
</html>

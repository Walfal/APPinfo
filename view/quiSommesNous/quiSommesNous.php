<br><br>

<?php 
$title='Qui sommes-nous ?';
require_once '../headerFooter/header.php';
require '../../controler/traduction/quiSommesNous/quiSommesNous.php';
?>
<link href="quiSommesNous.css" rel="stylesheet" />

<div class="mainPage">
	<div class="section section1">
		<div class="text">
			<h1 class="titre"><?php echo $titre ?> ?</h1>
			<p class="txt">
				<br /><?php echo $description ?>	</p>
		</div>
		<img class="img" src="../images/divers/team target.jpeg" />
	</div>
	<div class="section section2">
		<img class="img" src="../images/divers/Satisfaction.jpg" />
		<div class="text">
			<p class="txt">
			<?php echo $satisfaction ?>	</p>
		</div>
	</div>
	<!-------------------------------------------------------QUALITÉS-------------------------------------------------------------------------------->

	<div class="section section3">
		<h3 class="txt3"><?php echo $qualite ?> :</h3>
		<div class="qualites">
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br /><?php echo $pro ?></p>
			</div>
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br /><?php echo $ponctualite ?>	</p>
			</div>
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br /><?php echo $equipe ?>	</p>
			</div>
		</div>
	</div>
</div>
<?php require_once '../headerFooter/footer.php'; ?> 

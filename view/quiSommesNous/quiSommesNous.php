<?php 
$title='Qui sommes-nous ?';
require_once '../headerFooter/header.php';
require '../../controller/traduction/quiSommesNous/quiSommesNous.php';
?>
<link href="quiSommesNous.css" rel="stylesheet" />

<div class="mainPage">
	<div class="section section1">
		<div class="text">
			<h1 class="titre"><?= $titre ?> ?</h1>
			<p class="txt">
				<br /><?= $description ?>	</p>
		</div>
		<div class="image">
			<img class="img" src="../images/divers/team target.jpeg" />
		</div>
		</div>
	<div class="section section2">
		<div class="image">
			<img class="img" src="../images/divers/Satisfaction.jpg" />
		</div>
		<div class="text">
			<p class="txt">
			<?= $satisfaction ?>	</p>
		</div>
	</div>
	<!-------------------------------------------------------QUALITÉS-------------------------------------------------------------------------------->

	<div class="section section3">
		<h3 class="txt3"><?= $qualite ?> :</h3>
		<div class="qualites">
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br /><?= $pro ?></p>
			</div>
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br /><?= $ponctualite ?>	</p>
			</div>
			<div class="qualite">
				<img src="../images/icons/face.svg" style="width: 50px" />
				<p>
					<br /><?= $equipe ?>	</p>
			</div>
		</div>
	</div>
</div>
<?php require_once '../headerFooter/footer.php'; ?> 

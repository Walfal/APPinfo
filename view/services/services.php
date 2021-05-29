<?php
$title = 'Services';
require_once '../headerFooter/header.php';
require '../../controller/traduction/service/service.php';
require_once '../../controller/fonctions.php';
require_once '../../controller/Login/loginFunctions.php';
?>

<link href="services.css" rel="stylesheet" />
<section class="sections home text-center">
	<section class="intro">
		<?= $titre ?>
	</section>
	<div class="citation">
	<?= $citation ?>
	</div>

<section class="nosservices">
	<h2><?= $service ?></h2>
	<div class="services">
		<div class="ligneune">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?= $tonalite ?>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?= $frequence ?>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?= $temperature ?>
			</div>
		</div>

		<div class="sonlumiere">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?= $reactionL ?>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?= $reactionS ?>
			</div>
		</div>
	</div>
</section>
<?php require_once '../headerFooter/footer.php'; ?>

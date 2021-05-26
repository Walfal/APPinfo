<?php
$title = 'Services';
require_once '../headerFooter/header.php';
require '../../controler/traduction/service/serviceTrad.php';
require_once '../../model/Login/loginFunctions.php';
?>

<link href="services.css" rel="stylesheet" />
<section class="sections home text-center">
	<section class="intro">
		<?php echo $titre ?>
	</section>
	<div class="citation">
	<?php echo $citation ?>
	</div>

<section class="nosservices">
	<h2><?php echo $service ?></h2>
	<div class="services">
		<div class="ligneune">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?php echo $tonalite ?>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?php echo $frequence ?>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?php echo $temperature ?>
			</div>
		</div>

		<div class="sonlumiere">
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?php echo $reactionL ?>
			</div>
			<div class="service">
				<img class="verifier" src="../images/icons/v_image.png" />
				<?php echo $reactionS ?>
			</div>
		</div>
	</div>
</section>
<?php require_once '../headerFooter/footer.php'; ?>

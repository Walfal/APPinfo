<?php $title='FAQ';
require_once '../headerFooter/header.php';?>
<link href="FAQ.css" rel="stylesheet" />       
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
	<div class="content">
		<h2>UNE QUESTION ?</h2>
		<p>Nous sommes là pour vous aider</p>
	</div>
	<!--<div class="image">
		<img src="../view/images/icons/question.png" alt="">
	</div>-->
</div>

<!-- ----------------------------------------------------------- FAQ ---------------------------------------------------------------------------------- -->
<?php
	//require '../../model/modelFaq/modelFaq.php';
	require_once '../../model/BDD/connexionBDD.php';
	require_once '../../model/FAQ/modelFaq.php';
	/*
	$db = Database::connect();
	$valeur = Database::listeCategorie($db);
	echo $valeur;
	Database::disconnect();
	Database::listeCategorie($db);
	*/

	

?>

<div class="contact">
	<?php if(isset($_SESSION['matricule'])){
		if($_SESSION['matricule'] == 0){
			echo '<p>Pour ajouter des questions et réponses <a href="gererFAQ.php">cliquez ici</a></p>';
		}
	}else{
		echo '<p>Pour plus d\'informations, contactez-nous, <a href="../messagerie/contactezNous.php">cliquez ici</a></p>';
	}
	 ?>
</div>
<section class="ib-faq js-ib-faq">
	<ul class="faq-categories">
		<?= afficherTopic($BDD);?>
	</ul>

	<div class="faq-items">
		<?= afficherQuestionRep($BDD); ?>

	</div>
	
</section>

 <?php require_once '../headerFooter/footer.php'; ?>   

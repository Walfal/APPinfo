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
	require_once '../../model/BDD/connexionBDD.php';
	require_once '../../model/FAQ/modelFaq.php';
?>

<div class="contact">
	<?php 
	if(isset($_SESSION['matricule']) && $_SESSION['matricule'] < 20){
		echo '<p>Pour ajouter des questions et réponses <a href="gererFAQ.php">cliquez ici</a></p>';
	} elseif (isset($_SESSION['matricule'])){
		echo '<p>Pour plus d\'informations, contactez-nous, <a href="../messagerie/contactezNous.php">cliquez ici</a></p>';
	}else{
		echo '';
	}?>
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
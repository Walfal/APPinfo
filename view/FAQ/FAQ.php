<?php $title='FAQ';

require_once '../headerFooter/header.php';
require '../../controller/traduction/FAQ/FAQ.php';
?>
<link href="FAQ.css" rel="stylesheet" />       
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
	<div class="content">
		<h2><?= $question ?></h2>
		<p><?= $aide ?></p>
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
		echo '<p> ' .  $ajouter . '  <a href="gererFAQ.php">  ' . $cliquez . ' </a></p>';
	} elseif (isset($_SESSION['matricule'])){
		echo '<p> ' .  $plusInfos . ' <a href="../messagerie/contactezNous.php"> '.  $cliquez . ' </a></p>';
	}else{
		echo '<p>Pour plus d\'informations, contactez-nous, <a href="../messagerie/contactezNous.php">cliquez ici</a></p>';
	}?>
</div>
<section class="ib-faq js-ib-faq">
	<ul class="faq-categories">
		<?= afficherTopic($BDD, $FAQTrad);?>
	</ul>

	<div class="faq-items">
		<?= afficherQuestionRep($BDD, $FAQTrad, $modif, $suppr); ?>
	
	</div>
	
</section>

 <?php require_once '../headerFooter/footer.php'; ?>   
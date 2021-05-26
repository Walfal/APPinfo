<?php $title='FAQ';

require_once '../headerFooter/header.php';
require '../../controler/traduction/FAQ/FAQTrad.php';
?>
<link href="FAQ.css" rel="stylesheet" />       
<!-- ----------------------------------------------------------- BANNIERE ---------------------------------------------------------------------------------- -->
<div class="banniere">
	<div class="content">
		<h2><?php echo $question ?></h2>
		<p><?php echo $aide ?></p>
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
		echo '';
	}?>
</div>
<section class="ib-faq js-ib-faq">
	<ul class="faq-categories">
		<?= afficherTopic($BDD);?>
	</ul>

	<div class="faq-items">
		<?= afficherQuestionRep($BDD, $modif, $suppr); ?>
	
	</div>
	
</section>

 <?php require_once '../headerFooter/footer.php'; ?>   

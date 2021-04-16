<?php
$aDeviner = 150;
?>

<pre>
	<?php var_dump($_GET) ?>
</pre>

<?php if ($_GET['chiffre'] > $aDeviner): ?>
	Votre chiffre est trop grand
<?php elseif($_GET['chiffre']< $aDeviner): ?>
	Votre chiffre est trop petit
<?php else: ?>
	Bravo ! c'etait bien <?php echo  $aDeviner ?>
<?php endif ?>


<form action="/Site_complet/php/jeu.php" method = "GET">

	<input type="number" name="chiffre" placeholder ="entre 0 et 1000" value ="<?= (string) $_GET['chiffre'] ?> " >
	<input type="text" name = "demo" value="test">
	<button type = "submit">Deviner</button>


</form>

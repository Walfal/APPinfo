<?php 

if(isset ($_SESSION['langue'])){
	if ($_SESSION['langue'] === 'en'){
		$titre ='<h1>SENS\'AIR</h1>
		<p>Psychotechnical service of the air</p>';
		$citation ='<q>The engine is the heart of an airplane but the pilot is its soul.</q>
		<p><br><br><br>Walter Alexander Raleigh</p>';
		$service ='Our services';
		$tonalite ='<h4>
		Recognition test<br>
		of tone
		</h4>
		<p>
		The test verifies the abilities<br>
		of the patient to recognize<br>
		a tone signal.
		</p>';
		$frequence='<h4>
		Measuring the <br>
		heart rate
		</h4>
		<p>
		Testing the heart rate<br>
		of the patient.
		</p>';
		$temperature ='<h4>
		Measuring the temperature<br>
		Superficial temperature of the skin
		</h4>
		<p>
		The sensor measures the temperature<br>
		surface temperature of the skin.
		</p>';
		$reactionL='<h4>Reaction time to<br>
		an unexpected sound
		</h4>
		<p>
		Upon hearing a sound,<br>
		the patient must press a button
		on a button and
		the reaction time<br>
		is measured by the sensor.
		</p>';
		$reactionS ='<h4>Rection time to <br>
		an unexpected light
		</h4>
		<p>
		When a light turns on, the user<br> must press a button.
		The user must<br> press a button, the sensor <br>will measure the reaction time
		the sensor will measure the reaction time.
		</p>';

	}
}
	else{
		$titre ='<h1>SENS\'AIR</h1>
		<p>Service psychotechnique de l\'air</p>';
		$citation ='<q>Le moteur est le cœur d\'un avion mais le pilote est son âme.</q>
		<p><br><br><br>Walter Alexandre Raleigh</p>';
		$service ='Nos services';
		$tonalite ='<h4>
		Test de reconnaissance<br>
		de tonalité
		</h4>
		<p>
		Le test vérifie les aptitudes<br>
		du patient à reconnaître<br>
		un signal sonore.
		</p>';
		$frequence ='<h4>
		Mesurer la fréquence <br>
		cardiaque
		</h4>
		<p>
		Test de la fréquence cardiaque<br>
		du patient.
		</p>';
		$temperature ='<h4>
		Mesurer la température<br>
		supericielle de la peau
		</h4>
		<p>
		Le capteur mesure la température<br>
		superficielle de la peau.
		</p>';
		$reactionL ='<h4>Temps de réaction à<br>
		un son inattendu
		</h4>
		<p>
		À l\'audition d\'un son,<br>
		le patient doit appuyer
		sur<br> un bouton et
		le temps de réaction<br>
		est mesuré par le capteur.
		</p>';
		$reactionS ='<h4>Temps de réction à <br>
		une lumière inattendue
		</h4>
		<p>
		Lorsqu\'une lumière s\'allume,<br>
		l\'utilisateur doit appuyer sur un bouton,<br>
		le capteur mesurera le temps de réaction.
		</p>';

	}

?>
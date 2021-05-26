<?php 

if(isset ($_SESSION['langue'])){
if ($_SESSION['langue'] === 'en'){
	$titre ='Who are we';
	$description ='Sens\'air is a service company created in 2020 specialized in the realization of psychotechnical tests.
	With 60 employees, Sens\'air does everything possible to guarantee a complete follow-up of the units physical conditions.
	In addition, our teams work to guarantee the management, storage, and protection of data on our web platform.';
	$satisfaction ='Your satisfaction is our priority, if you have any suggestions do not hesitate to contact us through our different channels.
	We are open to your suggestions in order to offer you an adapted service.';
	$qualite ='Our qualities';
	$pro ='Professionalism is one of Sens\'air\'s key values,
	we manage your data with rigor to ensure their protection.';
	$ponctualite ='Punctuality is very important,
	our teams ensure that the tests are put online within a very short time.';
	$equipe ='Our teams remain at your disposal in order to
	detect and <palli></palli>detect the slightest malfunction as quickly as possible.';

}
}

else{
	$titre ='Qui Sommes-nous';
	$description ='Sens\'air est une entreprise de service créée en 2020 spécialisée dans la réalisation de tests psychotechniques.
	Avec 60 salariés, sens\'air met tout en œuvre pour garantir un suivi complet des conditions physiques des unités.
	De plus, nos équipes travaillent afin de garantir la gestion, le stockage, et la protection des données sur notre plateforme web.';
	$satisfaction ='Votre satisfaction est notre priorité, si vous avez des suggestions n\'hésitez pas à nous contacter à travers nos différents canaux.
	Nous sommes ouvert à vos suggestions dans le but de vous proposer un service adapté.';
	$qualite ='Nos qualités';
	$pro ='Le professionnalisme est une des valeurs clé de Sens\'air, nous gérons vos données avec rigueur afin d\'assurer leurs protections.';
	$ponctualite ='La ponctualité est très importante, nos équipes s\'assurent de la mise en ligne des tests dans des délais très courts.';
	$equipe ='Nos équipes restent à votre écoute afin de pouvoir détecter et er le moindre dysfonctionnement le plus vite possible.';


}
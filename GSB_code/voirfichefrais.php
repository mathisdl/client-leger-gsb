<?php
	//on recupere les variables issue du formulaire
	$mois=$_GET['mois'];
	//supprime les blancs devant et deriere la chaine
	$mois=trim($mois);

	$annee=$_GET['annee'];
	$annee=trim($annee);

	$visiteur=$_GET['visiteur'];
	$visiteur=trim($visiteur);
	
	/*if (!empty($information)) {*/
		include 'connectAD.php';

		$sql = "SELECT ";
		$result = $connexion->query($sql);
		

		/*echo "<meta http-equiv='refresh' content='0;url=site.php'>";
		if ($result)
			echo "<meta http-equiv='refresh' content='0;url=site.php'>";

		else
			echo "<meta http-equiv='refresh' content='0;url=site.php'>";

	} else
		echo "<meta http-equiv='refresh' content='0;url=site.php'>";*/

?>
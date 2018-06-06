<?php
	include 'connectAD.php';

	//on recupere les varirable issue du formulaire
	$numero=$_GET['numero'];
	$nom=$_GET['nom'];
	$prenom=$_GET['prenom'];
	$adresse=$_GET['adresse'];
	$cp=$_GET['cp'];
	$ville=$_GET['ville'];
	$date=$_GET['date'];


	$sql = "UPDATE visiteur SET nom= \"$nom\",prenom= \"$prenom\",adresse= \"$adresse\",cp= \"$cp\",ville= \"$ville\",dateEmbauche= \"$date\" WHERE id=\"$numero\";";

	$result = $connexion->query($sql);

	if ($result){
		header("location:admin1.php");
		exit();
	}else {
		header("location:adminmodif.php");
		exit();
	}

?>

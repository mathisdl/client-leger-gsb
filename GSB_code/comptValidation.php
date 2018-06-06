<?php
	include 'connectAD.php';
	
	//on recupere les varirable issue du formulaire
	$id=$_GET['idVisiteur'];
	$idEtat="VA";

		$sql = "UPDATE fichefrais SET idEtat= \"$idEtat\";";	
	


	$result = $connexion->query($sql);

	if ($result){
		header("location:comptable.php");
		exit();
	}else {
		header("location:erreur.php");
		exit();
	}

?>
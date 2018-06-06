<?php
	include 'connectAD.php';
	
	//on recupere les varirable issue du formulaire
	$id=$_GET['id'];
	$libelle=$_GET['libelle'];
	$montant=$_GET['montant'];

		
	$sql = "UPDATE forfait SET libelle= \"$libelle\",montant= \"$montant\"WHERE id=\"$id\";";
	
	$result = $connexion->query($sql);

	if ($result){
		header("location:comptable2.php");
		exit();
	}else {
		header("location:comptmodif.php");
		exit();
	}

?>
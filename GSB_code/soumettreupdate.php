<?php
	include 'connectAD.php';
	
	//on recupere les varirable issue du formulaire
	$justificatifs=$_GET['justificatif'];
	$validation=$_GET['validation'];
	$id=$_GET['id'];
	$annee=$_GET['annee'];
	$mois=$_GET['mois'];

	if ($validation = "valide")	{
	$sql = "UPDATE fichefrais SET nbJustificatifs= $justificatifs,idEtat= 'VA',dateModif=NOW() WHERE idVisiteur= '$id' AND mois= '$mois' AND annee= '$annee';";
	}
	$result = $connexion->query($sql);

	if ($result){
		header("location:selectionfichefrais.php");
		exit();
	}else {
		header("location:selectionfichefrais.php");
		exit();
	}

?>
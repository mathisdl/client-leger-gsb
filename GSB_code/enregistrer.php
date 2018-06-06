<?php


		$id = $_GET['id']; 
    $libelle = $_GET['libelle'];
    $montant = $_GET['montant'];


	if (empty($id)) {

		header("location:erreur.php");

	}else{

		include 'connection_aborted(oid).php';

		$sql = "INSERT INTO lignefraisforfait (id, libelle, montant) VALUES ('".$id."', '".$libelle."', '".$montant."');";
		$result = $connexion->query($sql);
		header("location:comptable2.php");
		exit();
		}







?>

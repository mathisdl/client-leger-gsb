<?php


	$nom = $_GET['nom'];
	$nom=trim($nom);

    $prenom = $_GET['prenom'];
	$prenom=trim($prenom);

    $adresse = $_GET['adresse'];
	$adresse=trim($adresse);

    $cp = $_GET['cp'];
	$cp=trim($cp);

    $ville = $_GET['ville'];
	$ville=trim($ville);

	$date = $_GET['date'];
	$date=trim($date);

    $login = $_GET['login'];
	$login=trim($login);

	$password = $_GET['password'];
	$password=trim($password);
	$password=md5($password);

	$id = $_GET['id'];
	$id=trim($id);


	if (empty($nom)) {

		header("location:erreur.php");

	}else{

		include 'connectAD.php';

		$sql = "INSERT INTO visiteur (id, nom, prenom, adresse, cp, ville,dateEmbauche, login, pwd) VALUES ('".$id."', '".$nom."', '".$prenom."', '".$adresse."', '".$cp."', '".$ville."','".$date."','".$login."','".$password."');";
		$result = $connexion->query($sql);
		header("location:admin1.php");
		exit();
		}







?>

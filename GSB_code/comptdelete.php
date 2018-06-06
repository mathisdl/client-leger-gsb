<?php
	include 'connectAD.php';
	
	//on recupere les varirable issue du formulaire
	$numero=$_GET['id'];
		
	$sql = "DELETE FROM forfait WHERE id=\"$numero\";";
	
	$result = executeSQL($sql);
	
		if ($result){
		header("location:comptable2.php");
		exit();
	}else {
		header("location:erreur.php");
		exit();
	}
			

?>
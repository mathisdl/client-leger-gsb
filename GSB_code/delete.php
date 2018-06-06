<?php
	include 'connectAD.php';
	
	//on recupere les varirable issue du formulaire
	$numero=$_GET['id'];
		
	$sql = "DELETE FROM visiteur WHERE id=\"$numero\";";
	
	$result = executeSQL($sql);
	
		if ($result){
		header("location:admin1.php");
		exit();
	}else {
		header("location:erreur.php");
		exit();
	}
			

?>
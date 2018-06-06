<?php @session_start();

include "connectAD.php";

$idfichefrais = $_GET['id'];

$sql1 = "DELETE FROM lignefraisforfait WHERE idFicheFrais=".$idfichefrais;


$sql2 = "DELETE FROM fichefrais WHERE id=".$idfichefrais;

$result2 = executeSQL($sql2);

$result1 = executeSQL($sql1);


if ($result)
	header("Location:visiteur.php");
	else
	header("Location:visiteur.php");

?>

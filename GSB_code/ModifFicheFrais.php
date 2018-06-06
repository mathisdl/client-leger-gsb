<?php @session_start();

include "connectAD.php";

// recuperation des nouvelles informations
$id     = $_SESSION['id'];
$mois   = $_GET['mois'];
$annee  = $_GET['annee'];
$repas  = $_GET['repas'];
$nuitee = $_GET['nuitee'];
$etape  = $_GET['etape'];
$km     = $_GET['km'];
$idfiche= $_GET['idfiche'];


$sqlmodif2 = "UPDATE lignefraisforfait SET quantite='$repas' WHERE idForfait='REP'AND idFicheFrais='$idfiche'";
executeSQL($sqlmodif2);

$sqlmodif3 = "UPDATE lignefraisforfait SET quantite='$nuitee' WHERE idForfait='NUI'AND idFicheFrais='$idfiche'";
executeSQL($sqlmodif3);

$sqlmodif4 = "UPDATE lignefraisforfait SET quantite='$etape' WHERE idForfait='ETP'AND idFicheFrais='$idfiche'";
executeSQL($sqlmodif4);

$sqlmodif5 = "UPDATE lignefraisforfait SET quantite='$km' WHERE idForfait='KM'AND idFicheFrais='$idfiche'";
executeSQL($sqlmodif5);

$montant = ($repas*25)+($nuitee*80)+($etape*110)+($km*0.62) ;

//composition et execution de la requete de modification
$sqlmodif1 = "UPDATE fichefrais SET montantValide='$montant' WHERE idVisiteur='$id'AND mois='$mois'AND annee='$annee'";

$result = executeSQL($sqlmodif1);


//test sur la requete SQL et affichage message personnalise a l'utilisateur si reussi ou non
if ($result)
	header("Location:visiteur.php");
else
	echo "<meta http-equiv='refresh'content='0;url=AfficheFicheFrais.php?message=<font color=red> Probleme de modification... </font>'>";


?>

<?php @session_start();

include "connectAD.php";


//on recupere toutes les valeurs entrees dans le formulaire de creation de visiteur
$mois   = $_GET['mois'];
$annee  = $_GET['annee'];
$rep  = $_GET['rep'];
$nui = $_GET['nui'];
$etp  = $_GET['etp'];
$km     = $_GET['km'];

$sqlprixrepas ="SELECT montant FROM forfait WHERE id = 'REP' ;";
$sqlprixnuitee ="SELECT montant FROM forfait WHERE id = 'NUI';";
$sqlprixetape ="SELECT montant FROM forfait WHERE id = 'ETP';";
$sqlprixkm ="SELECT montant FROM forfait WHERE id = 'KM';";

$prixrepas = champSQL($sqlprixrepas);
$prixnuitee = champSQL($sqlprixnuitee);
$prixetape = champSQL($sqlprixetape);
$prixkm = champSQL($sqlprixkm);

$montant = ($rep * $prixrepas) + ($nui * $prixnuitee) + ($etp * $prixetape) + ($km * $prixkm);

$idVisiteur = $_GET['idVisiteur'];
$date = date("Y-m-d");



$sqlinsert = "INSERT INTO
fichefrais (idVisiteur, mois, annee, montantValide, dateModif)
VALUES
('$idVisiteur', '$mois', '$annee', '$montant', '$date');";


//execution de la requete dans la base de donnees
$sql = executeSQL($sqlinsert);

$sqlidfichefrais ="SELECT id FROM fichefrais WHERE mois='$mois' AND annee='$annee' AND idVisiteur='$idVisiteur';";
$id = champSQL($sqlidfichefrais);

$sqlinsertrepas = "INSERT INTO
lignefraisforfait (idFicheFrais, idForfait, quantite)
VALUES
('$id', 'REP', '$rep');";

$sqlinsertnuitee = "INSERT INTO
lignefraisforfait (idFicheFrais, idForfait, quantite)
VALUES
('$id', 'NUI', '$nui');";

$sqlinsertetape = "INSERT INTO
lignefraisforfait (idFicheFrais, idForfait, quantite)
VALUES
('$id', 'ETP', '$etp');";

$sqlinsertkm = "INSERT INTO
lignefraisforfait (idFicheFrais, idForfait, quantite)
VALUES
('$id', 'KM', '$km');";

$sqlrepas = executeSQL($sqlinsertrepas);
$sqlnuitee = executeSQL($sqlinsertnuitee);
$sqletape = executeSQL($sqlinsertetape);
$sqlkm = executeSQL($sqlinsertkm);

$_SESSION['id'] = $idVisiteur;

//test sur la requete SQL et affichage message personnalise a l'utilisateur si reussi ou non
if ($sql && $sqlrepas && $sqlnuitee && $sqletape && $sqlkm) {
	header("location:visiteur.php?login=".$_SESSION['login']."&pwd=".$_SESSION['pwd']);
} else {
	echo "<meta http-equiv='refresh' content='0;url=visiteur.php?message=<font color=red> Erreur </font>'>";
}

?>

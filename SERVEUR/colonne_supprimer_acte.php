
<?php
/******************
*
*author: Andjib
*date: 16/05/2018
*
******************/
session_start();//Recup de la prfecture dans  $_SESSION["v"] ( variable session définie dans la page SERVEUR/colonne_afficher_naissance.php)
//1.Connexion
include("connection_mysqli.php");
//2.Récupération des données de la base(par construction d'une variables php de stockage tampon)
$R=mysqli_query($conn , "SELECT * FROM  liste WHERE prefecture='".$_SESSION["v"]."' ") or exit(mysqli_error($conn ));
//3.Affichage
$table='<table>'; 
$table.='<tr><th>Nom </th><th> Prenom </th><th> Numero </th><th> Prefecture </th><th>  </th></tr>';
while($ligne2=mysqli_fetch_array($R)){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi
	 $table.='<tr><td>'.$ligne2["nom"].'</td><td>'.$ligne2["prenom"].'</td><td>'.$ligne2["acte"].'</td><td>'.$ligne2["prefecture"].'</td> <td> <a id="s1" href="SERVEUR/supprimer.php?n='.$ligne2["ID"].'"">Supprimer</a> </td></tr>';
	 }
$table.='</table>';
echo $table;
mysqli_close($conn);
?>
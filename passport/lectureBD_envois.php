
<?php session_start(); if(!isset($_SESSION["pref"])) $_SESSION["pref"]=""; $s=$_SESSION["pref"]; ?>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
	 <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
     <title> Acces en Lecture a la base etatcivil: connexion,recupreation affichage</title>
     <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
	 <script src="js/jquery.js"></script>
	 <script src="js/capture_items.js"></script>    <!--    <script src="js/acteOutSlide.js"></script> -->
	 <script src="js/lectureBD.js"></script>

	 <link href="css/accueil.css" rel="stylesheet" title="Style" />

	 <link href="css/lectureBD.css" rel="stylesheet" title="Style" />
	 
	<!-- style menu2(accordeon) -->
	<link href="menu2/css/menu.css" rel="stylesheet" title="StyleM" />
	<!-- script menu2(accordeon) -->
	<script src="menu2/js/jquery.js"> </script> 
	<script src="menu2/js/menu_accordeon.js"> </script>
	<script src="menu2/js/menu_ajax.js"> </script>
	<script src="menu2/js/menu_toggle.js"> </script>

 
</head>

<body>
<!-- menu accordeon -->
     <img src="img/menu.png" id="iconemenu" style=" position:fixed; right:0px; " /><br>
     <img src="img/menu.png" id="imagemenu" style=" position:fixed; right:0px; " /><br><br>
		  
		<ul class="navigation" style=" position:fixed; top:10px; right:-39px; margin-right:0px; padding-right:0px; width:15.7%;" >	
		  <li class="toggleSubMenu"><span>Passeports</span>
			<ul class="subMenu">
			  <li><a href="ecritureBD.php" title="" onclick="page('nouvelledemande.php')" style="color:#fff;" >Saisie</a></li>
			  <li><a href="#" title="" onclick="page('demande_passport.php')" style="color:#fff;" >Fiche Export</a></li>
			</ul>
			</li>
			<li class="toggleSubMenu"><span>Recettes Etat civil</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="ecritureBD_recette_legalisation.php" title="" style="color:#fff;">Saisie</a></li>
				<li><a href="lectureBD_recette_legalisation.php" title="" style="color:#fff;">Recettes légalisation</a></li>
			  </ul>
		    </li>
		    <li class="toggleSubMenu"><span>Caisse</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="ecritureBD_caisse.php" title="" style="color:#fff;">Saisie</a></li>
				<li><a href="lectureBD_caisse.php" title="" style="color:#fff;">Journal de caisse</a></li>
			  </ul>
		    </li>

			<li><a href="#" title="">Cartes consulaires</a></li>
			
		</ul>
<!-- ARRIERE PLAN :  -->
<?php include("inc/lecture/lectureBD_background.php"); ?>

<div class="centrer"  >

<!-- LE PANNEAU DE GAUCHE :  -->

<table class="tablegauche" > <caption  style="caption-side:top;  z-index:4;"> <font color="#FFFFFF"><h3> UNION DES COMORES  </h3><h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6><h4> AMBASSADE DES COMORES  </h4></font><img src="img/armoirie.png"   /></caption>
	 <tr><td>
	     <?php include("inc/lecture/menugauche.php"); ?>  
	 </td></tr>
</table>

<!-- LE  PANNEAU DE DROITE(partie basse) :  -->

<table  class="tabledroiteresultat" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> FICHE EXPORT  </h3></caption>
     <tr><td >      
		 <div id="yivawo"  style="left:13px;   box-shadow: 1px 1px 0px 0px #cdbe9f; " ></div> 
	 </td></tr>
</table>

<?php include("inc/lecture/sousmenu.php"); ?>   

</div> <!-- fin  <div class="centrer"  >  -->

<?php


    include("SERVEUR/connection_PDO.php");
	//calcul du total_envoi
	$total4=0;
	$requete4='SELECT SUM(montant) FROM passport WHERE (dossier_expedie="'.$_SESSION["envoi"].'" AND passeport_arrive !="Retours" AND passeport_livre !="Distribué" ) ';				
	$reponse4 = $conn->query($requete4) ;//Stockage de la requête dans une variable tampon
	while($ligne4 = $reponse4->fetch()){

		$total4=$ligne4["SUM(montant)"];
				
	}
	$reponse4->closeCursor();
	
?>




<div class="mnayvawo"  >  <button    class="boutoyahemnayivawo" style="font-size: 15px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;  "  > Etat du dossier:<span id="wilaya_" style="color:#000066;  font-size: 17px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;" > <?php  echo  $s; ?><span style="color:#066666;  font-size: 17px; font-style: bold;" ><?php echo ($total4."€") ; ?> </span></span> </button> </div>

<body>
</html>

	

				
				


     

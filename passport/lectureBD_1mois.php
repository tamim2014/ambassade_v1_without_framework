
<?php session_start(); if(!isset($_SESSION["pref"])) $_SESSION["pref"]=""; $s=$_SESSION["pref"]; ?>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
	 <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
     <title> Acces en Lecture a la base etatcivil: connexion,recupreation affichage</title>
     <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
	 <script src="js/jquery.js"></script>
	 <script src="js/capture_items_passeport_D.js"></script>    <!--    <script src="js/acteOutSlide.js"></script> -->
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
	
	<!-- garder  le sous-menu2 à l'ouverture de la page et rappeler le sous-menu1( juste pour la mémoir visuel de l utilisateur sans pouvoir le toucher) -->
	<script>
	         $(document).ready(function(){	     		
				 $(".sousmenu1 ").show();      $(".sousmenu2").show();              			 
                 $(".panel3").slideDown(3000); //2ème sous menu
				 $(".piedmenu").fadeIn(3000);                
			});	
	</script>
		
	<script>
	   // Cette fonction répond au bouton"Zoom" ou au bouton "Affiche plein écran"
        function popup_lectureBD2()
        {    
           //window.open("http://google.fr/", "Autrepage", "toolbar=1, location=1, directories=1, status=1, scrollbars=1, resizable=1, copyhistory=1");
		     window.open("afficherdanspop_listePasseport_D.php?pr=+str", 'Popup', 'scrollbars=1, Menubar=1, resizable=1,height=409,width=918 ,  top=258, left=175 '); 
			 return false;          
		}
	</script>
 
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
		 <div id="yivawo"  style="left:13px;   box-shadow: 1px 1px 0px 0px #cdbe9f; " >
		    <!-- charger ici les passeport livrés depuis 1 mois -->
			<?php
			   //1.Connexion
				include("SERVEUR/connection_PDO.php");
				//2.Requête
                 //$ajourdhui =  date("Y-m-d");
				 //$date_livraisonPLUS1mois = DATE_ADD(date_livraison, INTERVAL 30 DAY)
				//$requete='SELECT * FROM passport';// WHERE dossier_expedie="'.$pr.'" OR passeport_arrive="'.$pr.'" OR passeport_livre="'.$pr.'"  ';// LE PROBLEME EST Là .Pourquoi Mysql ne voit pas la variable $p?Résolu 3 jours de galère mais résolu: supprimer l'espace en début de chaîne:$pr=ltrim($pr); ?????????????
				//$requete='SELECT * FROM passport WHERE    date("Y-m-d") < DATE_ADD(date_livraison, INTERVAL 30 DAY)';
				//$requete='SELECT * FROM passport WHERE   date_livraison < DATE_ADD( date("Y-m-d") , INTERVAL -1 MONTH)';
				//$requete='SELECT * FROM passport WHERE   date_livraison < DATE_ADD( date("Y-m-d") , INTERVAL -1 DAY)';
				//$requete='SELECT * FROM passport WHERE   date_livraison < SYSDATE-30 ';'
				// j ai trouvé la solution ici : https://blog.developpez.com/james-poulson/p9990/code/select_des_enregistrements_sur_le_dernie
				$requete='SELECT * FROM passport WHERE   MONTH(date_livraison) = MONTH(NOW())  ORDER BY date_livraison DESC';
				
				$reponse = $conn->query($requete) ;//Stockage de la requête dans une variable tampon
				
				
				//calcul du total_mensuel
				$total=0;
				$requete2='SELECT SUM(montant) FROM passport WHERE   MONTH(date_livraison) = MONTH(NOW()) ';				
				$reponse2 = $conn->query($requete2) ;//Stockage de la requête dans une variable tampon
				while($ligne2 = $reponse2->fetch()){
					//if(isset($ligne2["montant"])) $total=$ligne2["montant"];
					$total=$ligne2["SUM(montant)"];
					
				}
				
				
				
				

				//3.Affichage

				//3.1 On construit une table d'affichage( g changé la couleur du total color:#066666; en vert )
				// <td> <a href=" modifier_.php? n='.$ligne2["ID"].'  &  nom_='.$ligne2["nom"].'   &  prenom_='.$ligne2["prenom"].'   &   acte_='.$ligne2["acte"].' ">Rectifier</a> </td>
				//<td  > <a href="afficher.php?n='.$ligne["idPassport"].'"     onclick=" window.open(this.href, \'Popup\', \'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 \'); return false; "   >Afficher</a> </td>
				$table='<table >'; 
				$table.='<tr><th>NOM</th><th>PRENOM</th><th> ENVOI </th><th>RETOUR  </th><th>DISTRIBUTION </th><th>OBSERVATION</th><th> € </th> <th>DATE </th> <th> </th> <tr>';
				while($ligne = $reponse->fetch()){// en utlisant FOREACH ça marche pas .j'sais pas pourquoi
				 $table.='<tr><td>'.$ligne["nom_demandeur"].'</td><td>'.$ligne["prenom_demandeur"].'</td><td>'.$ligne["dossier_expedie"].'</td><td>'.$ligne["passeport_arrive"].'</td><td>'.$ligne["passeport_livre"].'</td><td>'.$ligne["observation"].'</td><td>'.$ligne["montant"].'</td><td>'.$ligne["date_export"].'</td> <td  > <a href="afficher.php?n='.$ligne["idPassport"].'"     onclick=" window.open(this.href, \'Popup\', \'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 \'); return false; "   >Afficher</a> </td> </tr>';
				 }				  
				 $table.='<tr><td></td><td></td><td>  </td><td>  </td><td> </td><td><span style="color:green;  font-size: 17px; font-style: bold;" >TOTAL :</span> </td><td> <span style="color:green;  font-size: 17px; font-style: bold;" >'.$total.'€</span> </td><td> </td> <td> </td> <tr>'; 
				 $table.='</table>';
				//3.2 on vide $pr et on libere la memoir occupée par cet "interrogation serveur"
				unset($pr);
                $reponse2->closeCursor();
				$reponse->closeCursor(); // mysql_close(); i parait que ça sert à rien puisque MySQL le fait tout seul
				//3.3 On affiche le résultat

				echo $table;
				

				

			?>
		  
		 
		 </div> 
	 </td></tr>
</table>

<?php include("inc/lecture/sousmenu.php"); ?>   

</div> <!-- fin  <div class="centrer"  >  -->

<div class="mnayvawo"  >  <button    class="boutoyahemnayivawo" style="font-size: 15px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;  "  > Distribution de:<span id="wilaya_" style="color:#000066;  font-size: 17px; font-style: italic; font-family: \"Times New Roman\", Georgia, Serif;" > <?php  echo  $s; ?></span> </button>     </div>

<body>
</html>


     

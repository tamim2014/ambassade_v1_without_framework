<?php session_start();  //echo "Acte<br>".$_SESSION["showInPop"]; 
$n=$_GET["n"];

$nom_=$_GET["nom_"];
$prenom_=$_GET["prenom_"];
$montant_=$_GET["montant_"];
$observation_=$_GET["observation_"];
$envoi_=$_GET["envoi_"];
$retour_=$_GET["retour_"];
$distribue_=$_GET["distribue_"];
$lot_=$_GET["lot_"];
$date_export_=$_GET["date_export_"];

$_SESSION["identif_passport"]=$n;

?>
 
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> <!-- local storage -recup Acte n° pour transmission à la pop -->
 <title> Acces en Ecriture a la base etatcivil</title>

 <link href="css/accueil.css" rel="stylesheet" title="Style" />
 <link href="css/lectureBD.css" rel="stylesheet" title="Style" /> <!-- pour les bouton du panneau central -->
 <link href="css/ecritureBD.css" rel="stylesheet" title="Style" />
 <style>
    .cadre {
    
    border: 2px solid #e5eecc;
 
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
  
    background-image: -moz-linear-gradient(top, #ffffff, #f4f4f4);
    background-image: -webkit-gradient(linear, left top, left bottom, from(#ffffff), to(#f4f4f4));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff,endColorstr=#f4f4f4);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff,endColorstr=#f4f4f4)";
    }

    .cadre2 {
   
  
    border: 1px solid #e5eecc;//#c3c3c3
	background-color: #e5eecc;
 
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
  
   
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff,endColorstr=#f4f4f4);
    -ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#ffffff,endColorstr=#f4f4f4)";
   }
 </style>

 <script src="js/jquery.js"></script>
 <script src="js/ecritureBD.js"></script>
 
 
 
     <!-- style menu2(accordeon) -->
	    <link href="menu2/css/menu.css" rel="stylesheet" title="StyleM" />
	<!-- script menu2(accordeon) -->
	<script src="menu2/js/jquery.js"> </script> 
	<script src="menu2/js/menu_accordeon.js"> </script>
	<script src="menu2/js/menu_ajax.js"> </script>
	<script src="menu2/js/menu_toggle.js"> </script>
 
</head>

<body>
<!-- menu accordeon   right:100px;  ou 540PX  pour la liste du menu -->
     <img src="img/menu.png" id="iconemenu" style=" position:fixed; right:100px; top:100px; z-index:3; " /><br>
     <img src="img/menu.png" id="imagemenu" style=" position:fixed; right:100px;  top:100px; z-index:3; " /><br><br>
		  
		<ul class="navigation" style=" position:fixed; top:110px; right:100px; margin-right:0px; padding-right:0px; width:15.7%; z-index:3;" >	
		  <li class="toggleSubMenu"><span>Gestion passports</span>
			<ul class="subMenu" style="color:#fff;  " >
			  <li ><a href="#" title="" onclick="page('nouvelledemande.php')" style="color:green;" >Saisie</a></li>
			  <li><a href="lectureBD.php" title="" onclick="page('demande_passport.php')" style="color:green;" >Fiche Export</a></li>
			</ul>
			</li>
			<li class="toggleSubMenu"><span>Ressources humaines</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="#" title="" style="color:green;">Le personnel</a></li>
				<li><a href="#" title="" style="color:green;">Les congés</a></li>
				<li><a href="#" title="" style="color:green;">Les contrats</a></li>
			  </ul>
			</li>
			<li><a href="#" title="">Cartes consulaires</a></li>
			<li><a href="#" title="">Stocks</a></li>
		</ul>

<!-- ARRIERE PLAN :  -->

<?php include("inc/ecriture/ecritureBD_background.php"); ?> 
<div id="acteN"></div>

 <div class="centrer" >
  
<form action ="" method="post" name="form1" >
    <!-- LE PANNEAU DE GAUCHE :  -->
         <?php

 echo '
   <table class="tablegauche"  name="listes" > 
     <caption style="caption-side:top"> 
	     <font color="#FFFFFF">
		     <h3> UNION DES COMORES  </h3>
			 <h6> Unité-Solidarité-Développement  </h6>
			 <h4> AMBASSADE DES COMORES  </h4>
		 </font>
		 <img src="img/armoirie.png"  />
	  </caption>
	  
	 
	 <tr><td> </td><td><font color="##1D702D"> <b>Demandeur:</b></font></td> <td> </td></tr>
	 <tr><td> Nom   </td> <td> <input type="text" name="nom_demandeur"  value="'.$nom_.'"> </td></tr>
	 <tr><td> Pr&eacute;nom  </td> <td> <input type="text" name="prenom_demandeur" value="'.$prenom_.'" ></td></tr>
	 <tr><td> Montant  </td> <td> <input type="text" name="montant" value="'.$montant_.'" ></td></tr>
	 
	 <tr><td> </td><td><font color="##1D702D"> <b>Observation:</b></font></td> <td> </td></tr>
	
	 
	
	 <tr><td >  </td> <td>
	 <fieldset class="cadre" style ="margin-bottom:1px;" >
	<legend>Codes observation</legend>
	<div  style="background-color: #e5eecc;"  class="cadre2" >
	
	<select title="ob" name="observation" value="'.$observation_.'">
		<option></option>
		<option>PP+CNI</option>
		<option>CNI</option>
	</select>
	</div>
</fieldset>	 
</td></tr>
<tr><td> </td><td><font color="##1D702D"> <b>Fiche Export:</b></font></td> <td> </td></tr>	
	 <tr><td ></td> <td>
		 <fieldset class="cadre" style ="margin-bottom:1px;" >
			<legend>Lot et Date</legend>
			<div  style="background-color: #e5eecc;"  class="cadre2" >
				<select title="lot" name="lot" value='.$lot_.' >
				    <option></option>
					<option>001</option>
					<option>002</option>
					<option>003</option>
					<option>004</option>
					<option>005</option>
					<option>006</option>
					<option>007</option>
					<option>008</option>
					<option>009</option>
					<option>010</option>
				</select>				
				<input type="date"  name="date_export" value="'.$date_export_.'"  style="background-color:#FFFFFF ; height:18px;"/>
								
			</div>
		</fieldset>	 
	 </td></tr>
	
 </table>
  
';
 
?>
		 
		 
		 
		 
    <!-- LE PANNEAU DE CENTRAL : -->
 
   <table  class="tablecentre" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> Enregistrement  </h3></caption>     
     <tr><td>
	     <?php include("inc/ecriture/ecritureBD_menucentre.php"); ?>
	 </td></tr>
   </table>
  

     <!-- LE PANNEAU DE DROITE :  -->

 <table class="tabledroite" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3>nouveau &nbsp;passport  </h3></caption>
  <p class="showacte"> <!-- Pour afficher l'acte modifiÃ© dans la partie droite de la page modifie_.php  -->
	<tr> 
		 <td></td>
		 <td></td>
		 <td class="3emcolone" ></td>
	</tr>
	<tr> 
	     <td></td>
		 <td></td>
		 <td class="3emcolone"></td>
	</tr>
	
	 <tr> <td>  </td></tr>
	 <tr> <td>  </td></tr>
	 <tr> <td>  </td></tr>
	 
	 <tr><td> <font color="##1D702D"><br><br><br><br><br><b>Etat du dossier</b></font></td> </tr>    
     <tr><td><fieldset></fieldset></td><td>  <fieldset></fieldset></td><td class="3emcolone"> <fieldset></fieldset></td></tr>
	 <tr> <td> <input type="checkbox" name="dossier_expedie"  checked>  </td> <td> <input type="text" value="<?php echo $envoi_;?>"  placeholder="Dossier expédié le :"/>  </td> <td class="3emcolone"> <input type="date" name="date_expedie" > </td> </tr>
	 <tr> <td> <input type="checkbox" name="passeport_arrive">   </td> <td> <input type="text" value="<?php echo $retour_;?>"  placeholder="Passeport arrivé le :">  </td> <td class="3emcolone"><input type="date" name="date_arrive" > </td></tr>	 
	 <tr> <td> <input type="checkbox" name="passeport_livre"></td><td> <input type="text" value="<?php echo $distribue_;?>"  placeholder="Passeport livré le :">    </td> <td class="3emcolone"> <input type="date" name="date_livraison" > </td></tr>
	 
	 	 

	 <tr><td><fieldset></fieldset></td><td>  <fieldset></fieldset></td><td class="3emcolone"> <fieldset></fieldset></td></tr>
	 <tr> 
	     <td> </td>
	     <td> <input type="text" name="" placeholder=" Re&ccedil;ue par:"> </td>
		 <td class="3emcolone" >  <input type="text" name="nom_recepteur" placeholder="  Nom du recepteur" maxlength="100"> </td>
	 </tr>
	 <tr> 
	     <td> </td>
		 <td> </td>
	 </tr>
	 <tr> <td>  </td></tr>
	 <!-- je déplace ces élément à cause de firefox qui fait déborder la panneau droit(dépassement de 20 cm vers le bas)
	 <tr> <td> <input type="text" name="declaration_recue_pa" placeholder=" re&ccedil;ue par"> </td></tr>
	 <tr> <td> <input type="text" name="recepteurjugement"    placeholder=" titre du recepteur"  > </td></tr> 
     -->
	 </p>
	 
     <tr> 
	 <td>
	 
	     <!-- LES BOUTONS D AFFICHAGE -->
		 
		 <!-- recuperer  une veriable javascripte +actesaisi+  en php -->
		  <?php if(!isset($_POST["acte"])) $_POST["acte"]=""; $valeurphp= $_POST["acte"]; ?> <!-- +sieurs 10zaines de jour de galere!!! alors que la solution été si simple! Trouvé vend 25.09.16 à 16h50 à cité des sicience. shukran li l'ALLAH.   -->
		 
		 <a id="acteAJAX" href="afficher2.php?n=<?php echo $valeurphp; ?>"   onclick="    window.open(this.href, 'Popup', 'scrollbars=1,resizable=1,height=409,width=918 ,  top=258, left=175 '); return false; " >
		      <!--
			     Pourquoi return false(ou 1 event.preventDefault() ;)? 
				 L'événement onclick se déclenche au clic de la souris et effectue l'action entre les guillemets mais,
				 l'événement continue sa route : on dit qu'il se propage. Il va donc poursuivre son action et 
				 déclencher le lien hypertexte indiqué par href. 
				 Pour éviter cela, il suffit d'arrêter la propagation en retournant false.
				 SINON
				 La nouvelle fenêtre s'ouvre bien mais l'ancienne est aussi dirigée vers la nouvelle page de la pop
			  -->
			  <input type="button"  value="Afficher l'acte" align="center"  style="background-color: #cdbe9f;"   />  
	    </a>
	 </td>
	 <td><a href="afficher.php?n=<?php echo $donnees["idPassport"];?> "><input type="button"  value="Imprimer l'acte" align="center"  style="background-color: #cdbe9f;"/></a></td>
	 <td class="3emcolone" ><a href="#"><input type="button"  value="Rectifier" align="center"  style="background-color: #cdbe9f;"/></a></td>
	 
	 
	 </tr>
  </table>
</form>
</div> 

</body>
</html>


<?php
  //header('Location: ecritureBD.php');//Warning: Cannot modify header information - headers already sent by
 //include("SERVEUR/verif_num_acte.php"); 
 //include("SERVEUR/ecritureBD_insertionSQL.php");
 /**************************************************** A RETENIR ********************************************
 *
 * En cas d'embrouille , supprimer l include et mettre le code sur le page de depart pour y voir + clair
 *
 ************************************************************************************************************/
 include("SERVEUR/modifier_insertionSQL.php");
 
?>






  


<?php session_start();  //echo "Acte<br>".$_SESSION["showInPop"]; ?>
 
<!DOCTYPE html>
<html>
<head>
 <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
 <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"> <!-- local storage -recup Acte n° pour transmission à la pop -->
 <title> Journal de caisse</title>

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
	<script>
	   /* Liaison liste années/liste mois :  ACCES AU SERVEUR(pour lire les fichier .txt)*/
		function changement(annee){//list1 
			var index = annee.selectedIndex;//Identifie l'option selectionnée par l'utilisateur dans le 1er menu
			var valeur = annee[index].text;// retourne le texte de l'option (<option>texte</option>) càd OS ou Naviateur ou Programmation
			var liste_elements = document.getElementsByTagName("select"); // [ou document.formulaires.elements] tous les options du formulaires
			var list2elements = liste_elements["mois"];// list2, Seulements les options de la 2ème liste déroulante.
			url ="SERVEUR/calendrier/"+valeur + ".txt";//  OS.txt ou Navigateur.txt ou Programmation.txt

			if (valeur != "") {

				instanceAJAX();// instance XMLHttpRequest for IE7+, Firefox, Chrome, Opera, Safari // code for IE6, IE5
							   
								//Connection[au serveur ]   
								xhr.open("GET",url,true); 
								// Envoi
								xhr.send(null); 
				//Réception de la réponse du serveur [xmlhttp.responseText] et affichage 
				if(xhr) {// On s'assure que l'objet xhr a bien été créé
					xhr.onreadystatechange = function(){
						if(xhr.readyState == 4 && xhr.status == 200){
							var list2reponse = xhr.responseText;
							contenulist2(list2reponse, list2elements);
						}
					}
				 
				}
			}
		}

		// Construction du 2ème menu déroulant
		function contenulist2(list2reponse, list2elements) {
			var list2options = list2reponse.split("*");
			//list2elements.length = 1;
			list2elements.length = list2options.length;
			for (i=1; i < list2elements.length; i++) {
				list2elements[i].text = list2options[i];
			}
		}				 
	</script>
 
</head>

<body>
<!-- menu accordeon   right:100px;  ou 540PX  pour la liste du menu -->
    <img src="img/menu.png" id="iconemenu" style=" position:fixed; right:100px; top:100px; z-index:3; " /><br>
    <img src="img/menu.png" id="imagemenu" style=" position:fixed; right:100px;  top:100px; z-index:3; " /><br><br>
		  
	<ul class="navigation" style=" position:fixed; top:110px; right:100px; margin-right:0px; padding-right:0px; width:15.7%; z-index:3;" >	
		<li class="toggleSubMenu"><span>Passeports</span>
			<ul class="subMenu" style="color:#fff;  " >
			  <li ><a href="ecritureBD.php" title="" onclick="page('nouvelledemande.php')" style="color:green;" >Saisie</a></li>
			  <li><a href="lectureBD.php" title="" onclick="page('demande_passport.php')" style="color:green;" >Fiche Export</a></li>
			</ul>
		</li>
		<li class="toggleSubMenu"><span>Recettes Etat civil</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="ecritureBD_recette_legalisation.php" title="" style="color:green;">Saisie</a></li>
				<li><a href="lectureBD_recette_legalisation.php" title="" style="color:green;">Recettes légalisation</a></li>
			  </ul>
		</li>
		<li class="toggleSubMenu"><span>Caisse</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="#" title="" style="color:green;">Saisie</a></li>
				<li><a href="lectureBD_caisse.php" title="" style="color:green;">Journal de caisse</a></li>
			  </ul>
		</li>


		
		<li><a href="#" title="">Cartes consulaires</a></li>
			
	</ul>

<!-- ARRIERE PLAN :  -->

<?php include("inc/ecriture/ecritureBD_background.php"); ?> 
<div id="acteN"></div>

 <div class="centrer" >
  
<form action ="" method="post" name="form1" >
  <!-- LE PANNEAU DE GAUCHE :  -->
  
  <table class="tablegauche"  name="listes" > 
    <caption style="caption-side:top"> 
	     <font color="#FFFFFF">
		     <h3> UNION DES COMORES  </h3>
			 <h6> Unité-Solidarité-Développement  </h6>
			 <h4> AMBASSADE DES COMORES  </h4>
		 </font>
		 <img src="img/armoirie.png"  />
	</caption>
		 
	 <tr><td> </td><td><font color="##1D702D"> <b>Observation:</b></font></td> <td> </td></tr>
	 <tr><td> Date   </td> <td> <input type="date" name="date"  > </td></tr>
	 <tr><td> Pièce  </td> <td> <input type="text" name="piece"  ></td></tr>
	 
	 <tr><td> </td><td><font color="##1D702D"> <b>Opération:</b></font></td> <td> </td></tr>	
	 <tr><td> Imputation  </td> <td> <input type="text" name="imputation"  ></td></tr>
	  <tr><td> Libellé  </td> <td> <input type="text" name="libelle"  ></td></tr>
	  <tr><td> Débit  </td> <td> <input type="text" name="debit"  ></td></tr>
	  <tr><td> Crédit  </td> <td> <input type="text" name="credit"  ></td></tr>
	 
   </table>
   
   
   
    <!-- LE PANNEAU DE CENTRAL : -->
 
   <table  class="tablecentre" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> ENREGISTREMENT  </h3></caption>     
     <tr><td>
	     <?php include("inc/ecriture/ecritureBD_menucentre.php"); ?>
	 </td></tr>
   </table>
  

     <!-- LE PANNEAU DE DROITE :  -->

 <table class="tabledroite" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> JOURNAL DE CAISSE  </h3></caption>
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
	 
	 <tr><td> <font color="##1D702D"><br><br><br><br><br><b>Historique</b></font></td> </tr>    
     <tr><td><fieldset></fieldset></td><td>  <fieldset></fieldset></td><td class="3emcolone"> <fieldset></fieldset></td></tr>
	 	 <tr>  <td> <input type="checkbox" name="">   </td> <td> <input type="text"   placeholder="Préciser l'année :">  </td> 
	       <td class="3emcolone">
		   	    <select title="annee" name="annee" onChange="changement(this)" >
                    <option></option>				
					<option>2018</option>
					<option>2019</option>
					<option>2020</option>
					<option>2021</option>
					<option>2022</option>
					<option>2023</option>
					<option>2024</option>
					<option>2025</option>
					<option>2026</option>
					<option>2027</option>
					<option>2028</option>
					<option>2029</option>
					<option>2030</option>
				</select>		   
		   </td>
	</tr>	 
	 <tr>   <td> <input type="checkbox" name="">  </td> <td> <input type="text"   placeholder="Préciser le mois :"/>  </td> 
	        <td class="3emcolone"> 
	       		<select title="mois" name="mois" >
					<option></option>
					<!--
					<option>Janvier</option>
					<option>Février</option>
					<option>Mars</option>
					<option>Avril</option>
					<option>Mai</option>
					<option>Juin</option>
					<option>Juillet</option>
					<option>Août</option>
					<option>Septembre</option>
					<option>Octobre</option>
					<option>Novembre</option>
					<option>Décembre</option>
					-->
				</select>
	        </td> 
	 </tr>
	 
	 <tr> <td> <input type="checkbox" name=""></td><td> <input type="text"   placeholder="">    </td> <td class="3emcolone"> <input type="" name="" > </td></tr>
	 
	 	 

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
		 
		 <a id="acteAJAX" href="#"   onclick="">

			  <input type="button"  value="" align="center"  style="background-color: #cdbe9f;"   />  <!-- afficher -->
	    </a>
	 </td>
	 <td><a href="# "><input type="button"  value="" align="center"  style="background-color: #cdbe9f;"/></a></td> <!-- imprimer -->
	 <td class="3emcolone" ><a href="#"><input type="button"  value="" align="center"  style="background-color: #cdbe9f;"/></a></td><!-- rectifier -->
	 
	 
	 </tr>
  </table>
</form>
</div> 

</body>
</html>


<?php
  //header('Location: ecritureBD.php');//Warning: Cannot modify header information - headers already sent by
 //include("SERVEUR/verif_num_acte.php"); 
 include("SERVEUR/ecritureBD_insertionSQL_caisse.php");
?>




  


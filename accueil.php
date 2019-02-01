<?php include("inc/accueil/accueil_principal.php"); ?>

<!DOCTYPE html>
<html>
<head>
 <meta http-equiv="X-UA-Compatible" content="IE=edge"/> <!-- Forcer IE à utiliser le derier mode de compatibilité avec les autre navigateurs -->
 <link rel="icon" type="image/png" href="img/ambassade.png" /> 
 <meta charset="utf-8"> 
 <title> Accueil - menu de navigation</title>
 <script src="js/jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="css/accueil.css" />
 <link href="css/slide.css" rel="stylesheet" title="Style" />
	<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	  <script src="assets/js/html5shiv.js"></script>
	  <script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
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
			  <li><a href="passport/ecritureBD.php" title="" onclick="page('nouvelledemande.php')" style="color:#fff;" >Saisie</a></li>
			  <li><a href="passport/lectureBD.php" title="" onclick="page('demande_passport.php')" style="color:#fff;" >Fiche Export</a></li>
			</ul>
			</li>
		<li class="toggleSubMenu"><span>Recettes Etat civil</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="passport/ecritureBD_recette_legalisation.php" title="" style="color:#fff;">Saisie</a></li>
				<li><a href="passport/lectureBD_recette_legalisation.php" title="" style="color:#fff;">Recettes légalisation</a></li>
			  </ul>
		</li>
		<li class="toggleSubMenu"><span>Caisse</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="passport/ecritureBD_caisse.php" title="" style="color:#fff;">Saisie</a></li>
				<li><a href="passport/lectureBD_caisse.php" title="" style="color:#fff;">Journal de caisse</a></li>
			  </ul>
		</li>

			<li><a href="#" title="">Cartes consulaires</a></li>
			
	</ul>
		
	  
	  
<!-- ARRIERE PLAN :  -->
<?php include("inc/accueil/accueil_background.php"); ?>


 <div class="centrer"  >
<form action ="" method="POST" name="form1" >

<!-- LE PANNEAU DE GAUCHE : cherche des document par numero ou nom -->

  <table class="tablegauche" > <caption  style="caption-side:top;"> <font color="#FFFFFF"><h3> UNION DES COMORES  </h3><h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6><h4> AMBASSADE DES COMORES  </h4></font><img src="img/armoirie.png" style="z-index:3;"  /></caption>
     <tr> <td>RECHERCHE DE DOCUMENT</td></tr>
	 <tr><td> <font color="#cdbe9f"><b>Search by</b></font> num&eacute;ro<br/> <input id="recherchenum" type="text" name="acte_" pattern=".{1,}"  > </td></tr> 
     <tr><td> <font color="#cdbe9f"><b>Search by</b></font> nom    <br/> <input id="recherchenom"  type="text" name="nom_"  > </td></tr>
	 <tr><td>
         <textarea class="t_area" name="myTextBox" cols="18" rows="4"> <?php echo $message ; ?> </textarea>
     <br/><input type="submit" name="envoie" value="Chercher"  style="background-color: #e5eecc;"/>

	 </td></tr>

 </table>
 
<!-- LE PANNEAU  CENTRAL : menu vertical (il serai + simple de mettre ce morceau de code dans un include  - voir le cours de Bezençon)-->



<table  class="tablecentre"  ><caption style="caption-side:top;" > <font color="#FFFFFF"><h3> OFFICE   </h3></font></caption>

	      <?php include("inc/accueil/accueil_menucentral.php"); ?>  
</table>


<!-- LE PANNEAU DE DROITE : Recher des document par liste déroulante -->

<table  class="tabledroite" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> D'ETAT CIVIL  </h3>
 <tr><td class="listemenu"> <?php include("inc/accueil/accueil_prefecture.php"); ?> </td></tr> 
 
</table>
</form>

</div>

</body>
</html>







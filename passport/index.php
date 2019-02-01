<?php include("SERVEUR/authentification.php "); ?>

<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
 <title> Authentification officier de l'etat civil</title>
 <link href="css/accueil.css" rel="stylesheet" title="Style" />
 

<SCRIPT>
  
 function loadInscription() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "inscriptionSurPC.php", true);
  xhttp.send();
}

function loadPassPerdu(){
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("info").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "passwordSurPC.php", true);
  xhttp.send();
}
</SCRIPT>
</head>

<body>
<!-- ARRIERE-PLAN -->

<table class="closeLowerMargin "  style="background-color:#1D702D;  top:-360px; z-index:2;  border-radius:20px;"><tr><td>   </td></tr></table> 
<table class="openLowerMargin "  style="background-color:#1D702D;   "><tr><td>  </td></tr></table> <!-- รงa rempli les vide de l\'interface -->


<div class="centrer"  >

<form action ="" method="post" name="form1" >
<!-- PANNEAU DE GAUCHE -->
  <table class="tablegauche" > <caption  style="caption-side:top;"> <font color="#FFFFFF"><h3> UNION DES COMORES  </h3><h6> Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement  </h6><h4> AMBASSADE DES COMORES  </h4></font><img src="img/armoirie.png"  /></caption>
     <tr>   <td>AUTHENTIFICATION</td></tr>
	 <tr>   <td> Login    <br/>  <input  type="text"   id="login_"   name="pseudo_" > </td></tr> 
     <tr><td> Mot de passe <br/>  <input  type="text"  id="pswd_"    name="motdepasse_" > </td></tr>
	 <tr><td>
         <textarea class="t_area" name="myTextBox" cols="18" rows="4" style="background-color:#1D702D;   color:#ffffff;"   > <?php  if(isset($message)) echo $message; ?></textarea><br/>
		 <input id="valider_" type="submit" class="submit" value="Valider"   name="envoie" style=" font-weight:bold;  background-color: #ffffff; height: 20px; "  />
	 </td></tr>
 </table>
 
<!-- PANNEAU CENTRAL --> 
<table  class="tablecentre" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> OFFICE   </h3></caption>
    <tr><td>
	     <div onclick="loadInscription()" id="valider_"> INSCRIPTION </div>
         <div onclick="loadPassPerdu()"   id="valider_"> MOT DE PASSE PERDU !<br><br><br><br><br><br><br><br><br><br></div>	
    </td></tr>
</table>

<!-- PANNEAU DE DROITE -->
<table  class="tabledroite" ><caption style="caption-side:top"> <font color="#FFFFFF"><h3> D'ETAT CIVIL  </caption>
     <tr><td>        
	         <div id="info"> 
			     Apr&egrave;s 3 essais erron&eacute;es,<br> l'acc&egrave;s au systeme est restreint par mesure de s&eacute;curit&eacute;.<br>L'officier d'&eacute;tat civil doit contacter l'administrateur syst&egrave;me.<br><br><br><br><br>
                 <?php include("inc/ecriture/traitement_inscription.php"); ?>
                 <?php include("inc/lecture/traitement_passwordperdu.php"); ?>
             </div>
	 </td></tr>
</table>

</form>

</div>
</body>
</html>










<?php

if(!isset($_GET['n'])) $_GET['n']=""; // Transmis par 'SERVEUR/colonne-afficher-naissance.php'
$id=$_GET['n'];
$id=ltrim($id);
try{$conn = new PDO('mysql:host=localhost;dbname=etatcivil;charset=utf8', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));} //// Le array active les exception PDO: pour obtenir + de détail sur d'eventuels erreurs
catch(Exception $e){die('Erreur de connexion à la base de données: '.$e->getMessage());}

$reponse = $conn->query('SELECT * FROM passport WHERE idPassport='.$id );
$donnees = $reponse->fetch();
?>

<!DOCTYPE html>
<html>
<head>
     <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
     <meta charset="utf-8"> <!-- sinon tu peux pas écrire N° ni les accent-->
     <title>Recupere l'identifiant transmis et l'afffiche dans un pop </title>
	 <link href="css/afficher.css" rel="stylesheet" title="Style" />     
</head>

<body>
<div id="wrap">

<table border="1" align="center"  style="border-collapse:collapse" bordercolor="#111111" width="80%" >
  
   <tr>
      <td align="center" VALIGN="top"><h2>UNION DES COMORES</h2> <h6>Unit&eacute;-Solidarit&eacute;-D&eacute;veloppement<h6> <h3>MINISTERE DE L'INTERIEUR</h3> <img src="img/armoirie.png"  /> <h4> Ambassade des Comores à: </h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text"  style="margin-left:-95px;"  value=""  ><hr/>  <h4>Ville de résidence du demandeur: </h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <!-- <input type="text"  style="margin-left:-95px;"   > --> <hr/> <div style="margin-left:10px;"><h6 align="left"><!--<input type="text"   style="margin-left:65px;"   > --><br>Date: ---------------------------</h6><h6 align="left"><input type="text"   style="margin-left:65px;"  value="" ><br>Motif ---------------------------------</h6><h6 align="left" ><input type="text"  style="margin-left:65px;" value="" ><br></h6></div></td>
      
	  <td  align="left"  rowspan="2" >
	     <h1 align="center"  style="color: white; text-shadow: 2px 2px 4px #1D702D;">Récépissé <br><br> Demande de passeport</h1>
		 <br><br><br><br><br><br><br><br><br><br><br><br>
		 <div style="margin-left:10px;">
		 
	     <input type="text"  style="margin-left:85px; " value="<?php echo $donnees["nom_demandeur"];?>"  ><br><b>
		 Nom--------------------------------------------------------------------------<br>
		 <input type="text"  style="margin-left:85px;" value="<?php echo $donnees["prenom_demandeur"];?>" ><br>
		 Prenom----------------------------------------------------------------------<br>
	     <br>

		 <!-- <input type="text"  style="margin-left:120px;" value="<?php echo $donnees[""];?>">  --><br>
		 Tel ---------------------------------------------------------------------------<br>

		 
		 <!-- <input type="text"  style="margin-left:120px;"  value="<?php echo $donnees[""];?>"> --><br>
		 Email --------------------------------------------------------------------<br>

		 <!-- <input type="text"  style="margin-left:120px;" value="<?php echo $donnees[""] ;?>" > --><br>
		 demeurant &agrave; ---------------------------------------------------------------<br>
		 
		 <p align="left" >
	
		 <!-- <input type="text"  style="margin-left:120px;" value="<?php echo $donnees[""] ;?>" > --><br>
		 Motif ----------------------------------------------------------
	     </p>
		 
		 </div>
	  </td>
   </tr>
   
   <tr>
      <td align="center" rowspan="2"  >
	        <h4> Signature demandeur:</h4> <br>
			<input type="text"  style="margin-left:-95px;"  value=""><hr/><br>
			<input type="text"  style="margin-left:-95px;"  value=""><hr/><br>
			<hr/><br><br>
			

	  </td>
	  
     
   </tr>
   
   <tr height="20px">             <td  rowspan="2">
         <p align="left">
	    <div style="margin-left:10px;">
	      <h4 align="center"> D&eacute;claration faite par:</h4> 
		  <!-- <input type="text"  style="margin-left:85px;" value="<?php echo $donnees["nom_demandeur"];?>" > -->
		  <br>--------------------------------------------------------------------------------<br>
		  <!-- <input type="text"  style="margin-left:85px;"  value="<?php echo $donnees["prenom_demandeur"];?>"  > -->
		  <br>--------------------------------------------------------------------------------<br>
		  <!-- <input type="text"  style="margin-left:85px;"  value=" à Paris" maxlength="100" width="300px" > -->
		  <br>--------------------------------------------------------------------------------<br>
		  
		  <h4 align="center"> D&eacute;claration re&ccedil;ue par:</h4> 
		  <!-- <input type="text"  style="margin-left:85px;" value="<?php echo $donnees["nom_recepteur"];?>" > -->
		  <br>--------------------------------------------------------------------------------<br>
		  <!-- <input type="text"  style="margin-left:85px;"  value="<?php echo $donnees["titre_recepteur"];?>" > -->
		  <br>--------------------------------------------------------------------------------<br>
		  <br>--------------------------------------------------------------------------------<br><br>
	    </div>
	  </p>
   </td></tr>
   
   <tr>
      <td align="left" >
	     <h4 align="center"> Pour acte certifi&eacute; conforme:</h4> 
		 <div style="margin-left:10px;">
		<!-- <input type="text"  style="margin-left:95px;"  value="<?php echo $donnees["date_expedie"];?>" > --><br><b>
		 D&eacute;livr&eacute; le ------------------------------------------<br>
		<!-- <input type="text"  style="margin-left:95px;"  value=" l'Ambassede des Comores" > --><br>
		   -------------------------------------------------------<br>
		 <input type="text"  style="margin-left:95px;"   value=" "><br>
		     -------------------------------------------------------<br>
		 </div>
		 <p > <h4  align="center"> L'officier de l'Etat Civil:</h4></p>
		 
	  
	  </td>
	  
	  

   </tr>
   

</table>
</div>
</body>
</html>

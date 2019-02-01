

<!DOCTYPE html>
<html>
<head>

 <link href="css/formulaire_inscription.css" rel="stylesheet"  /> 
 <link rel="icon" type="image/png" href="../img/ambassade.png" /> 
 
<script>

</script>
 

</head>
<body>

<div class="container">

<header>
   <h1>Mot de passe</h1>
</header>
  
<nav>
  <ul>
    <li><a href="#">Login</a></li>
    <li><a href="#">Password</a></li>
  </ul>
</nav>

<article>

    <form action="#"   method="post">
		<p class="titre">Votre login</p>
		<fieldset id="coordonnees">					
			<input type="text" name="saisirlogin"  placeholder="&nbsp;&nbsp; Entrer ici votre login : " style= "width:98% ; margin-left:1px; "  >	
							
		</fieldset>
		 
		<p class="titre">Votre password</p>
		<fieldset id="message">
		
		  <textarea  name="afficherpassword" rows="4" cols="40">
		  
		         <?php

						$link = mysqli_connect('localhost','root','','etatcivil')or
						die('Erreur de connection : '.mysqli_error());
						$link->set_charset("utf8");

						$login="";

						if(isset($_POST['saisirlogin'])){  $login = $_POST['saisirlogin'];}

						//Requête: PHP-> MySQL
						$query="SELECT `password` FROM `listeofficiers` WHERE `login`= '$login'";
						$result = mysqli_query($link,$query) or die('Erreur de selection : '.mysqli_error());

						//Reponse: PHP<-MySQL	
						$reponse ="";
						while($row = mysqli_fetch_array($result)){	
						   $reponse = $row["password"];// reponse à envoyer au client android
						}  

						mysqli_free_result($result);
						mysqli_close($link);

						//echo($reponse);// c'est ce qui sera envoyé au client android

				 ?>
	
		  </textarea>
		</fieldset>
		
		<p id="buttons">
		  <input type="submit" value="Valider"  />
		  <input type="reset" value="Annnuler" />
		</p>
	</form> 
</article>

<footer>Copyright &copy; A.Andjib.com</footer>


</body>
</html>










<!DOCTYPE html>
<html>
<head>

 <link href="css/formulaire_inscription.css" rel="stylesheet"  /> 
 
<script>

</script>
 

</head>
<body >

<div class="container"  >

<header  >
   <h1>Mot de passe</h1>
</header>
  
<nav>
  <ul>
    <li><a href="#">Login</a></li>
    <li><a href="#">Password</a></li>
  </ul>
</nav>

<article  >

    <form action="#"   method="post">
		<p class="titre">Votre login</p>
		<fieldset id="coordonnees" style="background:#1D702D; border:outset #1D702D;">					
			<input type="text" name="saisirlogin"  placeholder=" Ici votre login : "  "  ><!-- style= "width:98% ; margin-left:1px;  -->
            <select name="machine">
			  <option value="nom_machine_hote">Poste de travail</option>
			  <option value="odinateur1">localhost</option>
			  <option value="ordinateur2">Ordinateur2</option>
			  <option value="ordinateur3">Ordinateur3</option>
			  <option value="ordinateur4">Ordinateur4</option>
			  <option value="ordinateur5">Ordinateur5</option>			  
			</select >			
							
		</fieldset>
		 
		<p class="titre" >Votre password</p>
		<fieldset id="message" style="background:#1D702D; border:outset #1D702D;" >
		
		  <textarea  name="afficherpassword" rows="4" cols="40">
		  
		         <?php

						$link = mysqli_connect('localhost','root','','mysql')or
						die('Erreur de connection : '.mysqli_error());
						$link->set_charset("utf8");

						$login="";
						$machine="";

						if(isset($_POST['saisirlogin'])){  $login = $_POST['saisirlogin'];}

						//Requête: PHP-> MySQL
						$query="SELECT `Password` FROM `user` WHERE `User`= '$login'";
						$result = mysqli_query($link,$query) or die('Erreur de selection : '.mysqli_error());

						//Reponse: PHP<-MySQL	
						$reponse ="";
						while($row = mysqli_fetch_array($result)){	
						   $reponse = $row["Password"];// reponse à envoyer au client android
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








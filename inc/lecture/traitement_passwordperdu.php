

<?php
		       
						$link = mysqli_connect('localhost','root','','mysql')or
						die('Erreur de connection : '.mysqli_error());
						$link->set_charset("utf8");

						$login="";
						$machine="";

						if(isset($_POST['saisirlogin'])){  $login = $_POST['saisirlogin'];}
						if(isset($_POST['machine'])){ $machine = $_POST['machine'];}

						//Requête: PHP-> MySQL
						//$query="SELECT `Password` FROM `user` WHERE `User`= '$login'";
						$query="SELECT `Password` FROM `user` WHERE `User`= '$login' AND `Host`= '$machine' ";
						$result = mysqli_query($link,$query) or die('Erreur de selection : '.mysqli_error());

						//Reponse: PHP<-MySQL	
						$reponse ="";
						while($row = mysqli_fetch_array($result)){	
						   $reponse = $row["Password"];// reponse à envoyer au client android
						} 

                        if (mysqli_num_rows($result) != 0  && !empty($_POST['saisirlogin']) ) {
		
		                   //trouver une solution javascript pour remplacer la div info par cette page html
						   echo '
						        
									<html   >
										<head>
										 <link href="css/formulaire_inscription.css" rel="stylesheet"  /> 										 
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
												<fieldset id="coordonnees"  style="background:#1D702D; border:outset #1D702D;" >																																		
												</fieldset>									 
												<p class="titre">Votre password</p>
												<fieldset id="message"  style="background:#1D702D; border:outset #1D702D;" >												  
												  <textarea  name="afficherpassword" rows="4" cols="40" style="margin-bottom:30px;" >												  												  
													        &nbsp;&nbsp; Votre pasword est:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;' .$reponse. '   												  																				
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
									
						   ';
		                  
	                    }else if($login ){ // i fo que que le champs soit rempli sinon le message d 'erreur s'affira en permanence
							echo "<h3>Votre Poste n'est pas<a href='#'> \" ".$machine." \" </a>.<br/> Verifier le nom de votre machine ! </h3>";
                        
                        }						

						mysqli_free_result($result);
						mysqli_close($link);

						//echo($reponse);// c'est ce qui sera envoyé au client android				 
?>
<?php 
  
$link = mysqli_connect('localhost','root','','mysql')or die('Erreur de connection :'.mysqli_error());
	$link->set_charset("utf8");
	
	$idElecteur = "";
	

	$login="";
	$password="";
	$machine="";
	$message="";
	
	
	if(isset($_POST['login'])){ $login = $_POST['login'];}
	if(isset($_POST['password'])){ $password = $_POST['password'];}	
	if(isset($_POST['machine'])){ $machine = $_POST['machine'];}
	if(isset($_POST['message'])){ $message = $_POST['message'];}
	
	$detectLogin = "SELECT `User` FROM `user` WHERE `User`='$login'";
	$result= mysqli_query($link,$detectLogin) or die('Erreur de selection : '.mysqli_error($link));
	if(mysqli_num_rows($result) == 0){
			$query = "INSERT INTO `user`( `User`, `Password`) VALUES ('$login','$password')";
			$resul = mysqli_query($link,$query) or die('Erreur d INSERTION : '.mysqli_error($link ));
			echo "<h3>Bienvenue <a href='#'> ".$login." !</a><br/> Vous êtes bien enregistré .</h3>"; 
            echo "<p><a href='#'>Accès aux bases de données avec vos identifiants<br/>(login/password)</a></p>";
			
		
			if(isset($result) && $result == "1"){
					$getUser = "SELECT `User` FROM `user` WHERE `User`='$login'";
					$result_id = mysqli_query($link,$getUser) or die('Erreur de selection : '.mysqli_error($link));
					while($row = mysqli_fetch_assoc($result_id)) {
						$idElecteur = $row["User"];
					}
			}
	}else if (mysqli_num_rows($result) != 0  && !empty($_POST['login']) ) {
		//$idElecteur = -1;
		echo "<h3> Ce login<a href='#'> \" ".$login." \" </a>existe déjà.<br/> Veuillez choisir d'autres identifiants ! </h3>";
		echo "<p><a href='inscriptionSurPC.php'>Retour au formulaire</a></p>";
	}
			
	//echo($idElecteur);
	mysqli_free_result($result);

    mysqli_close($link);
	
?>
 
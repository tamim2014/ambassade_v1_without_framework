

<!DOCTYPE html>
<html>
<head>

 <link href="css/formulaire_inscription.css" rel="stylesheet"  /> 
</head>
<body>

<div class="container">

<header>
   <h1>Inscription</h1>
</header>
  
<nav>
  <ul>
    <li><a href="#">Coordonnées</a></li>
    <li><a href="#">Message</a></li>
  </ul>
</nav>

<article>

    <form action="index.php"   method="post">
		<p class="titre">Coordonnées</p>
		<fieldset id="coordonnees" style="background:#1D702D; border:outset #1D702D;" >		

			<input type="text" name="login" size="30" placeholder=" Login :" />
			<input type="text" name="password" size="30" placeholder=" Password :" />	

			<select name="machine">
			  <option value="nom_machine_hote">Poste de travail</option>
			  <option value="odinateur1">localhost</option>
			  <option value="ordinateur2">Ordinateur2</option>
			  <option value="ordinateur3">Ordinateur3</option>
			  <option value="ordinateur4">Ordinateur4</option>
			  <option value="ordinateur5">Ordinateur5</option>			  
			</select >  
			<!--		
			<select name="ville">
			  <option value="france">Ville</option>
			  <option value="ablon">Ablon</option>
			  <option value="agen">Agen</option>
			  <option value="aix-en-provence">Aix-en-Provence</option>
			  <option value="ajaccio">Ajaccio</option>
			  <option value="albi">Albi</option>
			  <option value="ales">Ales</option>
			  <option value="amiens">Amiens</option>
			  <option value="angers">Angers</option>
			  <option value="angy">Angy</option>
			  <option value="annecy">Annecy</option>
			  <option value="antibes">Antibes </option>
			  <option value="antony">Antony </option>
			  <option value="arcueil">Arcueil</option>
			  <option value="argenteuil">Argenteuil </option>
			  <option value="arles">Arles </option>
			  <option value="arnouville-les-Gonesse">Arnouville-les-Gonesse </option>
			  <option value="asnieres"> Asnieres </option>
			  <option value="asnieres-sous-bois">Asnieres-sous-Bois </option>
			  <option value="asnieres-sur-Seine">Asnieres-sur-Seine </option>
			  <option value="athis-Mons">Athis-Mons </option>
			  <option value="aubagne ">Aubagne </option>
			  <option value="aubervilliers ">Aubervilliers </option>
			  <option value="aulnay-sous-Bois ">Aulnay-sous-Bois </option>
			  <option value="auxerre ">Auxerre </option>
			  <option value="avignon ">Avignon </option>
			  <option value="bagneux ">Bagneux </option>
			  <option value="bagnolet ">Bagnolet </option>
			  <option value="barcelonne">Barcelonne(26120) </option>
			  <option value="bastia">Bastia(20200) </option>
			  <option value="beauvais">Beauvais(60000) </option>
			  <option value="begues">Bègues(03800) </option>
			  <option value="beguey">Béguey(33410) </option>
			  <option value="bobigny">Bobigny(93000) </option>
			  <option value="boissy-Saint-Léger">Boissy-Saint-Léger(94470) </option>
			  <option value=" ">Bordeaux (33000) </option>
			  <option value=" ">Bretagne (90130) </option>
			  <option value=" ">Bretagne (90130) </option>
			  <option value=" "> Brétigny-sur-Orge (91220)</option>
			  <option value=" ">Bruyères-sur-Oise (95820) </option>
			  <option value=" ">Bry-sur-Marne (94360) </option>
			  <option value=" ">Buchelay (78200) </option>  
			  <option value=" ">Buhy (95770) </option>			  
			  <option value=" ">Bussy-Saint-Georges (77600) </option>
			  <option value=" ">Brunoy (91800) </option>
			  <option value=" ">Bruyères-le-Châtel (91680) </option>
			
			  <option value=" ">Buhy (95770) </option>
			
			  <option value=" ">Buno-Bonnevaux (91720) </option>
			  <option value=" ">Cachan (94230) </option>
			  <option value=" ">Calès (46350) </option>
			  <option value=" ">Cannes (06150) </option>
			  <option value=" ">Carcassonne (11000 </option>
			  
			  <option value=" ">Carrières-sous-Poissy (78955)</option>
			  <option value=" ">Carrières-sur-Seine (78420) </option>
			  <option value=" ">Cergy (95000) </option>
			  <option value=" ">Chailly-en-Brie (77120 </option>
			  <option value=" ">Chailly-en-Bière (77930) </option>
			  <option value=" ">Chamonix-Mont-Blanc (74400 </option>
			  <option value=" ">Champagne-sur-Oise (95660 </option>
			  <option value=" ">Champagne-sur-Seine (77430) </option>
			  <option value=" "><Champigny-sur-Marne (94500)/option>
			  <option value=" ">Champs-sur-Marne (77420)</option>
			  <option value=" ">Châtenay-en-France (95190)</option>
			  <option value=" ">Châtenay-Malabry (92290)</option>
			  <option value=" ">Chatignonville (91410)Châtillon (92320</option>
			  <option value=" ">Châtres (77610)</option>
			  <option value=" ">Chauffry (77169)</option>
			  <option value=" ">Chérence (95510)</option>
			  <option value=" ">Choisy-le-Roi (94600)</option>
			  <option value=" ">Colombes (92700</option>
			  <option value=" ">Conflans-Sainte-Honorine (78700)</option>
			  <option value=" ">Corbeil-Essonnes (91100)</option>
			  <option value=" ">Coulommiers (77120)</option>
			  <option value=" ">Creil (60100)</option>
			  <option value=" ">Créteil (94000)</option>
			  <option value=" ">Drancy (93700</option>
			  <option value=" ">Épinay-Champlâtreux (95270)Épinay-sous-Sénart (91860)</option>
			  <option value=" ">Épinay-sur-Orge (91360)</Gonesse (95500)option>
			  <option value=" ">Épinay-sur-Seine (93800)</option>
			  <option value=" ">Ermont (95120)</option>
			  <option value=" ">Essômes-sur-Marne (02400)</option>
			  <option value=" ">Ézanville (95460)</option>
			  <option value=" ">Fontenay-sous-Bois (94120)</option>
			  <option value=" ">Fontenay-aux-Roses (92260)</option>
			  <option value=" ">Fontenay-en-Parisis (95190)</option>
			  <option value=" ">Franconville (95130)</option>
			  <option value=" ">Garges-lès-Gonesse (95140)</option>
			  
			  <option value=" "></option>

			</select>
			-->
			
			
		</fieldset>
		 
		<p class="titre">Message</p>
		<fieldset id="message"  style="background:#1D702D; border:outset #1D702D;">
		  <textarea name="message" rows="4" cols="40"></textarea>
		</fieldset>
		
		<p id="buttons">
		  <input type="submit" value="Enregistrer"  />
		  <input type="reset" value="Recommencer" />
		</p>
	</form> 
</article>

<footer>Copyright &copy; A.Andjib.com</footer>

</div>

</body>
</html>





	




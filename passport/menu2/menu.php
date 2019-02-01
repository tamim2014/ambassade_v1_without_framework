<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>  </title>
	<link href="css/menu.css" rel="stylesheet" title="StyleM" />
	<script src="js/jquery.js"> </script> 
	<script src="js/menu_accordeon.js"> </script>
	<script src="js/menu_ajax.js"> </script>
	
	<script>
	     $(document).ready(function(){
			 $("ul.navigation").hide();
			 //$("#contenu").css('width', '99%');
			 $("img#iconemenu").hide();
			 $("img#iconemenu").click(function(){
                 $("ul.navigation").toggle("slow");// cache/affiche le menu
                 $("#contenu").css('width', '124%');
				 
				 $("img#iconemenu").hide();
				 $("img#imagemenu").show();
				 $("#contenu").addClass("extended_width");//toggleClass("larger")
             });
			 
             $("img#imagemenu").click(function(){
                 $("ul.navigation").toggle("slow");// cache/affiche le menu
				 $("#contenu").css('width', '100%');
				  
				// $("#contenu").css('background', '#e5eec1');
				 
				 
				 
				 $("img#iconemenu").show();
				 $("img#imagemenu").hide();
				 $("#contenu").removeClass("extended_width");
				  $("#contenu").addClass("reduced_width");

             }); 

  
         });    
	</script>
	<style>
		.extended_width	{
			 border: 0px  #cf3fc3 dotted; 
				font-style: italic;
				font-size: font-size: 22px;
				font-family: "Times New Roman", Georgia, Serif;
				
				color:#000066;
				background-color: #e5eec1;
		}
		
		.reduced_width {
			border: 0px  #cf3fc3 dotted;
				font-style: italic;
				font-size: 20px;
				font-family: "Times New Roman", Georgia, Serif;
				color:#00004d;
				
		}
		
	</style>
	

	
</head>

<body >
     <img src="img/menu.png" id="iconemenu" style=" position:fixed; right:0px; " /><br>
    <img src="img/menu.png" id="imagemenu" style=" position:fixed; right:0px; " /><br><br>
    <!-- menu accordeon vertical -->
    
		<ul class="navigation" style=" position:fixed; right:0px; width:19.5%;" >

	
		  <li class="toggleSubMenu"><span>Gestion passports</span>
			<ul class="subMenu">
			  <li><a href="#" title="" onclick="page('demande.php')" style="color:#fff;" >Demandes déposées</a></li>
			  <li><a href="#" title="" onclick="page('retrait.php')" style="color:#fff; ">Passports délivrés</a></li>
			  <li><a href="#" title="" onclick="page('mensuel.php')" style="color:#fff;">Requêtes mensuelles</a></li>
			  <li><a href="#" title="" onclick="page('annuel.php')" style="color:#fff;">Requêtes annuelles</a></li>
			</ul>
			</li>
			<li class="toggleSubMenu"><span>Ressources humaines</span>
			  <ul class="subMenu" style="color: #fff;" >
				<li><a href="#" title="" style="color:#fff;">Le personnel</a></li>
				<li><a href="#" title="" style="color:#fff;">Les congés</a></li>
				<li><a href="#" title="" style="color:#fff;">Les contrats</a></li>
			  </ul>
			</li>
			<li><a href="#" title="">Stock</a></li>
		</ul>
		

</body>
</html>

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
				 
				 //$("div.centrer form table p.showacte tr td.3emcolone").hide();// je veux reduire la largeur de l interface ecritureBD.php
				
                 $("ul.navigation").toggle("slow");// cache/affiche le menu
				 $("#contenu").css('width', '100%');
				 
				  
				// $("#contenu").css('background', '#e5eec1');
				 
				 
				 
				 $("img#iconemenu").show();
				 $("img#imagemenu").hide();
				
				 $("#contenu").removeClass("extended_width");
				  $("#contenu").addClass("reduced_width");

             }); 
  
         }); 


// Question1

        function reponse1(){
         //1. Définition d'une instance xhr, de l'objet XMLHttpRequest
			var xhr=null;
			if(window.XMLHttpRequest){ var xhr=new XMLHttpRequest();}
			else if(window.ActiveXObject){ var xhr=new ActiveXObject("Microsft.XMLHTTP");}
			else { "Votre navigateur est incompatible avec AJAX..."}
		//2.Requête client vers le SERVEUR web
			xhr.open("GET","fichiersTexte/reponse1.1.txt",true);// OUVRIR UNE URL
			xhr.send(null);                                    // ENVOYER LA REQUETTE
		    document.getElementById("d1").style.display="block"; // Affiche La div où on va afficher la réponse 
		  
		//3.Affichage:            Utilisation de xhr pour l'affichage(côté CLIENT) de la réponse du SERVEUR
			xhr.onreadystatechange=function(){
			if(xhr.readyState ==4 && xhr.status==200){ //si chargement complete && fichier mages.txt trouvé
					   document.getElementById('d1').innerHTML=xhr.responseText;}
			}		    
		// Les boutons de control(rien avoir avec AJAX)  
		  document.getElementById("bt1").style.display="inline"; 
		  document.getElementById("bt1_").style.display="inline"; 
		}
		
		function effacer1(){
           var box=document.getElementById("d1");    
		   box.removeChild(box.childNodes[0]) ; 
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t1").value="" ; 
		}
		function enlever1(){
           var box=document.getElementById("d1");    
		   document.getElementById("d1").style.display="none"; 
		   document.getElementById("bt1").style.display="none"; 
		   document.getElementById("bt1_").style.display="none"; 
		}

		

// Question2		
		function reponse1_2(){  
		  //var R2=document.getElementById("R2").textContent;
          document.getElementById("d2").style.display="block";  
		  //document.getElementById("d2").innerHTML=R2;
		  document.getElementById("bt2").style.display="inline"; 
		  document.getElementById("bt2_").style.display="inline";   
		}
		function effacer2(){
           var box=document.getElementById("d2");    
		   box.removeChild(box.childNodes[0]) ;
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t2").value="" ; 		   
		}
		function enlever2(){
           var box=document.getElementById("d2");    
		   document.getElementById("d2").style.display="none"; 
		   document.getElementById("bt2").style.display="none"; 
		   document.getElementById("bt2_").style.display="none"; 
		}
// Question3		
		function reponse3(){  
		  var R3=document.getElementById("R3").textContent;
          document.getElementById("d3").style.display="block";  
		  document.getElementById("d3").innerHTML=R3;
		  document.getElementById("bt3").style.display="inline"; 
		  document.getElementById("bt3_").style.display="inline"; 
		  
		}
		function effacer3(){
           var box=document.getElementById("d3");    
		   box.removeChild(box.childNodes[0]) ;
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t3").value="" ; 		   
		}
		function enlever3(){
           var box=document.getElementById("d2");    
		   document.getElementById("d3").style.display="none"; 
		   document.getElementById("bt3").style.display="none"; 
		   document.getElementById("bt3_").style.display="none"; 
		}
		
//Question4		
		function reponse4(){  
		  var R4=document.getElementById("R4").textContent;
          document.getElementById("d4").style.display="block";  
		  document.getElementById("d4").innerHTML=R4;
		  document.getElementById("bt4").style.display="inline"; 
		  document.getElementById("bt4_").style.display="inline"; 
		  
		}
		function effacer4(){
           var box=document.getElementById("d4");    
		   box.removeChild(box.childNodes[0]) ; 
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t4").value="" ; 
		}
		function enlever4(){
           var box=document.getElementById("d4");    
		   document.getElementById("d4").style.display="none"; 
		   document.getElementById("bt4").style.display="none"; 
		   document.getElementById("bt4_").style.display="none"; 
		   
		}
/
// Question5
        function reponse5(){
         //1. Définition d'une instance xhr, de l'objet XMLHttpRequest
			var xhr=null;
			if(window.XMLHttpRequest){ var xhr=new XMLHttpRequest();}
			else if(window.ActiveXObject){ var xhr=new ActiveXObject("Microsft.XMLHTTP");}
			else { "Votre navigateur est incompatible avec AJAX..."}
		//2.Requête client vers le SERVEUR web
			xhr.open("GET","fichiersTexte/reponse1.5.txt",true);// OUVRIR UNE URL
			xhr.send(null);                  // ENVOYER LA REQUETTE
		    document.getElementById("d5").style.display="block"; // La div où on va afficher la réponse   
		//3.Affichage:
			xhr.onreadystatechange=function(){
			if(xhr.readyState ==4 && xhr.status==200){ //si chargement complete && fichier mages.txt trouvé
					   document.getElementById('d5').innerHTML=xhr.responseText;}
			}		    
		// Les boutons de control(rien avoir avec AJAX)  
		  document.getElementById("bt5").style.display="inline"; 
		  document.getElementById("bt5_").style.display="inline"; 
		}
		function effacer5(){
           var box=document.getElementById("d5");    
		   box.removeChild(box.childNodes[0]) ;
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t5").value="" ; 		   
		}
		function enlever5(){
             
		   document.getElementById("d5").style.display="none"; 
		   document.getElementById("bt5").style.display="none"; 
		   document.getElementById("bt5_").style.display="none"; 
		}
//Question6		
		function reponse6(){  
		  var R6=document.getElementById("R6").textContent;
          document.getElementById("d6").style.display="block";  
		  document.getElementById("d6").innerHTML=R6;
		  document.getElementById("bt6").style.display="inline"; 
		  document.getElementById("bt6_").style.display="inline"; 
		  
		}
		function effacer6(){
           var box=document.getElementById("d6");    
		   box.removeChild(box.childNodes[0]) ; 
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t6").value="" ; 
		}
		function enlever6(){
           var box=document.getElementById("d6");    
		   document.getElementById("d6").style.display="none"; 
		   document.getElementById("bt6").style.display="none"; 
		   document.getElementById("bt6_").style.display="none"; 
		}

//Question7		
		function reponse7(){  
		  var R7=document.getElementById("R7").textContent;
          //document.getElementById("d7").style.display="block";  
		  document.getElementById("d7").innerHTML=R7;
		  document.getElementById("bt7").style.display="inline"; 
		  document.getElementById("bt7_").style.display="inline"; 
		  
		}
		function effacer7(){
           var box=document.getElementById("d7");    
		   box.removeChild(box.childNodes[0]) ; 
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t7").value="" ; 
		}
		function enlever7(){
           var box=document.getElementById("d7");    
		   document.getElementById("d7").style.display="none"; 
		   document.getElementById("bt7").style.display="none"; 
		   document.getElementById("bt7_").style.display="none"; 
		}
		
// Question8

        function reponse1_8(){
		  var R1_8=document.getElementById("R1_8").textContent;
          document.getElementById("d1_8").style.display="block";  
		  document.getElementById("d1_8").innerHTML=R1_8;
		  document.getElementById("bt8").style.display="inline"; 
		  document.getElementById("bt8_").style.display="inline"; 
		}
		function effacer8(){
           var box=document.getElementById("d1_8");    
		   box.removeChild(box.childNodes[0]) ; 
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t8").value="" ; 
		}
		function enlever8(){
             
		   document.getElementById("d1_8").style.display="none"; 
		   document.getElementById("bt8").style.display="none"; 
		   document.getElementById("bt8_").style.display="none"; 
		}
// Question9

        function reponse9(){
		  var R9=document.getElementById("R9").textContent;
          document.getElementById("d9").style.display="block";  
		  document.getElementById("d9").innerHTML=R9;
		  document.getElementById("bt9").style.display="inline"; 
		  document.getElementById("bt9_").style.display="inline"; 

		
		function effacer9(){
           var box=document.getElementById("d9");    
		   box.removeChild(box.childNodes[0]) ; 
		   //Effacer aussi le contenu du textarea
		   document.getElementById("t9").value="" ; 
		}
		function enlever9(){
           var box=document.getElementById("d9");    
		   document.getElementById("d9").style.display="none"; 
		   document.getElementById("bt9").style.display="none"; 
		   document.getElementById("bt9_").style.display="none"; 
		}
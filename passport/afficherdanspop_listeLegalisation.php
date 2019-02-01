<?php session_start(); if(!isset($_SESSION["pref"])) $_SESSION["pref"]=""; $s=$_SESSION["pref"]; ?>


<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8"> 
	 <link href="css/accueil.css" rel="stylesheet" title="Style" />
	 <link href="css/lectureBD.css" rel="stylesheet" title="Style" />
	 <style>
	 table,tr,th,td {border-radius:1px; }
     table tr#th_noir th {background:black; }
	 </style>
</head>

<body>	 

<div id="yivawo"  style="left:13px;   box-shadow: 1px 1px 0px 0px #cdbe9f; width:100%; height:100%; scrollbar:auto; " >
<?php

			   echo $_SESSION["table_legalisation"];

?>
</div>
</body>
</html> 



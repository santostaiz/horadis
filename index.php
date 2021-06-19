


<html>
<head>
	<meta charset="UTF-8" >

	<link rel="shortcut icon" href="clock1.png" type="image/x-icon" />
	<title> HORACIO </title>
	<?php	  include_once("header.php");
					session_start();
	?>

<body>

	<?php

	$_SESSION["modulo1"]=["0100","0200","0300","0400","0500","0600","0700","0800","0900","1000","1100","1200"];

	$_SESSION["modulo2"]=["0115","0215","0315","0415","0515","0615","0715","0815","0915","1015","1115","1215"];

	$_SESSION["modulo3"]=["0130","0230","0330","0430","0530","0630","0730","0830","0930","1030","1130","1230"];


	$_SESSION["modulo4"]=["0105","0205","0305","0405","0505","0605","0705","0805","0905","1005","1105","1205",
												"0110","0210","0310","0410","0510","0610","0710","0810","0910","1010","1110","1210",
												"0120","0220","0320","0420","0520","0620","0720","0820","0920","1020","1120","1220"];

	if((isset($_GET["pg"]))&&(!empty($_GET["pg"]))){
		$pag= $_GET["pg"];
		include_once("header_int.php");

		include_once("php/exe.".$pag.".php");
	}else{
		  include_once("menu.php");
	}

	if((isset($_GET["dica"]))&&(!empty($_GET["dica"]))){

		include_once("php/exe.dica.php");
	}




	?>



</body>
</html>

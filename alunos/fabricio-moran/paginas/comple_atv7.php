<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Complemento atividade 8</title>
</head>

<body>

<?php

if(!isset($_POST['ndupla']) || sizeof(isset($_POST['ndupla']))<1){
	header("Location: ../index.php?go=atv7");
}else{
	if(!isset($_POST['p1']) || sizeof(isset($_POST['p1']))<1){
		header("Location: ../index.php?go=atv7");
	}else{
		if(!isset($_POST['p2']) || sizeof(isset($_POST['p2']))<1){
			header("Location: ../index.php?go=atv7");
		}else{
			if(!isset($_POST['email']) || sizeof(isset($_POST['email']))<1 || preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
$_POST['email'])){
				header("Location: ../index.php?go=atv7");
			}else{
				if(!isset($_POST['data']) || sizeof(isset($_POST['data']))<3 || !is_numeric($_POST['data'])){
					header("Location: ../index.php?go=atv7");
				}
			}
		}
	}
}
 ?>



</body>
</html>
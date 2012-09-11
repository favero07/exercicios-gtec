<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Complemento atividade 8</title>
</head>

<body>

<?php
if(!isset($_POST['p1']) || strlen($_POST['ndupla'])<2){
	header("Location: ../index.php?go=atv7");
}else{
	if(!isset($_POST['p1']) || strlen($_POST['p1'])<2){
		header("Location: ../index.php?go=atv7");
	}else{
		if(!isset($_POST['p2']) || strlen($_POST['p2'])<2){
			header("Location: ../index.php?go=atv7");
		}else{
			if(!isset($_POST['email']) || strlen($_POST['email'])<2 || !preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/',
$_POST['email'])){
				header("Location: ../index.php?go=atv7");
			}else{
				if(!isset($_POST['data']) || strlen($_POST['data'])<2 || !is_numeric($_POST['data'])){
					header("Location: ../index.php?go=atv7");
				}
			}
		}
	}
}
 ?>



</body>
</html>
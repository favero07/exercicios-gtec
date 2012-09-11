<?php  
	if(!empty($_POST["nome"]) && !empty($_POST["idade"])){
		echo "<p>Bem vindo ". $_POST["nome"]."!</p>";
		echo "<p>Sua idade &eacute ". $_POST["idade"] ."anos.</p>";
	}
	else{
		echo "<p>Voce deve prencher os campos!</p>";
		echo "<a href = 'exe.php'>Voltar</a>";
	}
?>
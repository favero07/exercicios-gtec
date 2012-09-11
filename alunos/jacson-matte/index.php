<!-- -Enviar email
Enviar um mini-curriculum
E fedbaak para o professor , junto aos exercicios
 -->



<style type="text/css">
	footer{
		margin-left:auto;
		margin-right:auto;
		width:200px;
		bottom:0px;
	}
	#conteudo{
		min-height:400px;
	}
</style>

<?php if(isset($_GET['go'])){
	$file = "paginas/".@$_GET['go'].".php";
}
?>
<!DOCTYPE HTML>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
<?php if(isset($_GET['go']) && $_GET['go']=="index"){
	$title = "Site.com";
	$subtitle = "o melhor da blogosfera é aqui";
	echo $title." - ".$subtitle;
}else echo "Geração Tec";
?>

</title>
</head>

<body>
<div>
	<div>
		GERAÇÃO TEC - AULAS DE PHP/HTML
	</div>
    <div>
		<ul>
        	<li><a href="?go=index">Atividade 1</a></li>
            <li><a href="?go=atv1">Atividade 2</a></li>
            <li><a href="?go=atv2">Atividade 3</a></li>
            <li><a href="?go=atv3">Atividade 4</a></li>
            <li><a href="?go=atv4">Atividade 5</a></li>
            <li><a href="?go=atv5">Atividade 6</a></li>
            <li><a href="?go=atv6">Atividade 7</a></li>
            <li><a href="?go=atv7">Atividade 8</a></li>
        </ul>
	</div>
    <div id="conteudo">
   <?php if(isset($_GET['go']) && $_GET['go']!="index" ){
			if(  !@include($file)){
				 echo "<h1>Erro inesperado</h1><p>Um arquivo necess&aacute;rio n&atilde;o foi encontrado.</p>";
			}
		}?>

	</div>
    <?php if(isset($_GET['go']) && $_GET['go']=="index"){ ?>
    <footer>
    &reg; copyright <?php echo "Site.com - ".date('Y'); ?>
    </footer>
    <?php } ?>
</div>
</body>
</html>
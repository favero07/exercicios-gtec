<!doctype html>
<html>
	<head>
		<title>Index</title>	
		<style type="text/css">

			header{
				background-color:;
				text-align: center;
			}

			article{
				background-color:;
				width: 200px;
				height: 100%;
				vertical-align: middle;
				float: left;
				position: relative;
				

			}

			aside{
				background-image:gtec.png;
				width:1000px;
				float: right;
				margin-right: 100px;

			}

			footer{
				clear:both;
				width: 100%;
				text-align: center;
				position: absolute;
				bottom: 0;
			}

			fieldset{
				width: 400px;
				margin-left: 250px;

			}

			input,textarea{
				width: 100%;
			}


		</style>
	</head>
	<body>
		<?php 
			if (!empty($_GET["pagina"]) && $_GET["pagina"]=="calculadora") {
		       include "valorcalculadora.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="post"){
		      include "exe.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="parimpar"){
		      include "exe1.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="media"){
		      include "exe2.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="funcoes"){
		      include "exe9.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="cadastro"){
		      include "exe10.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="criptografia"){
		      include "exe12.php";
		    }

		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="class"){
		      include "class/valorteste.php";
		    }

		    else {
		        include "sobre.php";

		   }
		 ?>

		<article>
			<ul>
				<li>
					<a href= "/gtec/arquivo/index.php">Sobre</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=calculadora">Calculadora</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=post">$_POST</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=parimpar">Par ou impar?</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=media">Media</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=funcoes">Algumas funcoes</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=cadastro">Sistema de cadastro</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=criptografia">Criptografia</a>
				</li>
				<li>
					<a href= "/gtec/arquivo/index.php?pagina=class">Class</a>
				</li>
			</ul>
		</article>


		 <footer>
		 	<hr/>
			<p>Maicon Ghidolin</p>
			<p><?php echo date("l, d - F - Y") ?></p>
		</footer>
	</body>
</html>
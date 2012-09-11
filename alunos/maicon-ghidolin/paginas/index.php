<html>
	<head>
		<title>Index</title>	
		<style type="text/css">

			header{
				background-color:gray;
				text-align: center;
			}

			article{
				background-color:gray;
				width: 200px;
				height: 100%;
				vertical-align: middle;
				float: left;
				

			}

			aside{
				background-image:gtec.png;
				width:1000px;
				float: right;
				margin-right: 100px;

			}

			footer{
				clear:both;
				text-align: center;
			}

			fieldset{
				width: 400px;
				margin-left: 300px;

			}

			input,textarea{
				width: 100%;
			}

		</style>
	</head>
	<body>
		<?php 
			if (!empty($_GET["pagina"]) && $_GET["pagina"]=="contato") {
		       include "contato.php";
		    }
		    else if (!empty($_GET["pagina"]) && $_GET["pagina"]=="sobre"){
		      include "sobre.php";
		    }
		    else {
		        include "home.php";

		   }
		 ?>

		<article>
			<ul>
				<li>
					<a href= "/gtec/paginas/index.php">Home</a>
				</li>
				<li>
					<a href= "/gtec/paginas/index.php?pagina=sobre">Sobre</a>
				</li>
				<li>
					<a href= "/gtec/paginas/index.php?pagina=contato">Contato</a>
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
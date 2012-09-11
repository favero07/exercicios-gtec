<!DOCTYPE html>
<html>
	<head>
		<title>
			<?php
				if(isset($_GET["pagina"])){
					if($_GET["pagina"]=="sobre"){
						echo "Sobre";
					}elseif($_GET["pagina"]=="contato"){
						echo "Contato";
					}
				}else{
					echo "Home";
				}
			?>
		</title>
		<meta charset="UTF-8"/>
		<style type="text/CSS">
			.wrapper{
				margin: auto;
				width: 900px;
				height: 100%;
			}
			header{
				width: 900px;
				height: 100px;
				padding-top: 15px;
				background: gray;
				border-radius: 7px 7px 7px 0px;
			}
			h2{
				text-align: center;
			}
			li{
				list-style-type: none;
			}
			a{
				color: black;
				text-decoration: none;
			}
			a:visited{
				color: black;
			}
			a:hover{
				color: white;
			}
			nav{
				width: 150px;
				height: 200px;
				background: gray;
				padding-top: 2%;
				border-radius: 0px 0px 7px 7px;
				float: left;
			}
			article{
				width: 750px;
				min-height:100px;
				float: right;
			}
			article a:hover{
				color: gray;
			}
			article ul{
				padding-left: 50px;
			}
		</style>
	</head>
	<body>
		
		<div class="wrapper">
			<header>
				<h2> 
				<?php
					if(isset($_GET["pagina"])){
						if($_GET["pagina"]=="sobre"){
							echo "Sobre";
						}elseif($_GET["pagina"]=="contato"){
							echo "Contato";
						}
					}else{
						echo "Home";
					}
				?>
				</h2>
			</header>
			<nav>
				<ul>
					<li> <a href="?"> Home </a> </li>
					<li> <a href="?pagina=sobre"> Sobre </a> </li>
					<li> <a href="?pagina=contato"> Contato </a> </li>
				</ul>
			</nav>
			<article>
				<?php
					if(isset($_GET["pagina"]) && !empty($_GET)){
						if($_GET["pagina"]=="sobre"){
							include("sobre.php");
						}elseif($_GET["pagina"]=="contato"){
							include("contato.php");
						}
					}else{
						include("home.php");
					}
				?>
			</article>
		</div>
	
	</body>
</html>
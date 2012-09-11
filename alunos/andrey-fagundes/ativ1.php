<?php
	 $title = "Site.com";
	 $subtitle = "o melhor da blogosfera é aqui!";
?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>
			<?php
				 echo $title. " - " .$subtitle
			?>
        </title>
     	<style>
			article{
				width: 400px;
				float: left;
			}

			aside{
				width:130px;
				margin-left: 20px;
				float:right;
			}
			header{
				clear:both;
				width: 100%;
			}
			footer{
				clear:both;
			}
		</style>
    </head>
	<body>
		<div class="container">
            <header>

            </header>
            <article>
           		 <form action="ativ1.php" method="POST">
                     Seu nome <input type="text" name="nome" />
                     <br/>
                     Sua idade: <input type="text" name="idade" />
                     <br/>
                     <input type="submit" value="Enviar">
                </form>
                <br/>
                <?php
					if (!empty($_POST["nome"]) && !empty($_POST["idade"])){
						echo "Oi ".$_POST["nome"].". "." Você tem ".$_POST["idade"]." anos.";
					}
				?>
             </article>
             <footer>
             	<br/>
                &reg; copyright - <?php echo $title." – ".date('Y'); ?>
             </footer>
        </div>
	</body>
</html>

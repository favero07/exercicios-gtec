<!DOCTYPE html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>ativ8</title>
        <script type="text/javascript">
        	var limpou=0;
			function limpar(){
				if (limpou == 0)
					document.getElementById("musics").value="";
				limpou = 1;
			}
        </script>
    </head>
    <body>
        <form method="post" action= "includes/ativ8_1.php">
            <fieldset style="width: 50%; height: 50%">
                <legend align="center">CADASTRO DE BANDAS</legend>
                <table align="center">
                    <tr>
                        <td>
                          <label for="banda">  Nome da Banda:</label>
                         </td>
                         <td>
                            <input type="text" id="banda" name="banda">
                         </td>
                     </tr>
                     <tr>
                        <td>
                              <label for="cantor1"> Nome do 1º integrante::</label> 
                         </td>
                         <td>
                            <input type="text" id="cantor1" name="cantor1">
                         </td>
                     </tr>
                     <tr>
                        <td>
                             <label for="cantor2">Nome do 2º integrante:</label> 
                         </td>
                         <td>
                            <input type="text" id="cantor2" name="cantor2">
                         </td>

                     </tr>
                     <tr>
                        <td>
                            <label for="mail">Email para contato:</label> 
                         </td>
                         <td>
                            <input type="text" id="mail" name="mail">
                         </td>
                     </tr>
                       </tr>
                        <tr>
                        <td>
                             <label for="ano">Ano de Criação:</label> 
                         </td>
                         <td>
                            <input type="text" id="ano" name="ano">
                         </td>
                     </tr>
                     <tr>
                        <td>
                            <label for="musics">Nome das 5 primeiras músicas:</label>  
                         </td>
                         <td>
                        <textarea rows="13" id="musics" name="musics" onClick="limpar();">
                        Separe as músicas por vírgulas.
                        </textarea>
                         </td>
                     </tr>
                     <tr>
                        <td colspan="2" align="center">
                            <input type="submit" value="Enviar">
                         </td>
                     </tr>
                  </table>
             </fieldset>
        </form>
     </body>
</html>
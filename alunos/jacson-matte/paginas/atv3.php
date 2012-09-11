<p>ATIVIDADE USANDO INCLUSÃO DE ARQUIVO E FUNÇÕES</p>
<p>Um inclui o conteúdo do arquivo especificado (seja um script PHP ou um arquivo HTML normal) e o outro requer que o arquivo especificado seja incluído. Se esse arquivo por algum motivo não puder ser incluído, um erro aparecerá na página.<br />

Além dessas funções descritas acima existem as funções similares include_once e require_once, que servem para ajudar num problema comum na programação em PHP, que é incluir o mesmo arquivo várias vezes no mesmo script (o que faz com que um erro apareça na tela). </p>

<form action="index.php?go=atv1" method="post">
	Valor: <input type="text" name="num1" />
    <select name="operacao">
    	<option value="+" >Soma</option>
        <option value="-" >Subtração</option>
        <option value="/" >Divisão</option>
        <option value="*">Multiplicação</option>
        <option value="mod">Modulo</option>
    </select>
    Valor: <input type="text" name="num2" />
    <input type="submit"  value="calcular"/>
</form>

<?php 
include "paginas/functions.php";
if(isset($_POST)){
	function calcula(){
		switch($_POST["mes"]){
			case "+" : soma(); break;
			case "-" : subtrai(); break;
			case "/" : divide(); break;
			case "*" : multiplica(); break;
			case "mod" : mod(); break;
		}
	}
}
?>


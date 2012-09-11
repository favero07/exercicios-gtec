<?php  
 $vetor= array(
	 "key1" => "jacson",
	 "key2" => "M",
	 "key3" => "Gessica",
	 "key4" => "F",
	 "key5" => "Wagner",
	 "key6" => "M",
	 "key7" => "Sabrina",
	 "key8" => "F",
 );
$homen=0;
$mullher=0;
$a=0;
?>
<table style="width:200px;">
  <?php
foreach($vetor as $key=>$row){
	if(($a%2)!=0){
		if($row=="M"){
			$homen++;
		}else{
			$mullher++;
		}
		?>
  
    <td><?php echo $row ?></td>
  </tr>
  <?php
	}else{
		?>
  <tr>
    <td><?php echo $row ?></td>
    <?php
	}
   $a++;
}
?>
</table>
<p>
  <?php
 if($homen>$mullher){
	 echo "O sexo predominante é Masculino";
 }else{
	 if($homen<$mullher){
		 echo "O sexo predominante é Feminino";
	 }else{
		 echo "Nõa existe sexo Predominante";
	 }
 }


?>
</p>
<form action="index.php?go=atv2" method="post">
  <p>Os sistemas operacionais gerenciam os recursos de entrada e saída de um sistema 
  computacional (S/N):</p>
  <input type="text" name="resp" />
  <p>Informe o numero do mês:</p><input type="text" name="mes" />
  <input type="submit"  value="responder"/>
</form>
<?php
	if(isset($_POST["resp"])){
		switch($_POST["resp"]){
			case 'S': echo "Resposta certa (SIM) <br />"; break;
			case 'N': echo "Resposta errada (NÃO) <br />"; break;
			default : echo "Resposta inválida <br />"; break;
		}
		switch($_POST["mes"]){
			case 1: echo "Janeiro"; break;
			case 2: echo "Fevereiro"; break;
			case 3: echo "Março"; break;
			case 4: echo "Abril"; break;
			case 5: echo "Maio"; break;
			case 6: echo "Junho"; break;
			case 7: echo "Julho"; break;
			case 8: echo "Agosto"; break;
			case 9: echo "Setembro"; break;
			case 10: echo "Outubro"; break;
			case 11: echo "Novembro"; break;
			case 12: echo "Dezembro"; break;
			default : echo "Mês inválido"; break;
		}
	}
?>

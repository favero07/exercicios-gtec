<?php $empresas= array(
	 "key1" => "Uninfo Sistemas",
	 "key2" => "C.T.A Sistemas",
	 "key3" => "SGI Sistemas",
	 "key4" => "Ultimate",
 );
 
 $churrasco= array(
	 "key1" => "Carvão",
	 "key2" => "Filé Bovino",
	 "key3" => "Sal",
	 "key4" => "O resto o professor  banca",
 );
 
 $computador= array(
	 "memoria" => "4 - GB DDR3",
	 "Disco Rigido" => "1 TB",
	 "Placa de Video" => "1 GB ATI Discrete",
	 "Processador" => "Core I5",
	 "Sistema Operacional" => "Fedora",
 );
 echo "<p>| Empresas: |</p>
 <ul>";
 
 foreach($empresas as $key=>$row){
	 echo "<li>".$row."</li>";
 }
 echo "</ul>";
 
 echo "<p>| Churrasco: |</p>
 <ul>";
 
 foreach($churrasco as $key=>$row){
	 echo "<li>".$row."</li>";
 }
 echo "</ul>";
 
 echo "<p>| Computador: |</p>
 <ul>";
 
 foreach($computador as $key=>$row){
	 echo "<li>".$row."</li>";
 }
 echo "</ul>";
 echo "<p>| VAR_DUMP: |</p>";
 "<pre>".var_dump($computador)."</pre>";
 "<pre>".var_dump($churrasco)."</pre>";
 "<pre>".var_dump($empresas)."</pre>";
  echo "<p>| PRINT_R |</p>";
 "<pre>".print_r($empresas)."</pre>";
 "<pre>".print_r($churrasco)."</pre>";
 "<pre>".print_r($computador)."</pre>";

 ?>
<?php
extract($_POST);
$refFile = fopen("Dados/ $id.txt", 'a+');


$dado = "ID: $id \r\n Nome: $nome \r\n Cargo: $cargo \r\n Salário: $salario \r\n Dependentes: $dependentes";

$idarquivos = "$id.txt";


fwrite($refFile, $dado);
$arquivo = 'Dados/';
$cleiton = scandir($arquivo);

foreach($cleiton as $idsfeios){
    echo "<a href=\"readInfo.php?id=$idsfeios\">Ids: $idsfeios<br>";
}

array_shift($cleiton);
array_shift($cleiton);
fclose($refFile);

// Validar formulario

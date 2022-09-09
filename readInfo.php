<?php
$id =$_GET['id'];

$texto = file("Dados/$id");

foreach($texto as $idsfeios){
    echo "$idsfeios <br>";
}
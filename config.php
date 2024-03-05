<?php


$dbHost = 'LocalHost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formularioanu';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

if($conexao->connect_errno){

    echo"Erro";
}else{
    echo"Succesfull Conection";
}

?>
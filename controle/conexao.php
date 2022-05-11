<?php

$servidor="localhost";
$usuario="root";
$senha="";
$dbname="projeto";

$conexao=mysqli_connct(servidor, $usuario, $senha, $dbname)
if(!$conexao){
     die("houve um erro :".mysqli_connect_error());

  }
?> 
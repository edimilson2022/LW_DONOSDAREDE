<?php

     $hostname="localhost";
     $bancodedados="projeto";
     $usuario="root";
     $senha="";

     $mysql= new mysqli($hostname, $usuario, $senha, $bancodedados);
     if($mysql->connect_errno){
         echo"falha ao connectar: (" . $mysqli ->connect_errno . ")" . $mysqli->connect_error;
     }else
      echo"conectado!";
 ?>

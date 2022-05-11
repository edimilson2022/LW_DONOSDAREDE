<?php

     $hostname="localhost";
     $bancodedados="projeto";
     $usuario="root";
     $senha="";

     $mysqli= new mysqli_($hostnama, $usuario, $senha, $bancodedados);
     if(mysqli->connect_errno){
         echo"falha ao connectar: (" . $mysqli ->connect_errno . ")" . $mysqli->connect_error;
}else
      echo"conectado!";
 ?>
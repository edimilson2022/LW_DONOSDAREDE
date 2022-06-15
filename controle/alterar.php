<?php

    if(!empty($_GET['id']))
    {
        $pdo = require 'conexao.php';

        $id = $_GET['id'];

        $sqlSelect = "alterar FROM usuario WHERE id=$id";

        $pdo->query($sqlSelect);

        echo 'alterado';
    }
   
   
?>
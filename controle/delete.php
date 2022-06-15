<?php

    if(!empty($_GET['id']))
    {
        $pdo = require 'conexao.php';

        $id = $_GET['id'];

        $sqlSelect = "delete FROM usuario WHERE id=$id";

        $pdo->query($sqlSelect);

        echo 'deletado';

        // foreach($result)
        // {
        //     $sqlDelete = "DELETE FROM usuario WHERE id=$id";
        //     echo 'deletado';
        //     $resultDelete = $conexao->query($sqlDelete);
        // }
    }
    // header('Location: sistema.php');
   
?>
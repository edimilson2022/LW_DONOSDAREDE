<?php
    // isset -> serve para saber se uma variável está definida
    include_once('../controle/conexao.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];   

        $sqlUpdate = "UPDATE usuario
        SET nome='$nome',email ='$email',senha='$senha',
        WHERE id=$id";
        $result = $conexao->query($sqlUpdate);
        print_r($result);
    }
    header('Location: sistema.php');

?>
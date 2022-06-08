<!DOCTYPE html>
<html>

<head>
     <meta charset="UTF-8" />
     <title>Página Inicial</title>
     <link rel="stylesheet" href="css/style.css">
</head>

<body class="indice">
     <h1>LOJA</h1>
     <br></br>

     <div class="content">
          <div id="menu">
               <nav>
                    <div class="link">
                         <a class="btn btn-outline-danger" href="./page/cadUsuario.php" role="button1">Cadastro </a>
                         <a class="btn btn-primary" href="./page/login.php" role="button1">Login</a>
                    </div>
               </nav>
          </div>
     </div>
     <?php
          require("conexao.php");

          $sql = "SELECT * FROM produtos";
          $qr = mysql_query($sql) or die(mysql_error());
          while($ln = mysql_fetch_assoc($qr)){
             echo '
<h2>'.$ln['nome'].'</h2>

';
             echo 'Preço : R$ '.number_format($ln['preco'], 2, ',', '.').'
';
             echo '<img src="image/'.$ln['imagem'].'" />
';
             echo '<a href="carrinho.php?acao=add&id='.$ln['id'].'">Comprar</a>';
             echo '
<hr />

';
          }
    ?>

</body>
</html>
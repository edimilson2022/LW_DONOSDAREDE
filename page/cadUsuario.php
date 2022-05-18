<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <link rel="stylesheet" href="../css/style.css">
  <title>Document</title>
</head>

<body class="indice">
  <div class="container">
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <div class="content">
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="../controle/controleUsuario.php">
          <h1>Cadastro</h1>
          <p>
            <label for="nome_cad">Seu nome</label>
            <input id="nome" name="nome" required="required" type="text" />
          </p>
          <p>
            <label for="email_cad">Seu e-mail</label>
            <input id="email" name="email" required="required" type="email" />
          </p>
          <p>
            <label for="senha_cad">Sua senha</label>
            <input id="senha" name="senha" required="required" type="password" />
          </p>
          <p>
            <input type="submit" value="Cadastrar" name="entrar" />
          </p>
          <p class="link">
            <a href="./login.php"> Ir para Login </a>
          </p>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/style.css">
  <title>Cadastro de usuário</title>
</head>

<body>

  <body class="indice">
    <div class="container">
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>
      <a class="links" id="paraprodutos"></a>
      <a class="links" id=""></a>
      <div class="content">
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="login">
          <form method="post" action="../controle/controleUsuario.php">
            <h1>FAÇA O SEU CADASTRO</h1>
            <p>
              <label for="nome_login">Nome</label>
              <input id="nome_login" name="nome" required="required" type="text" />
            </p>
            <!-- <br></br>
            <label for="email_login">Sobrenome</label>
            <input id="email" name="email" required="required" type="text" />
            </p> -->
            <p>
            <label for="email_login">E-mail</label>
            <input id="email" name="email" required="required" type="text" />
            </p>
            <p>
              <label for="senha_login">senha</label>
              <input id="senha" name="senha" required="required" type="password" />
            </p>
            <p>
              <input type="checkbox" name="manterlogado" id="manterlogado" value="logar" />
              <label for="manterlogado">Manter-me logado</label>
            </p>
            <p>
              <input type="submit" value="Cadastrar" name="cadastrar" />
            </p>
            <p class="link">
              <a href="./login.php">login</a>
              <a href="../index.php">Ínicio</a>
            </p>
          </form>
        </div>
        </form>
      </div>
    </div>
    </div>
  </body>
</body>

</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Página de Login</title>
<br></br>
<br></br>
<link rel="stylesheet" href="../css/style.css">
</head>
<body class="indice">
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    <div class="content">      
      <!--FORMULÁRIO DE LOGIN-->
      <div id="login">
        <form method="post" action=""> 
          <h1>Login</h1> 
          <p> 
            <label for="email_login">Seu e-mail</label>
            <input id="email_login" name="email_login" required="required" type="text" />
          </p> 
          <p> 
            <label for="senha_login">Sua senha</label>
            <input id="senha_login" name="senha_login" required="required" type="password"  /> 
          </p>
          <p> 
            <input type="checkbox" name="manterlogado" id="manterlogado" value="" /> 
            <label for="manterlogado">Manter-me logado</label>
          </p>
          <p> 
            <input type="submit" value="Logar" /> 
          </p>
          <p class="link">
            <a href="./cadUsuario.php">Cadastre-se</a>
            <a href="../index.php">Ínicio</a>
          </p>
        </form>
      </div>
        </form>
      </div>
    </div>
  </div> 
</body>
</html>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" href="../css/style.css">
<title>Document</title>
</head>
<body class="indice">
  <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>
      <div class="content">      
        <!--FORMULÁRIO DE CADASTRO-->
        <div id="cadastro">
          <form method="post" action=""> 
            <h1>Cadastro</h1> 
            <p> 
              <label for="nome_cad">Seu nome</label>
              <input id="nome_cad" name="nome_cad" required="required" type="text"  />
            </p>  
            <p> 
              <label for="email_cad">Seu e-mail</label>
              <input id="email_cad" name="email_cad" required="required" type="email" /> 
            </p>
            <p> 
              <label for="senha_cad">Sua senha</label>
              <input id="senha_cad" name="senha_cad" required="required" type="password" />
            </p>
            <p> 
              <input type="submit" value="Cadastrar"/> 
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

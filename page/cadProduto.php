<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Cadastron de Produtos</title>
<br></br>
<br></br>
<link rel="stylesheet" href="../css/style.css">
</head>
<body class="indice">
  <div class="container" >
      <a class="links" id="paracadastro"></a>
      <a class="links" id="paralogin"></a>
      <div class="content">      
        <!--FORMULÁRIO DE CADASTRO DE PRODUTOS-->
        <div id="cadastro">
          <form method="post" action=""> 
            <h1>produtos</h1> 
            <p> 
              <label for="nome_cad">Seu nome</label>
              <input id="nome_cad" name="nome_cad" required="required" type="text" />
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
              <a href="../index.php">Ínicio</a>
            </p>
          </form>
        </div>
      </div>
    </div> 
</body>
</html>

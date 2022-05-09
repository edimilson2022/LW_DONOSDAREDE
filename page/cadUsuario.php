<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<<<<<<< HEAD
<title>Document</title>
=======
<title>Cadastron de Usuário</title>
<link rel="stylesheet" href="../css/style.css">
>>>>>>> 3d56c77fa577f266a0c2cc498253b955c4097cd1
</head>
<<<<<<< HEAD
<body>
<div class="container" >
    <a class="links" id="paracadastro"></a>
    <a class="links" id="paralogin"></a>
    
    <div class="content">      
      
      <!--FORMULÁRIO DE CADASTRO-->
      <div id="cadastro">
        <form method="post" action="../controle/controleUsuario.php"> 
          <h1>Cadastro</h1> 
          <p> 
            <label for="nome_cad">Seu nome</label>
            <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
          </p>
          
          <p> 
            <label for="email_cad">Seu e-mail</label>
            <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
          </p>
          
          <p> 
            <label for="senha_cad">Sua senha</label>
            <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
          </p>
          
          <p> 
            <input type="submit" value="Cadastrar"/> 
          </p>
          
          <p class="link">  
            Já tem conta?
            <a href="#paralogin"> Ir para Login </a>
          </p>
         
        </form>
      </div>
    </div>
  </div> 

=======
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
              <input id="nome_cad" name="nome_cad" required="required" type="text" placeholder="Luiz Augusto" />
            </p>  
            <p> 
              <label for="email_cad">Seu e-mail</label>
              <input id="email_cad" name="email_cad" required="required" type="email" placeholder="contato@htmlecsspro.com"/> 
            </p>
            <p> 
              <label for="senha_cad">Sua senha</label>
              <input id="senha_cad" name="senha_cad" required="required" type="password" placeholder="1234"/>
            </p>
            <p> 
              <input type="submit" value="Cadastrar"/> 
            </p>
            <p class="link">  
              Já tem conta?
              <a href="./login.php"> Ir para Login </a>
            </p>
          </form>
        </div>
      </div>
    </div> 
>>>>>>> de289c61ff2a443930842a2974417a66f3c5f0ec
</body>
</html>

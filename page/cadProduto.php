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
        </div>
        
        <form  method="post"  action="../controle/controleProduto.php" enctype="multipart/form-data">
              <label>Nome</label> 
              <input type="text" name="nome">
              <label>Quantidade</label> 
              <input type="text" name="quantidade">
              <label>preço</label> 
              <input type="text" name="preco">
              <label>Imagem</label> 
              <input type="file" name="arquivo"/>
              <input type="submit" value="Cadastrar" name="cadastrar">
        </form>

</body>
</html>

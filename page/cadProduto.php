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
        
        <form  method="POST"  action="processa.php" enctype="multipart/form-data">
              <label>Nome:</label> 
              <input type="text" name="nome"><br><br>
              <label>Imagem:</label> 
              <input type="file" name="arquivo"/>
              <input type="submit" value="Cadastrar">

        </form>
</body>
</html>

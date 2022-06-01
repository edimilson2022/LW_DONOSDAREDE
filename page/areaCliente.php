<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
  
    <title>Área do Cliente</title>

    
    
</head>
<body> 
  <header>
<h1 class="titulo">shirt store</h1>
  </header>


<div class="produtos"> 
  <div class="produto">
<div class="imagem">
 <img src="https://cdn.awsli.com.br/300x300/1861/1861887/produto/110891414/87f6989a5a.jpg" >
 <div class="capa">
   <p>129,90$</p>
   
   <a class="btn btn-dark" href="paginadecompra.php" role="button" type="button" style="background-color:black; border-color:red; color:white">COMPRAR</a>
  
 </div>
</div>


 <div class="imagem">
 <img src="https://cdn.awsli.com.br/300x300/1973/1973315/produto/117528444/d6a7684a60.jpg" >
 <div class="capa">
   <p>159,90$</p>
   <a class="btn btn-dark" href="paginadecompra.php" role="button" type="button" style="background-color:black; border-color:red; color:white">COMPRAR</a>

 </div>
 </div>
 
<div class="imagem">
 <img src="https://www.cimentoverdedobrasil.com.br/wp-content/uploads/2016/02/camisa-do-flamengo-ii-s-no-2016-adidas-masculina-img-300x300.jpg" >
 <div class="capa">
   <p>89,90</p>
   <a class="btn btn-dark" href="paginadecompra.php" role="button" type="button" style="background-color:black; border-color:red; color:white">COMPRAR</a>
   

 </div>
</div>
</div>


<div class="imagem">
  <div class="produto">
 <img src="https://cdn.awsli.com.br/300x300/1973/1973315/produto/117528444/d6a7684a60.jpg" >
 <div class="capa">
   <p>159,90$</p>
   <a class="btn btn-dark" href="paginadecompra.php" role="button" type="button" style="background-color:black; border-color:red; color:white">COMPRAR</a>

 </div>
 
 </div>

 <div class="imagem">
 <img src="https://cdn.awsli.com.br/300x300/1973/1973315/produto/117528444/d6a7684a60.jpg" >
 <div class="capa">
   <p>159,90$</p>
   <a class="btn btn-dark" href="paginadecompra.php" role="button" type="button" style="background-color:black; border-color:red; color:white">COMPRAR</a>

 </div>
 
 </div>

 <div class="imagem">
 <img src="https://cdn.awsli.com.br/300x300/1973/1973315/produto/117528444/d6a7684a60.jpg" >
 <div class="capa">
   
   <p> Á Vista 159,90$ </p>
   <p> 3x de 53,15</p>
   <a class="btn btn-dark" href="paginadecompra.php" role="button" type="button" style="background-color:#8a0808dc; border-color:#8a0808dc; color:#8a0808dc">COMPRAR</a>

 </div>
 
 </div> 
 </div>

</div>
<style type="text/css">
body{
  overflow-x: hidden;
}

.imagem {
  position: relative;
  display: flex;
  height: 300px;
  width: 300px;
  background-size: cover;
  margin-top: 100px;
}

.produto{
display: flex;
margin-right: 60px;
justify-content: space-around;
}

.produtos{
  padding-bottom: 100px;
  height: 100px;
  display: grid;
  grid-column: 3fr;
  justify-content: space-around;
  
}

img{
  display: flex;
  width: 300px;
  background-size: cover;
}
.capa {
  display: none;
}

.imagem:hover .capa {
  display: block;
}

.capa {

  position: absolute;
  top: 0;
}

</style> 
</body>
</html>

</body>
</html>
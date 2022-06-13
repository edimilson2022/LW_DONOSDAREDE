<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>Área do Administrador</title>
</head>
<body>
    <div class="">
        <div class="">
        <header>
            <div class="link">
                Área Admin
            </div>
        </header>

        <div>
            <?php
            include 'listaUsuario.php';
            ?>
        </div>
        </div>
    </div>
    
</body>
</html>
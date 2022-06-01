<div class="container" style="border: 1px solid black">
    <table class="content">
        <thead class="link">
            <td class="">ID</td>
            <td>NOME</td>
            <td>EMAIL</td>
            <td>SENHA</td>
            <td><button onclick="">X</button></td>
        </thead>
        <tbody>
            <?php
            $pdo = require '../controle/conexao.php';

            $sql = "select * from usuario";

            $resultado = $pdo->query($sql);
            foreach ($resultado as $key => $valor) {
            ?>
                <tr>
                    <td><?php echo $valor['id']; ?></td>
                    <td><?php echo $valor['nome']; ?></td>
                    <td><?php echo $valor['email']; ?></td>
                    <td><?php echo $valor['senha']; ?></td>
                </tr>

            <?php
            }
            ?>

        </tbody>
    </table>
</div>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgenciaDeTurismo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <div class="menu">
            <a href="index.php"> AgenciaDeTurismo</a>
            <a href="cadastroViagem.php">Cadastro</a>
            <a href="lendoDados.php">Viagem</a>
            <a href="editarViagem.php">Gerenciar</a>
        </div>

        <div class="card-custom">
            <h3>Viagens Cadastradas</h3>

            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Destino</th>
                            <th>Período</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require("conexao.php");

                        $consulta = "SELECT * FROM viagem";
                        $viagem = mysqli_query($conexao, $consulta);

                        while ($array = mysqli_fetch_array($viagem)) {
                            echo "<tr>";
                            echo "<td>" . $array['idViagem'] . "</td>";
                            echo "<td>" . $array['destino'] . "</td>";
                            echo "<td>" . $array['periodo'] . "</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>
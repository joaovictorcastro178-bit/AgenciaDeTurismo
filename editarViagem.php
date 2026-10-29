<?php
require("conexao.php");

if (isset($_POST['atualizar'])) {
    $idViagem = $_POST['idViagem'];
    $nome = $_POST['nome'];
    $curso = $_POST['curso'];
    $email = $_POST['email'];
    $destino = $_POST['destino'];
    $dataIda = $_POST['data_ida'];
    $dataVolta = $_POST['data_volta'];
    $acompanhantes  = $_POST['acompanhantes'];
    $atualizar = "UPDATE viagem SET nome = '$nome', curso = '$curso', email = '$email', destino = '$destino', dataIda = '$dataIda', dataVolta = '$dataVolta', acompanhantes = '$acompanhantes' WHERE idViagem = '$idViagem'";
    
    if (mysqli_query($conexao, $atualizar)) {
        echo "<script>alert('Informações atualizadas com sucesso'); window.location='editarViagem.php';</script>";
        exit();
    } else {
        echo "Erro ao atualizar" . mysqli_error($conexao);
    }
}

$editaViagem = null;
if (isset($_GET['editar'])) {
    $idEditar = $_GET['editar'];
    $resultado = mysqli_query($conexao, "SELECT * FROM viagem WHERE idViagem = $idEditar");
    $editaViagem = mysqli_fetch_assoc($resultado);
}

$viagens = mysqli_query($conexao, "SELECT * FROM viagem");

if (isset($_GET['apagar'])) {
    $idViagem = $_GET['apagar'];
    $deletar = "DELETE FROM viagem WHERE idViagem = $idViagem";
    if (mysqli_query($conexao, $deletar)) {
        echo "<script>alert('Informações excluidas com sucesso!'); window.location='atualizarCurso.php';</script>";
        exit();
    } else {
        echo "Erro ao deletar." . mysqli_error($conexao);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Viagens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="container my-4">
        <div class="menu">
            <a href="index.php"> Início</a>
            <a href="cadastro.php">Cadastro</a>
            <a href="lendoDados.php">Viagens</a>
            <a href="atualizarCurso.php">Gerenciar</a>
        </div>

        <div class="card-custom">
            <h3>Lista de Viagens</h3>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>IdViagem</th>
                            <th>Nome</th>
                            <th>Viagem</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // Recarrega pra listar atualizado - seu $viagens já foi usado? vamos garantir
                        $viagens = mysqli_query($conexao, "SELECT * FROM viagem");
                        while ($viagem = mysqli_fetch_assoc($viagens   )): ?>
                            <tr>
                                <td><?= $viagem['idViagem'] ?></td>
                                <td><?= $viagem['nome'] ?></td>
                                <td><?= $viagem['Viagem'] ?></td>
                                <td><a href="?editar=<?= $viagem["idViagem"] ?>" class="btn btn-sm btn-primary">Editar</a>
                                </td>
                                <td><a href="?apagar=<?= $viagem["idViagem"] ?>" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Apagar?')">Apagar</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <?php if ($editaViagem): ?>
                <hr>
                <h3>Editar Viagem</h3>
                <form method="POST" class="mt-3">
                    <input type="hidden" name="idViagem" value="<?= $editaViagem['idViagem'] ?>">
                    <div class="mb-3"><label>Nome:</label><input type="text" name="nome" value="<?= $editaViagem['nome'] ?>"
                            class="form-control"></div>
                    <div class="mb-3"><label>Viagem:</label><input type="text" name="viagem"
                            value="<?= $editaViagem['viagem'] ?>" class="form-control"></div>
                    <button type="submit" name="atualizar" class="btn btn-primary">Atualizar</button>
                    <a href="atualizarCurso.php" class="btn btn-secondary">Cancelar</a>
                </form>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
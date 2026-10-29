<?php
require("conexao.php");

// ----- ATUALIZAR (salva as alterações no banco) -----
if (isset($_POST['atualizar'])) {
    $idViagem = intval($_POST['idViagem']);
    $destino = $_POST['destino'];
    $dataIda = $_POST['data_ida'];
    $dataVolta = $_POST['data_volta'];

    if ($dataVolta < $dataIda) {
        echo "<script>alert('A data de volta não pode ser antes da ida!'); window.location='editarViagem.php?editar=$idViagem';</script>";
        exit();
    }

    $atualizar = "UPDATE viagem SET destino = ?, dataIda = ?, dataVolta = ? WHERE idViagem = ?";
    $stmt = mysqli_prepare($conexao, $atualizar);
    mysqli_stmt_bind_param($stmt, "sssi", $destino, $dataIda, $dataVolta, $idViagem);

    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Viagem atualizada com sucesso!'); window.location='editarViagem.php';</script>";
        exit();
    } else {
        echo "Erro ao atualizar" . mysqli_error($conexao);
    }
}

// ----- EDITAR (busca a viagem para mostrar no formulário) -----
$editaViagem = null;
if (isset($_GET['editar'])) {
    $idEditar = intval($_GET['editar']);
    $resultado = mysqli_query($conexao, "SELECT * FROM viagem WHERE idViagem = $idEditar");
    $editaViagem = mysqli_fetch_assoc($resultado);
}

// ----- CANCELAR (apaga a viagem) -----
if (isset($_GET['apagar'])) {
    $idViagem = intval($_GET['apagar']);
    $deletar = "DELETE FROM viagem WHERE idViagem = $idViagem";
    if (mysqli_query($conexao, $deletar)) {
        echo "<script>alert('Viagem cancelada com sucesso!'); window.location='editarViagem.php';</script>";
        exit();
    } else {
        echo "Erro ao cancelar." . mysqli_error($conexao);
    }
}

// ----- LISTA (vem depois, então já aparece atualizada) -----
$viagens = mysqli_query($conexao, "SELECT * FROM viagem");
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
            <a href="index.php">Início</a>
            <a href="cadastroViagem.php">Cadastro</a>
            <a href="lendoDados.php">Viagens</a>
            <a href="editarViagem.php">Gerenciar</a>
        </div>

        <div class="card-custom mt-4">
            <h3>Gerenciar Viagens</h3>
            <div class="table-responsive mt-3">
                <table class="table table-striped table-hover align-middle">
                    <thead class="table-primary">
                        <tr>
                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Data de ida</th>
                            <th>Data de volta</th>
                            <th>Destino</th>
                            <th colspan="2">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($viagem = mysqli_fetch_assoc($viagens)): ?>
                            <tr>
                                <td><?= $viagem['idViagem'] ?></td>
                                <td><?= htmlspecialchars($viagem['nome']) ?></td>
                                <td><?= $viagem['dataIda'] ?></td>
                                <td><?= $viagem['dataVolta'] ?></td>
                                <td><?= htmlspecialchars($viagem['destino']) ?></td>
                                <td><a href="?editar=<?= $viagem["idViagem"] ?>" class="btn btn-sm btn-primary">Alterar</a></td>
                                <td><a href="?apagar=<?= $viagem["idViagem"] ?>" class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Cancelar esta viagem?')">Cancelar</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>

            <?php if ($editaViagem): ?>
                <hr>
                <h3>Alterar Viagem do cliente <?= htmlspecialchars($editaViagem['nome']) ?></h3>
                <form method="POST" class="mt-3">
                    <input type="hidden" name="idViagem" value="<?= $editaViagem['idViagem'] ?>">
                    <div class="mb-3"><label>Destino:</label><input type="text" name="destino"
                            value="<?= htmlspecialchars($editaViagem['destino']) ?>" class="form-control" required></div>
                    <div class="mb-3"><label>Data de ida:</label><input type="date" name="data_ida"
                            value="<?= $editaViagem['dataIda'] ?>" class="form-control" required></div>
                    <div class="mb-3"><label>Data de volta:</label><input type="date" name="data_volta"
                            value="<?= $editaViagem['dataVolta'] ?>" class="form-control" required></div>
                    <button type="submit" name="atualizar" class="btn btn-custom">Atualizar</button>
                    <a href="editarViagem.php" class="btn btn-secondary">Cancelar</a>
                </form>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>
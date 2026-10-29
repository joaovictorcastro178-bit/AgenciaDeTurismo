<?php
require_once "conexao.php";

$mensagem = "";
$tipoMensagem = "danger";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = trim($_POST["nome"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $destino = trim($_POST["destino"] ?? "");
    $data_ida = $_POST["data_ida"] ?? "";
    $data_volta = $_POST["data_volta"] ?? "";
    $acompanhantes = filter_var(
        $_POST["acompanhantes"] ?? 0,
        FILTER_VALIDATE_INT
    );

    if (
        $nome === "" ||
        !filter_var($email, FILTER_VALIDATE_EMAIL) ||
        $destino === "" ||
        $data_ida === "" ||
        $data_volta === "" ||
        $data_volta < $data_ida ||
        $acompanhantes === false ||
        $acompanhantes < 0
    ) {
        $mensagem = "Verifique os dados preenchidos.";
    } else {
        $sql = "INSERT INTO viagem
                (nome, email, destino, dataIda, dataVolta, acompanhamentos)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param(
                $stmt,
                "sssssi",
                $nome,
                $email,
                $destino,
                $data_ida,
                $data_volta,
                $acompanhantes
            );

            if (mysqli_stmt_execute($stmt)) {
                $mensagem = "Viagem cadastrada com sucesso!";
                $tipoMensagem = "success";
            } else {
                $mensagem = "Erro MySQL (" .
                    mysqli_stmt_errno($stmt) . "): " .
                    mysqli_stmt_error($stmt);
            }

            mysqli_stmt_close($stmt);
        } else {
            $mensagem = "Erro ao preparar SQL: " . mysqli_error($conexao);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro para Viagem</title>
    <!-- Importando o Bootstrap v5.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* Definindo as cores solicitadas: Azul Escuro e Amarelo Mostarda */
        body {
            background-color: #0a1a33;
            /* Azul escuro de fundo */
            color: #ffffff;
        }

        .card-custom {
            background-color: #1b263b;
            /* Azul escuro para o container */
            border: 1px solid #ff9d1c;
            /* Borda amarelo mostarda */
        }

        .btn-custom {
            background-color: #ff9d1c;
            /* Botão amarelo mostarda */
            color: #0a1a33;
            font-weight: bold;
        }

        .btn-custom:hover {
            background-color: #ffd53e;
            color: #0a1a33;
        }
    </style>
</head>

<body>
    <header>
        PÁGINA INSDISPONÍVEL AINDA


        <a href="index.php" class="btn btn-custom rond"> Voltar a pagina inicial</a>


    </header>

    <!-- Container principal centralizado -->
    <main class="container min-vh-100 d-flex justify-content-center align-items-center ">
        <section>

            <div class="card card-custom p-4 shadow-lg w-100" style="max-width: 25rem;">

                <!-- Título do formulário -->
                <?php if ($mensagem !== ""): ?>
                    <div class="alert alert-<?= $tipoMensagem ?>" role="alert">
                        <?= htmlspecialchars($mensagem, ENT_QUOTES, "UTF-8") ?>
                    </div>
                <?php endif; ?>

                <h2 class="text-center mb-4 text-warning">Cadastro para Viagem</h2>

                <!-- Início do formulário -->
                <form action="#" method="POST" class="text-warning">

                    <!-- Campo: Nome Completo -->
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome Completo:</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <!-- Campo: E-mail -->
                    <div class="mb-3">
                        <label for="email" class="form-label">E-mail:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <!-- Campo: Destino da Viagem -->
                    <div class="mb-3">
                        <label for="destino" class="form-label">Destino da Viagem:</label>
                        <input type="text" class="form-control" id="destino" name="destino" required>
                    </div>
                    <!-- Campo: Data de Ida -->
                    <div class="mb-3">
                        <label for="data-ida" class="form-label">Data de Ida:</label>
                        <input type="date" class="form-control" id="data-ida" name="data_ida" required>
                    </div>
                    <!-- Campo: Data de Volta -->
                    <div class="mb-3">
                        <label for="data-volta" class="form-label">Data de Volta:</label>
                        <input type="date" class="form-control" id="data-volta" name="data_volta" required>
                    </div>
                    <!-- Campo: Número de Acompanhantes -->
                    <div class="mb-3">
                        <label for="acompanhantes" class="form-label">Número de Acompanhantes:</label>
                        <input type="number" class="form-control" id="acompanhantes" name="acompanhantes" min="0"
                            value="0">
                    </div>
                    <!-- Botão de Envio -->
                    <button type="submit" class="btn btn-custom w-100">Cadastrar Viagem</button>
                </form>
            </div>
        </section>

        <!-- Modal de Indisponibilidade -->
        <div class="modal fade " id="indisponivelModal" tabindex="-1" aria-labelledby="indisponivelModalLabel"
            aria-hidden="true" data-bs-backdrop="static">
            <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content modal-content-custom bg-dark border-warning-subtle ">
                    <!-- Cabeçalho do Modal -->
                    <div class="modal-header border-bottom border-warning">
                        <h3 class="modal-title text-warning" id="indisponivelModalLabel">ATENÇÃO CABEÇÃO</h3>
                    </div>
                    <!-- Corpo do Modal -->
                    <div class="modal-body">
                        <div><img src="https://www.marmorariasul.com.br/images/pagina_construcao.JPG"
                                alt="PAGINA EM CONSTRUÇÃO! SOME DAQUI" class=" w-14rem"></div>
                        A página está indisponível no momento. Por favor aguarde terminar essa bomba, tente novamente
                        mais tarde.
                    </div>
                    <!-- Rodapé do Modal -->
                    <div class="modal-footer border-top border-warning">
                        <button type="button" class="btn btn-custom w-100" data-bs-dismiss="modal">Entendido</button>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <!-- Script para abrir o modal automaticamente ao carregar a página -->
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var meuModal = new bootstrap.Modal(document.getElementById('indisponivelModal'));
            meuModal.show();
        });
    </script>

    <!-- Importando o Bootstrap v5.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
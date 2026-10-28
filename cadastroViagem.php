<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">

    <!-- Link Icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.2/font/bootstrap-icons.min.css">

    <title>Cadastro |Viagem </title>
</head>

<body class="bg-secondary">
    

    <img src="https://www.marmorariasul.com.br/images/pagina_construcao.JPG" alt="PAGINA EM CONSTRUÇÃO! SOME DAQUI" class=" w-14rem">

    <main class="container min-vh-100 d-flex justify-content-center align-items-center">


        <div class="card shadow w-100" style="max-width:450px;">
            <div class="card-body p-4">
                <h2 class="text-primary mb-4">
                    Criar Conta
                </h2>
                <form action="" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Nome</label>
                        <input type="text" name="nome" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">E-mail</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Senha</label>
                        <input type="password" name="senha" class="form-control" minlength="6" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Confirmar Senha
                        </label>
                        <input type="password" name="confirmar_senha" class="form-control" minlength="6" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">
                        Criar Conta
                    </button>

                </form>

                <a href="login.php" class="d-block mt-3">
                    Já possui conta? Fazer login
                </a>

            </div>

        </div>

    </main>


    <script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL"
        crossorigin="anonymous"></script>
</body>

</html>
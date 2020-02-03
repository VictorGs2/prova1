<?php
// include("config.php");

$id = filter_input(INPUT_GET, "id");
$nome = filter_input(INPUT_GET, "nome");
$email = filter_input(INPUT_GET, "email");
$cpf = filter_input(INPUT_GET, "cpf");
$cep = filter_input(INPUT_GET, "cep");
$cidade = filter_input(INPUT_GET, "cidade");
$endereco = filter_input(INPUT_GET, "endereco");
$numero = filter_input(INPUT_GET, "numero");
$bairro = filter_input(INPUT_GET, "bairro");
$uf = filter_input(INPUT_GET, "uf");
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Script Viacep -->
    <script type="text/javascript" src="viacep.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js"></script>
    <script>
        $(document).ready(function() {
            var $cpf = $("#cpf");
            $cpf.mask('000.000.000-00', {
                reverse: true
            });
        });
    </script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
        <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Minha Empresa</a>
        <ul class="navbar-nav px-3">
            <li class="nav-item text-nowrap">
                <a class="nav-link" href="#">Sair</a>
            </li>
        </ul>
    </nav>
    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="/Prova1/index.php">
                                <span data-feather="home"></span>
                                Dashboard <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="clientes.php">
                                <span data-feather="file"></span>
                                Cliente
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <form action="edit.php">
                    <h1 class="h1">Alterar Dados</h1>
                    <div class="row">
                        <div class="col">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input class="form-control" type="text" name="" id="id" placeholder="ID" readonly>
                            <input class="form-control" type="text" name="nome" placeholder="Nome" value="<?php echo $nome ?>">
                            <input class="form-control" type="text" name="email" placeholder="E-mail" value="<?php echo $email ?>">
                            <input class="form-control" type="text" name="cpf" id="cpf" placeholder="CPF" value="<?php echo $cpf ?>">
                            <input class="form-control" type="text" name="cep" id="cep" placeholder="CEP" value="<?php echo $cep ?>" maxlength="9" onblur="pesquisacep(this.value);">
                        </div>
                        <div class="col">
                            <input class="form-control" type="text" name="endereco" id="rua" placeholder="Endereço" value="<?php echo $endereco ?>">
                            <input class="form-control" type="text" name="numero" id="numero" placeholder="Número" value="<?php echo $numero ?>">
                            <input class="form-control" type="text" name="bairro" id="bairro" placeholder="Bairro" value="<?php echo $bairro ?>">
                            <input class="form-control" type="text" name="cidade" id="cidade" placeholder="Cidade" value="<?php echo $cidade ?>">
                            <input class="form-control" type="text" name="uf" id="uf" placeholder="UF" value="<?php echo $uf ?>">
                        </div>
                    </div>
                    <input class="form-control btn btn-primary" type="submit" value="Confirmar Alteração">
                </form>
            </main>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>
        window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="/docs/4.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
    <script src="dashboard.js"></script>
</body>

</html>
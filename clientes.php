<?php include("config.php");

$data = "SELECT id, nome, email, endereco, cpf, cep, cidade, endereco, numero, bairro, uf FROM cliente";
$result = $mysqli->query($data);

// if (mysqli_query($mysqli, $data)) {
//     $lastId =  mysqli_insert_id($mysqli);
//     echo "Insert successful. Latest ID is: " . $lastId;
// }

?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
                            <a class="nav-link" href="#">
                                <span data-feather="file"></span>
                                Cliente
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nome</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Endereço</th>
                            <th scope="col">CPF</th>
                            <th scope="col"><a id="cadastrar" href="register.php">Cadastrar +</a></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) { ?>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["nome"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["endereco"]; ?></td>
                                    <td><?php echo $row["cpf"]; ?></td>
                                    <td><a href="<?php echo "editpage.php?id=" . $row['id'] . "&nome=" . $row['nome'] . "&cpf=" . $row['cpf'] . "&cep=" . $row['cep'] . "&email=" . $row['email'] . "&cidade=" . $row['cidade'] . "&endereco=" . $row['endereco'] . "&numero=" . $row['numero'] . "&bairro=" . $row['bairro'] . "&uf=" . $row['uf'] ?>"><button type="button" class="btn btn-primary">Editar</button></a>
                                        <a href="delete.php?id= <?php echo $row["id"]; ?>"><button type="button" class="btn btn-danger">Excluir</button></a></td>
                        </tr>
                <?php }
                            } ?>
                    </tbody>
                </table>
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
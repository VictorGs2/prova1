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

$mysqli =  mysqli_connect('200.132.13.90', 'roger', 'roger', 'josevictor');

if($mysqli) {
    $query = mysqli_query($mysqli, "update cliente set nome='$nome', email='$email', cpf='$cpf', cep='$cep', cidade='$cidade', endereco='$endereco', numero='$numero', bairro='$bairro', uf='$uf' where id='$id';");
    if($query) {
        header("Location: clientes.php");
    } else {
        die("Erro: " . mysqli_error($mysqli));
    }
} else {
    die("Erro: " . mysqli_error($mysqli));
}

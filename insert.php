<?php
include("config.php");

$query = "INSERT INTO cliente (nome, endereco, numero, bairro, cidade, uf, cep, email, cpf) VALUES ('$_POST[nome]', '$_POST[endereco]', '$_POST[numero]', '$_POST[bairro]', '$_POST[cidade]', '$_POST[uf]', '$_POST[cep]', '$_POST[email]', '$_POST[cpf]')";

if (!mysqli_query($mysqli, $query)) {
    die('Error: ' . mysqli_error($mysqli));
}

if ($query) :
    header('Location: clientes.php');
endif;

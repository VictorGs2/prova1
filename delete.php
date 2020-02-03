<?php
session_start();
include("config.php");

$id = $_GET["id"];

$delete = $mysqli->prepare("DELETE  FROM cliente WHERE id='$id'");
$delete->execute();

if($delete):
    header('Location: clientes.php');
endif;
?>
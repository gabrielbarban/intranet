<?php

session_start();
include("../model/config.php");
$config = new Config();

//pegando os dados do form
$nome = $_POST['nome'];

$empresa_id = $_SESSION["empresa_id"];
$config->novo_status($nome, $empresa_id);
header('Location: ../view/status.php');

?>
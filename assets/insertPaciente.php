<?php
session_start();

include('config.php');

$nome = addslashes ($_POST['nome']);
$sobrenome = addslashes ($_POST['sobrenome']);
$nascimento = addslashes($_POST['nascimento']);
$cpf = addslashes($_POST['cpf']));
$cep = addslashes ($_POST['cep']);
$rua = addslashes ($_POST['rua']);
$numeroCasa = addslashes ($_POST['numeroCasa']);
$complemento = addslashes ($_POST['complemento']);


$stmt = $conn->prepare("INSERT INTO `paciente` (`nome`, `sobrenome`, `nascimento`, `cpf`, `cep`, `rua`, `numeroCasa`, `complemento` ) VALUES ('$nome', '$sobrenome', '$nascimento', '$cpf', '$cep', '$rua', '$numeroCasa', '$complemento');");

$stmt->execute();

$_SESSION['setPaciente'] = true;

header('Location: ../pacientes');
<?php
session_start();

include('config.php');

$fabricante = addcslashes($_POST['fabricante']);
$lote = addcslashes($_POST['lote']);
$validade = addcslashes($_POST['validade']);
$doses = addcslashes($_POST['doses']);
$intervalo = addcslashes($_POST['intervalo']);


$stmt = $conn->prepare("INSERT INTO `vacinas` (`fabricante`, `lote`, `validade`, `doses`, `intervalo`) VALUES ('$fabricante', '$lote', '$validade', '$doses', '$intervalo');");

$stmt->execute();

$_SESSION['setVacina'] = true;

header('Location: ../vacinas');
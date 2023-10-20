<?php include("./includes/conn.php");

$id = $_GET['id'];

$dados = $conn->query("SELECT * FROM hospedeiros where id = $id");
$hospedeiros = $dados->fetchAll(PDO::FETCH_ASSOC); // Meu ID
$hospedeiro = $hospedeiros[0];


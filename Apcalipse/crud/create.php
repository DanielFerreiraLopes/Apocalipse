<?php include("./includes/conn.php");



if (isset($_POST['registro'])) {

    $name = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    $sangue = $_POST['sangue'];
    $gosto_musical = $_POST['gosto_musical'];
    $esporte = $_POST['esporte'];
    $jogo = $_POST['jogo'];

    $sql = "INSERT hospedeiros (nome, idade, sexo, peso, altura, sangue, gosto_musical, esporte, jogo) 
    VALUES('$name','$idade','$sexo','$peso','$altura','$sangue','$gosto_musical','$esporte','$jogo')";

    $query = $conn->prepare($sql);
    $query->execute();
}

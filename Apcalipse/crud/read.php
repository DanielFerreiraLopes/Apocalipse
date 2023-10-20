<?php include("./includes/conn.php");

$dados = $conn->query("SELECT * FROM hospedeiros");
$hospedeiros = $dados->fetchAll(PDO::FETCH_ASSOC);

?>

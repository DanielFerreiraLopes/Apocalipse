<?php include("crud/update.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section>
<table>
        <tr>    
            <th>Nome</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Sangue</th>
            <th>Gosto Musicas</th>
            <th>Esporte</th>
            <th>Jogo Preferido</th>
            <th>Força</th>
            <th>Velocidade</th>
            <th>Inteligencia</th>
        </tr>
        <tr >
            <td><?= $hospedeiro["nome"] ?></td>
            <td><?= $hospedeiro["idade"] ?> anos</td>
            <td><?= $hospedeiro["sexo"] ?></td>
            <td><?= $hospedeiro["peso"] ?>Kg</td>
            <td><?= $hospedeiro["altura"] ?>m</td>
            <td><?= $hospedeiro["sangue"] ?></td>
            <td><?= $hospedeiro["gosto_musical"] ?></td>
            <td><?= $hospedeiro["esporte"] ?></td>
            <td><?= $hospedeiro["jogo"] ?></td>
    <?php include("includes/atributos.php"); ?>
            <td><strong><?= $forca ?></strong></td>
            <td><strong><?= $velocidade ?></strong></td>
            <td><strong><?= $inteligencia ?></strong></td>
    </tr>
</table>
</section>
    
<section>
    <img src="icon/duck.png" alt="Img pato" style="width: 150px">

    <?php include("sistema.php"); ?>

    <h3><?= $grauPerigo?></h3>
    <h3>Ponto Fraco: <?= $pontoFraco?></h3>

    </section>


</body>

</html>
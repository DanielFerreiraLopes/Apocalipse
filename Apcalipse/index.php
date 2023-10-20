<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <title>Home</title>
</head>

<body>

    <?php include("includes/layout.php");
    include("crud/read.php");

    ?>

    <table>
        <tr>
            <th>Nome</th>
            <th>Idade</th>
            <th>Sexo</th>
            <th>Peso</th>
            <th>Altura</th>
            <th>Sangue</th>
            <th>Detalhes</th>
        </tr>

        <?php foreach ($hospedeiros as $info) : ?>
            <tr>
                <td><?= $info["nome"] ?></td>
                <td><?= $info["idade"] ?></td>
                <td><?= $info["sexo"] ?></td>
                <td><?= $info["peso"] ?>Kg</td>
                <td><?= $info["altura"] ?>m</td>
                <td><?= $info["sangue"] ?></td>
                <td><a href='visualizar.php?id=<?= $info["id"] ?>'>Ver</a></td>
            </tr>
        <?php endforeach; ?>

    </table>
    <a href="registro.php">Registrar Possiveis Hospedeiros</a><br>
    
</body>

</html>
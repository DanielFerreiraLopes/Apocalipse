<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>

<body>
    <?= include("includes/layout.php") ?>

    <form action="" method="post">
        Nome<input type="text" name="nome" id="nome"><br>
        Idade<input type="number" name="idade" id="idade"><br>
        M<input type="radio" name="sexo" id="sexo" value="M"><br>
        F<input type="radio" name="sexo" id="sexo" value="F"><br>
        Peso<input type="number" name="peso" id="peso" step="0.01"><br>
        Altura<input type="number" name="altura" id="altura" step="0.01"><br>

        Sangue<select name="sangue" id="sangue">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br>

        Gosto_musical<select name="gosto_musical" id="gosto_musical">
            <option value="Pop">Pop</option>
            <option value="Rock">Rock</option>
            <option value="Pagode">Pagode</option>
            <option value="Sertanejo">Sertanejo</option>
            <option value="Rap">Hip-Hop / Rap</option>
            <option value="Funk">Funk</option>
            <option value="Metal">Metal</option>
            <option value="Eletronica">Eletronica</option>
            <option value="Outro">Outro Estilo</option>
        </select><br>

        Esporte<select name="esporte" id="esporte">
            <option value="Futebol">Futebol</option>
            <option value="Basquete">Basquete</option>
            <option value="Volei">Volei</option>
            <option value="Luta">Luta</option>
            <option value="Atletismo">Atletismo</option>
            <option value="eSports">eSports</option>
            <option value="Sedentarismo">Sedentarismo / Nada</option>
        </select><br>

        Jogo<select name="jogo" id="jogo">
            <option value="Conter-Stike">Conter-Stike</option>
            <option value="Minecraft">Minecraft</option>
            <option value="Fortnite">Fortnite</option>
            <option value="The Witcher">The Witcher</option>
            <option value="Valorant">Valorant</option>
            <option value="Assassins Creed">Assassin's Creed</option>
            <option value="World of Warcraft">World of Warcraft</option>
            <option value="FIFA">FIFA</option>
            <option value="LoL">League of Legends</option>
            <option value="Dota">Dota</option>
            <option value="Rocket League">Rocket League</option>
            <option value="Outro">Outro</option>
        </select><br>
        <button type="submit" name="registro">Registrar</button>
    </form>

    <?= include("crud/create.php") ?>
</body>

</html>
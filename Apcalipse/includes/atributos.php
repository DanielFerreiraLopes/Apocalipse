<?php
    $forca = 0;
    $velocidade = 0;
    $inteligencia = 0;

    //Idade
    if($hospedeiro["idade"] <= 8){
        $forca =$forca + 3;
        $velocidade = $velocidade + 2;
        $inteligencia = $inteligencia + 2;
    }
    if($hospedeiro["idade"] > 8 && $hospedeiro["idade"] <= 12){
        $forca = $forca + 6;
        $velocidade = $velocidade + 10;
        $inteligencia = $inteligencia + 8;
    }
    if($hospedeiro["idade"] > 12 && $hospedeiro["idade"] <= 18){
        $forca = $forca + 15;
        $velocidade = $velocidade + 15;
        $inteligencia = $inteligencia + 15;
    }
    if($hospedeiro["idade"] > 18 && $hospedeiro["idade"] <= 40){
        $forca = $forca + 20;
        $velocidade = $velocidade + 20;
        $inteligencia = $inteligencia + 25;
    }
    if($hospedeiro["idade"] > 40 && $hospedeiro["idade"] <= 60){
        $forca = $forca + 20;
        $velocidade = $velocidade + 10;
        $inteligencia = $inteligencia + 40;
    }
    if($hospedeiro["idade"] > 60){
        $forca = $forca + 8;
        $velocidade = $velocidade + 5;
        $inteligencia = $inteligencia + 42;
    }

    // Sexo
    if($hospedeiro["sexo"] == "M") {
        $forca = $forca + 8;
        $velocidade = $velocidade + 8;
    }
    else{
        $forca = $forca + 5;
        $velocidade = $velocidade + 5;
        $inteligencia = $inteligencia + 5;
    }

    //Peso
    if($hospedeiro["peso"]  <= "30") {
        $forca = $forca + 3;
    }
    if($hospedeiro["peso"]  > "30" && $hospedeiro["peso"]  <= "60") {
        $forca = $forca + 7;
    }
    if($hospedeiro["peso"]  > "60" && $hospedeiro["peso"]  <= "90") {
        $forca = $forca + 10;
    }
    if($hospedeiro["peso"]  > "90") {
        $forca = $forca + 15;
    }

    //Altura
    if($hospedeiro["altura"] <= "1.00") {
        $forca = $forca + 3;
        $velocidade = $velocidade + 3;
    }
    if($hospedeiro["altura"] > "1.00" && $hospedeiro["altura"] <= "1.50") {
        $forca = $forca + 5;
        $velocidade = $velocidade + 5;
    }
    if($hospedeiro["altura"] > "1.50" && $hospedeiro["altura"] <= "1.70") {
        $forca = $forca + 8;
        $velocidade = $velocidade + 8;
    }
    if($hospedeiro["altura"] > "1.70" && $hospedeiro["altura"] <= "1.90") {
        $forca = $forca + 10;
        $velocidade = $velocidade + 10;
    }
    if($hospedeiro["altura"] > "1.90") {
        $forca = $forca + 12;
        $velocidade = $velocidade + 12;
    }

    //IMC
    $imc = $hospedeiro["peso"] / ($hospedeiro["altura"] * $hospedeiro["altura"]);
    switch ($imc){
        case $imc <= 18.5:
            $forca = $forca - 5;
            $velocidade = $velocidade - 5;
            break;
        case $imc > 25.0 && $imc < 29.9:
            $velocidade = $velocidade - 3;
            break;
        case $imc > 30 && $imc < 35:
            $velocidade = $velocidade - 5;
            break;
        case $imc > 35:
            $velocidade = $velocidade - 10;
            break;
    } 

    //Sangue
    switch($hospedeiro["sangue"]){
        case 'A+' :
            $forca = $forca + 2;
        break;

        case 'A-' :
            $forca = $forca + 2;
        break;

        case 'B+' :
            $velocidade = $velocidade + 2;
        break;

        case 'B-' :
            $velocidade = $velocidade + 2;
        break;

        case 'AB+' :
            $forca =  $forca + 2;
            $velocidade = $velocidade + 2;
        break;

        case 'AB-' :
            $forca =  $forca + 2;
            $velocidade = $velocidade + 2;
        break;

        case 'O+' :
            $inteligencia = $inteligencia + 3;
        break;

        case 'O-' :
            $forca =  $forca + 2;
            $velocidade = $velocidade + 2;
            $inteligencia = $inteligencia + 2;
        break;
    }

    //MUSICA
    switch($hospedeiro["gosto_musical"]){
        case 'Pop' :
            $inteligencia = $inteligencia + 5;
            $forca = $forca + 1;
            $velocidade = $velocidade + 2;
        break;

        case 'Rock' :
            $forca = $forca + 7;
            $velocidade = $velocidade + 3;
        break;

        case 'Pagode' :
            $velocidade = $velocidade + 4;
            $inteligencia = $inteligencia + 4;
        break;

        case 'Sertanejo' :
            $velocidade = $velocidade + 5;
            $forca = $forca + 2;
        break;

        case 'Rap' :
            $velocidade = $velocidade + 6;
            $inteligencia = $inteligencia + 3;
        break;

        case 'Funk' :
            $forca = $forca + 5;
            $velocidade = $velocidade + 5;
        break;

        case 'Metal' :
            $forca = $forca + 10;
        break;

        case 'Eletronica' :
            $inteligencia = $inteligencia + 10;
        break;

        case 'Outro' :
            $forca = $forca + 2;
            $velocidade = $velocidade + 2;
            $inteligencia = $inteligencia + 2;
        break;
    }

     //ESPORTE
    switch($hospedeiro["esporte"]){
        case 'Futebol' :
            $inteligencia = $inteligencia + 4;
            $velocidade = $velocidade + 8;
            $forca + 8;
        break;

        case 'Basquete' :
            $inteligencia = $inteligencia + 4;
            $velocidade = $velocidade + 5;
            $forca = $forca + 10;
        break;

        case 'Volei' :
            $inteligencia = $inteligencia + 9;
            $velocidade = $velocidade + 3;
            $forca = $forca + 7;
        break;

        case 'Luta' :
            $velocidade = $velocidade + 10;
            $forca = $forca + 12;
        break;

        case 'Atletismo' :
            $velocidade = $velocidade + 12;
            $forca = $forca + 8;
        break;

        case 'eSports' :
           $inteligencia = $inteligencia + 20;
        break;

        case 'Sedentarismo' :
            $inteligencia = $inteligencia - 5;
            $velocidade = $velocidade -5;
            $forca = $forca - 5;
        break;
    }

    //JOGO
    switch($hospedeiro["jogo"]){

        case 'Conter-Stike' :
            $inteligencia = $inteligencia + 5;
            $velocidade = $velocidade + 10;
        break;

        case 'Minecraft' :
            $inteligencia = $inteligencia + 12;
        break;

        case 'Fortnite' :
            $inteligencia = $inteligencia + 8;
            $velocidade = $velocidade + 4;
        break;

        case 'The Witcher' :
            $velocidade = $velocidade + 3;
            $forca = $forca + 3;
            $inteligencia = $inteligencia + 6;
        break;

        case 'Valorant' :
            $velocidade = $velocidade + 7;
            $inteligencia = $inteligencia + 8;
        break;

        case 'Assassins Creed' :
           $inteligencia = $inteligencia + 8;
           $forca = $forca + 2;
           $velocidade = $velocidade + 3;
        break;

        case 'World of Warcraft' :
            $inteligencia = $inteligencia + 10;
            $forca = $forca + 4;
        break;

        case 'FIFA' :
            $inteligencia = $inteligencia + 6;
            $forca = $forca + 2;
            $velocidade = $velocidade + 5;
        break;

        case 'LoL' :
            $forca = $forca + 7;
            $inteligencia = $inteligencia + 8;
        break;

        case 'Dota' :
            $forca = $forca + 5;
            $inteligencia = $inteligencia + 8;
            $velocidade = $velocidade + 2;
        break;

        case 'Rocket League' :
            $velocidade = $velocidade + 7;
            $inteligencia = $inteligencia + 6;
        break;

        case 'Outro' :
            $inteligencia = $inteligencia + 6;
            $velocidade = $velocidade + 2;
        break;
    }

 // Eu tive a ideia de colocar habilidades especiais em algumas músicas, jogos e esportes, mas devido ao tempo não levei a ideia para frente.  
?>
<?php 

 $periculosidade = ($forca + $velocidade + $inteligencia) / 3;

 switch ($periculosidade) {
    case $periculosidade <= 20:
        $grauPerigo = "Nivel 4: Baixo";
        break;
    case $periculosidade > 20 && $periculosidade <= 40:
        $grauPerigo = "Nivel 3: Moderado";
        break;
    case $periculosidade > 40 && $periculosidade <= 60:
        $grauPerigo = "Nivel 2: Perigo em Potencial";
        break;    
    case $periculosidade > 60 && $periculosidade <= 80:
        $grauPerigo = "Nivel 1: Perigoso";
        break;    
    case $periculosidade > 80:
        $grauPerigo = "Nivel 0: Corre negada!";
        break;                 
 }

  $pontoFraco = min($forca, $velocidade, $inteligencia);
  if($pontoFraco == $inteligencia){ $pontoFraco = "Inteligencia";}
  if($pontoFraco == $velocidade){ $pontoFraco = "Velocidade";}
  if($pontoFraco == $forca){ $pontoFraco = "Força";}

  $pontoForte = max($forca, $velocidade, $inteligencia);
  if($pontoForte == $inteligencia){ $pontoForte = "Inteligencia";}
  if($pontoForte == $velocidade){ $pontoForte = "Velocidade";}
  if($pontoForte == $forca){ $pontoForte = "Força";}

  
  switch ($pontoForte) {
    case "Força":
        $medidaDesefa = "O pato ativa um mecanismo de camuflagem ficando imperceptivo.";
        break;
    case "Velocidade":
        $medidaDesefa = "O pato ira desencadear uma descarga eletrica impedindo que o zumbi o toque.";
        break;
    case "Inteligencia":
        $medidaDesefa = "O pato batera(as asas) em retirada.";
        break;
  }

  switch ($pontoFraco) {
    case "Força":
        $medidaAtaque = "O pato usara os objetos ao seu redor para esmagar o zumbi.";
        break;
    case "Velocidade":
        $medidaAtaque = "O pato ira atirar projeteis de penas afiados.";
        break;
    case "Inteligencia":
        $medidaAtaque = "Dependendo da Inteligencia do zumbi o pato devera fazer perguntas matematicas cada fez mais díficeis para que o celebro do zumbi exploda.";
        break;
  }

  if($periculosidade > 80){
    $medidaDesefa = "Bater em retirada imediatamente.";
    $medidaAtaque = "Ativar Autodestruição.";
  }

 ?>
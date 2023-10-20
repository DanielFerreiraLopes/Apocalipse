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

 
 ?>
<?php 
	

function CartasUse($Ncartas,$naipe){ 

	$arrayUse = array();

	for ($i=0; $i < $Ncartas; $i++) { 
	$card = rand(1,13);
	array_push($arrayUse, $card);
	}


	foreach ($arrayUse as $card) {
	if ($naipe == 1) {
	

	if ($card == 1) {
	echo "<img src='img/ouro/Ao.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/ouro/2o.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/ouro/3o.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/ouro/4o.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/ouro/5o.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/ouro/6o.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/ouro/7o.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/ouro/8o.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/ouro/9o.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/ouro/10o.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/ouro/Jo.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/ouro/Qo.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/ouro/Ko.png' width='50'>";
	}
	}

	if ($naipe == 2) {
	if ($card == 1) {
	echo "<img src='img/copas/Ac.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/copas/2c.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/copas/3c.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/copas/4c.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/copas/5c.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/copas/6c.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/copas/7c.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/copas/8c.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/copas/9c.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/copas/10c.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/copas/Jc.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/copas/Qc.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/copas/Kc.png' width='50'>";
	}
	}


	if ($naipe == 3) {
	

	if ($card == 1) {
	echo "<img src='img/espadas/Ae.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/espadas/2e.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/espadas/3e.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/espadas/4e.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/espadas/5e.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/espadas/6e.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/espadas/7e.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/espadas/8e.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/espadas/9e.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/espadas/10e.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/espadas/Je.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/espadas/Qe.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/espadas/Ke.png' width='50'>";
	}
	}

	if ($naipe == 4) {
	

	if ($card == 1) {
	echo "<img src='img/paus/Ap.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/paus/2p.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/paus/3p.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/paus/4p.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/paus/5p.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/paus/6p.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/paus/7p.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/paus/8p.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/paus/9p.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/paus/10p.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/paus/Jp.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/paus/Qp.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/paus/Kp.png' width='50'>";
	}
	}

	}
	sort($arrayUse);
	return $arrayUse;
	}

function CartasComp ($Ncartas,$naipe){ 

	$arrayComp = array();

	for ($i=0; $i < $Ncartas; $i++) { 
	$card = rand(1,13);
	array_push($arrayComp, $card);
	}

	$naipeComp = 1;

	if ($naipe == $naipeComp) {
	$naipeComp = rand(1,4);
	} 
	foreach ($arrayComp as $card) {

	if ($naipeComp == 1) {
	

	if ($card == 1) {
	echo "<img src='img/ouro/Ao.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/ouro/2o.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/ouro/3o.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/ouro/4o.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/ouro/5o.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/ouro/6o.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/ouro/7o.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/ouro/8o.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/ouro/9o.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/ouro/10o.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/ouro/Jo.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/ouro/Qo.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/ouro/Ko.png' width='50'>";
	}
	}

	if ($naipeComp == 2) {
	

	if ($card == 1) {
	echo "<img src='img/copas/Ac.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/copas/2c.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/copas/3c.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/copas/4c.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/copas/5c.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/copas/6c.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/copas/7c.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/copas/8c.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/copas/9c.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/copas/10c.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/copas/Jc.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/copas/Qc.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/copas/Kc.png' width='50'>";
	}
	}

	if ($naipeComp == 3) {
	

	if ($card == 1) {
	echo "<img src='img/espadas/Ae.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/espadas/2e.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/espadas/3e.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/espadas/4e.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/espadas/5e.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/espadas/6e.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/espadas/7e.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/espadas/8e.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/espadas/9e.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/espadas/10e.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/espadas/Je.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/espadas/Qe.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/espadas/Ke.png' width='50'>";
	}
	}

	if ($naipeComp == 4) {
	

	if ($card == 1) {
	echo "<img src='img/paus/Ap.png' width='50'>";
	}

	if ($card == 2) {
	echo "<img src='img/paus/2p.png' width='50'>";
	}
	if ($card == 3) {
	echo "<img src='img/paus/3p.png' width='50'>";
	}
	if ($card == 4) {
	echo "<img src='img/paus/4p.png' width='50'>";
	}
	if ($card == 5) {
	echo "<img src='img/paus/5p.png' width='50'>";
	}
	if ($card == 6) {
	echo "<img src='img/paus/6p.png' width='50'>";
	}
	if ($card == 7) {
	echo "<img src='img/paus/7p.png' width='50'>";
	}
	if ($card == 8) {
	echo "<img src='img/paus/8p.png' width='50'>";
	}
	if ($card == 9) {
	echo "<img src='img/paus/9p.png' width='50'>";
	}
	if ($card == 10) {
	echo "<img src='img/paus/10p.png' width='50'>";
	}
	if ($card == 11) {
	echo "<img src='img/paus/Jp.png' width='50'>";
	}
	if ($card == 12) {
	echo "<img src='img/paus/Qp.png' width='50'>";
	}
	if ($card == 13) {
	echo "<img src='img/paus/Kp.png' width='50'>";
	}
	}

	}
	sort($arrayComp);
	return($arrayComp);
	}


function compara($somaUso,$somaComp){

	$totalUso = array_sum($somaUso);
	$totalComp = array_sum($somaComp);


	if ($totalComp>$totalUso) {
		echo "<h1 id = 'comp'>computador Venceu</h1>";
	}
	if ($totalUso>$totalComp) {
		echo "<h1 id='usu'>usuario venceu</h1>";
	}
	if ($totalUso==$totalComp) {
		echo "<h1 id = 'emp'>empate</h1>";
	}


}

?>


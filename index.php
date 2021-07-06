
<?php
	include_once 'funcao.php';  


$nome =isset($_POST['nome']) ? $_POST['nome'] : "";
$naipe = isset($_POST['nipe']) ? $_POST['nipe'] : 0;
$Ncartas = isset($_POST['Ncartas']) ? $_POST['Ncartas'] : 0;
$acao = $nome =isset($_POST['acao']) ? $_POST['acao'] : "";
?>





<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/estilo.csss">

</head>
<body>


<h1 >Jogo de Cartas</h1>

<form method="post">
	<label>Insira seu nome</label>
	<input type="text" name="nome">
	<br>
	<label>Selecione o nipe que deseja jogar</label>
<br>
	<input type="radio" name="nipe" value="1">
	<label>ouro</label>
<br>
	<input type="radio" name="nipe" value="2">
	<label>copas</label>
<br>
	<input type="radio" name="nipe" value="3">
	<label>espadas</label>
<br>
	<input type="radio" name="nipe" value="4">
	<label>paus</label>
<br>
<br>

<label>numero e cartas que deseja jogar</label>
<br>
	<select name="Ncartas">
		<option value="2" >2</option>
		<option value="3" >3</option>
		<option value="4" >4</option>
		<option value="5" >5</option>
		<option value="6" >6</option>
	</select>




<br><br>
	<button type="submit" name="acao" value="sortear">sortear</button>
	<button type="submit" name="acao" value="play">jogar</button>

</form>	








<?php 
if ($nome != "") {
if ($Ncartas != 0) {



	if ($acao == "sortear") {
	echo "<h2>cartas jogador</h2> <br>";
	$somaUso = CartasUse($Ncartas,$naipe);
	}

	if ($acao == "play") {
	
	echo "<h2>cartas jogador</h2> <br>";
	$somaUso = CartasUse($Ncartas,$naipe);

	echo "<h2>cartas computador</h2> <br>";
	$somaComp = CartasComp($Ncartas,$naipe);


echo "<br><br>";
	compara($somaUso,$somaComp); 



	}
}

}if($nome == ""){
	echo "Nome ou naipe não inseridos";
}























 ?>
</body>
</html>
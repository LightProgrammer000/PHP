<!DOCTYPE HTML>

<html lang="pt-br">

	<!-- Cabeçalho -->
	<head>
		<meta charset="utf-8">
		<title> Aula 13 </title>

		<!-- Seção CSS -->
		<link rel="stylesheet" href="../_css/estilo.css">
		<style>
			html
			{
				font-size: 18px;
				font-style: normal;
				font-weight: normal;

				color: darkblue;
				text-shadow: 2px 2px 4px #000000;
			}

			button 
			{
				cursor: pointer;

				color: blue;
				background-color: #4CAF50; /* Green */

				border: none;
				display: inline-block;

				margin: 40px 190px;
				padding: 16px 32px;

				font-size: 16px;
				text-align: center;
				text-decoration: none;

				transition-duration: 0.4s;
				-webkit-transition-duration: 0.4s; /* Safari */	
			}

			.button1 
			{
				border: 2px solid #4CAF50;

				color: black; 
				background-color: white; 
			}

			.button1:hover 
			{
				color: white;
				background-color: #4CAF50;
			}

			span#a
			{
				color: red;
				margin-left: 10px;
			}

			span#b
			{
				color:black;
			}
		</style>
	</head>

<!-- Corpo -->
<body>

<div>	

<?php

# Supressão de erros
error_reporting(0);

# Variáveis
$a = 3;

# Função: Passagem de parâmetros por referência
// Qualquer alteração em "X" altera o valor de "A"
function teste(&$x)
{
	$x += 2;

	return($x);
}
echo "<br>";
echo "<span id='a'> X </span> : " . "<span id='b'>" . teste($a) . "</span>" . "<br>";
echo "<span id='a'> A </span> : " . "<span id='b'>" . $a . "</span>" . "<br>";

?>

</div>

</body>

</html>

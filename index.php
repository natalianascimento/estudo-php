<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name = "viewport" content ="width=device-width, initial-scale=1">
    <title>Calculo de Consumo de Combustível</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
  <body>
    <main>
    	<div class = "painel">
    		<h2>Instruções</h2>
    		<div class= "conteudo-painel">
    			<p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo, e com a distânica determinada por você!</p>
    			<p>Os combustíveis disponíveis para este cálculo são:</p>
    			<ul>
    				<li><b>Álcool</b></li>
    				<li><b>Diesel</b></li>
					<li><b>Gasolina</b></li>
				</ul>
    		</div>
    	</div>
    
    <div class="painel">
    	<h2>Cálculo do valor (R$) do consumo</h2>
    	<div class="conteudo-painel">
    	<form action="calculo.php" method="POST">
    	<label for="distancia">Distância em kilômetros a ser percorrida</label>
    	<input type="text" name="distancia"/>
    	
    	<label for="autonomia">Consumo de combustível do veículo (Km/l)</label>
    	<input type="text" name="autonomia"/>
    	<button class="botao" type="submit"> Calcular</button>
    	</form>
    	
    	</div>
    </div>
    
    </main>
<?php
$mensagem = "<h1>Ola Mundo!</h1>";
echo $mensagem;
echo "<h2>hello</h2>";
?>

</body>
</html>
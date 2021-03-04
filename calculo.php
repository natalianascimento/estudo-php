<?php 

$mensagem ="";

if ($_POST) {
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    
    if (is_numeric($distancia) && is_numeric ($autonomia)) {
        
        if ($distancia > 0 && $autonomia > 0){
            $valorGasolina = 4.80;
            $valorAlcool = 3.80;
            $valorDiesel = 3.00;
            
            $calculoGasolina = ($distancia / $autonomia) * $valorGasolina;
            $calculoGasolina = number_format ($calculoGasolina, 2, ',','.');
            
            $calculoAlcool = ($distancia / $autonomia) * $valorAlcool;
            $calculoAlcool = number_format ($calculoAlcool, 2, ',','.');
            
            $calculoDiesel = ($distancia / $autonomia) * $valorDiesel;
            $calculoDiesel = number_format ($calculoDiesel, 2, ',','.');
            
            $mensagem.= "<div class='sucesso'>";
            $mensagem.= "O valor total gasto será de : ";
            $mensagem.= "<ul>";
            $mensagem.= "<li><b>Gasolina: </b>R$ ".$calculoGasolina."</li>";
            $mensagem.= "<li><b>Alcool: </b>R$ ".$calculoAlcool."</li>";
            $mensagem.= "<li><b>Diesel: </b>R$ ".$calculoDiesel."</li>";
            $mensagem.= "</ul>";
            $mensagem.= "</div>";
         } else {
             $mensagem.= "<div class='erro'>";
             $mensagem.= "<p>O valor recebido não é numérico.</p>";
             $mensagem.= "</div>";
        }
       
    } else {
        $mensagem.= "<div class='erro'>";
        $mensagem = "<p>O valor da distância e da autonomia deve ser maior que zero.</p>";
        $mensagem.= "</div>";
    }
    
} else {
    $mensagem.= "<div class='erro'>";
    $mensagem = "<p>Nenhum dado foi recebido pelo formulário.</p>";
    $mensagem.= "</div>";
}
?> 

<!DOCTYPE HTML>
<HTML lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inicial-scale=1">
<title>Cálculo de Consumo de Combustível</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<main>
		<div class="painel">
			<h2>Cálculo de Consumo de Combustível</h2>
			<div class="conteudo-painel">
				<?php 
				echo $mensagem;
				?>
				<a class="botao" href="index.php">Voltar</a>
			</div>
		</div>	
	</main>
</body>
</HTML>


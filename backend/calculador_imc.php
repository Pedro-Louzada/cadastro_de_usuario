<?php
    if (!isset($_POST["altura"]) || !isset($_POST["peso"])) {
		echo '{ "altura": "valor nulo ou não declarado", "peso": "valor nulo ou não declarado" "status": "Erro!" }';
		return;
	}
	
	if (!is_numeric($_POST["altura"]) || !is_numeric($_POST["peso"])) {
		echo '{ "altura": "valor nulo ou não declarado", "peso": "valor nulo ou não declarado" "status": "Erro!" }';
		return;
	}
	
	if ($_POST["altura"] <= 0 || $_POST["peso"] <= 0) {
		echo '{ "altura": "valor nulo ou não declarado", "peso": "valor nulo ou não declarado" "status": "Erro!" }';
		return;
	}

    $altura = $_POST["altura"];
    $peso = $_POST["peso"];
    $conta = ($altura / $peso) * 2;
    $mensagem = "";

    switch($conta){
        case "":
            $mensagem = "Muito bom!";
            break;
        case "":
            $mensagem = "Bom!";
            break;
        case "":
                $mensagem = "Regular!";
                break;
        case "":
                $mensagem = "Ruim!";
                break;                    
    }

    echo "avaliacaoPeranteCalculo: . $mensagem"
?>
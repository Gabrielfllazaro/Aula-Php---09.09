<?php 
    echo("<br/>ATIVIDADE 1 ");
    echo("<br/>");

    
    $a = array(
        array(25, 12, 35),
        array(85, 47, 98),
        array(32, 38, 105)
    );

    $b = array(
        array(98, 65, 35),
        array(5, 27, 8),
        array(74, 14, 3)
    );

    
    $c = array(
        array(0, 0, 0),
        array(0, 0, 0),
        array(0, 0, 0)
    );

    
    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            $c[$linha][$coluna] = $a[$linha][$coluna] + $b[$linha][$coluna];
        }
    }

    echo "<pre>";
    print_r($c);
    echo "</pre>";

    echo("<br/>ATIVIDADE 2 ");
    echo("<br/>");

    $soma = 0;

    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            $soma = $soma + $a[$linha][$coluna];
        }
    }

    echo("<br/>O valor da soma da Matriz a) = ".$soma);

    $soma = 0;

    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            $soma = $soma + $b[$linha][$coluna];
        }
    }

    echo("<br/>O valor da soma da Matriz b) = ".$soma);



    $soma = 0;

    for ($linha = 0; $linha < 3; $linha++) {
        for ($coluna = 0; $coluna < 3; $coluna++) {
            $soma = $soma + $c[$linha][$coluna];
        }
    }

    echo("<br/>O valor da soma da Matriz c) = ".$soma);

    echo("<br/>ATIVIDADE 3 ");
    echo("<br/>");

    $alunos = [
    	['nome' => "Gabriel", "nota" => 9],
    	['nome' => "Isaac", "nota" => 8],
    	['nome' => "Homero", "nota" => 5],
    	['nome' => "Lucas", "nota" => 3],
    	['nome' => "Emanuel", "nota" => 7],
    	['nome' => "Debora", "nota" => 8],
    	['nome' => "Briam", "nota" => 8],
    	['nome' => "Lolo", "nota" => 10],
    	['nome' => "Felipe", "nota" => 8],
    	['nome' => "Algusto", "nota" => 8]];

    	$TotalN = 0;
    	$MelhorN = -1;
    	$MelhorA = "";

    	foreach ($alunos as $aluno){
    		$TotalN += $aluno["nota"];
    		if($aluno["nota"] > $MelhorN ){
             $MelhorN = $aluno["nota"];
             $MelhorA = $aluno["nome"];
    		}
    	}
    	$media = $TotalN / 10;
    	echo "<br/>A media da sala é; " . $media;
    	echo "<br/>O aluno " . $MelhorA . " teve a maior nota, igual: " . $MelhorN;

    	echo("<br/>");
    	echo("<br/>ATIVIDADE 4 ");
        echo("<br/>");

        $meses = array('Janeiro', 'Fevereiro','Março','Abril','Maio','Junho','Julho', 'Agosto','Setembro','Outubro','Novembro','Dezembro');

        $escolha = 1;

        echo "O mês escolhido é o: ". $meses[$escolha-1];


        echo("<br/>");
    	echo("<br/>ATIVIDADE 5 ");
        echo("<br/>");

        $pessoas = [
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Isaac', 'cidade' => 'Santos','idade' => 100, 'sexo' => 'M'],
        ['nome' => 'Homero', 'cidade' => 'Santos','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M'],
        ['nome' => 'Gabriel', 'cidade' => 'São Paulo','idade' => 16, 'sexo' => 'M']];

        foreach($pessoas as $pessoa){
        	echo $pessoa['nome'] . " tem " . $pessoa['idade'] . " anos <br/>";

        }

        foreach($pessoas as $pessoa){
        	echo $pessoa['nome'] . " tem " . $pessoa['idade'] . " anos <br/>";

        	if($pessoa['cidade']=="Santos"){
        		
        	}
        }

        ?>



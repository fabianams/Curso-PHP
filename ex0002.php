<!--
Exercicio para aprendizado com PHP.
*comparações com if e operador
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testando PHP</title>
</head>
<body>
<h1>Testando PHP</h1>
<?php

    echo "<h1>If vs operador</h1>";
    $n1=$_GET["a"];
    $n2=$_GET["b"];

    //este é um if tradicional 
    //--------------------------------------------------------------
    if ($n1 > $n2){    
        $maior = $n1;
    }
    else{
        $maior = $n2;
    }  
    echo "O if tradicional resultou no número maior $maior";
    //--------------------------------------------------------------


    //a mesma comparação pode ser feita de maneira mais "simplificada"
    //--------------------------------------------------------------
    $maior_ou = $n1>$n2?$n1:$n2;
    echo "</br>O operador resultou no número maior $maior_ou";
    //--------------------------------------------------------------


    //agora usando o && como operador lógico E
    //--------------------------------------------------------------
    echo "<h1>Comparações e Operadores Lógicos</h1>";
    echo "<h2>Vc é obrigado(a) a votar?</h2>";

    $idade = 16;
    echo ("Vc tem $idade anos e seu voto é - ".(($idade>=18 && $idade<=70)? "Obrigatório":"Não Obrigatório"));

    $idade = 18;
    echo ("</br>Vc tem $idade anos e seu voto é - ".(($idade>=18 && $idade<=70)? "Obrigatório":"Não Obrigatório"));

    $idade = 73;
    echo ("</br>Vc tem $idade anos e seu voto é - ".(($idade>=18 && $idade<=70)? "Obrigatório":"Não Obrigatório"));

?>


</body>
</html>
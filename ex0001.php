<!--
Exercicio para aprendizado com PHP.
*Hello World
*Variáveis
*Operadores Aritméticos
*Entrada de dados pela URL
*Funções Matemáticas
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primeiro exemplo PHP</title>
</head>
<body>
    <h1>Testando PHP</h1>
    <?php
        echo "<h2>Olá Mundo!</h2>";
        
        #variáveis em php não precisam ter declaração de tipo
        #--------------------------------------------------------
        $num=1024;
        $nome="Zé";
        
        echo "<p>$nome disse que o Kbyte tem $num bytes</p>";
        #--------------------------------------------------------
        
        
        #operações aritméticas
        #--------------------------------------------------------
        echo "<h2>Veja algumas operações aritméticas</h2>";
        $n1=2;
        $n2=3;
        
        $soma=$n1+$n2;
        $diferença=$n2-$n1;
        $multiplicação=$n1*$n2;
        $divisão=$n1/$n2;
        $modulo=$n2%$n1;
        $media=($n1+$n2)/2;

        echo "<p>A soma $n1 + $n2 = $soma</p>";
        echo "<p>A diferença $n2 - $n1 = $diferença</p>";
        echo "<p>A multiplicação $n1 * $n2 = $multiplicação</p>";
        echo "<p>A divisão $n1 / $n2 = $divisão</p>";
        echo "<p>O módulo $n2 % $n1 = $modulo</p>";
        echo "<p>A média ($n1 + $n2)/2 = $media</p>";
        #--------------------------------------------------------
       
        #entrada de dados
        #no final da url no navegador será digitado ?a=4&b=5
        #--------------------------------------------------------
        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $soma=$n1+$n2;
        $diferença=$n2-$n1;
        $multiplicação=$n1*$n2;
        $divisão=$n1/$n2;
        $modulo=$n2%$n1;
        $media=($n1+$n2)/2;

        echo "<h2>Operações aritméticas com valores recebidos pela url</h2>";
        echo "<p>A soma $n1 + $n2 = $soma</p>";
        echo "<p>A diferença $n2 - $n1 = $diferença</p>";
        echo "<p>A multiplicação $n1 * $n2 = $multiplicação</p>";
        echo "<p>A divisão $n1 / $n2 = $divisão</p>";
        echo "<p>O módulo $n2 % $n1 = $modulo</p>";
        echo "<p>A média ($n1 + $n2)/2 = $media</p>";
        #--------------------------------------------------------

          
        #Funções matemáticas
        #--------------------------------------------------------
        echo "<h2>Funções matemáticas</h2>";

        $n1 = $_GET["a"];
        $n2 = $_GET["b"];

        $abs=abs($n2);
        $pow=pow($n1,2);
        $sqrt=sqrt($n1);
        $round=round($n2); # a função ceil arredondaria pra cima e floor arredondaria pra baixo. A função intval pegaria somente a parte inteira, ou seja, antes da virgula. 
        $nformat=number_format($n2, 2, ",", ".");

        echo "<p>O valor absoluto de $n2 = $abs</p>";
        echo "<p>O valor de $n1 elevado a 2 = $pow</p>";
        echo "<p>O valor de raiz quadrada de $n1 = $sqrt</p>";
        echo "<p>O valor arredondado de $n2 = $round</p>";
        echo "<p>O valor formatado para duas casas decimais de $n2 = $nformat</p>";
        #--------------------------------------------------------

    ?>
</body>
</html>
<!--
    Manipulação de strings
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipulação de String</title>
</head>
<body>
<?php

$prod = "feijão";
$preco= 4.50;

//utilização do printf
//**********************************************************************
// %d - decimal (positivo ou negativo)
// %u - decimal sem sinal (apenas positivo)
// %f - real
// %s - strings
// ...
printf ("Produto %s - custa %.2f ", $prod, $preco);
//**********************************************************************

echo "</br>";


//utilização do print_r
//**********************************************************************
//primeira maneira de criar vetor
$x[0]=4;
$x[1]=3;
$x[2]=8;

//segunda maneira de criar vetor
$y= array(1,2,3,4,5,6);

print_r($x);
echo "</br>";
print_r($y);
//**********************************************************************

echo "</br>";

//utilização do var_dump e do var_export
//**********************************************************************
var_dump($y);
echo "</br>";

var_export($y);
echo "</br>";
//**********************************************************************

//utilização do wordwrap
//**********************************************************************´
$txt = "Parabéns pra vc. Nessa data querida. Muitas felicidades. Muitos anos de vida! É big, é big, é big, é big, é big. É hora, é hora, é hora, é hora, é hora. Rá Tim Bum!";

$wtxt= wordwrap($txt, 30, "</br>", false);

echo $wtxt;
//**********************************************************************´

echo "</br>";

//utilização do strlen
//**********************************************************************´
$txt2 = "Fabiana Martins";
$tamanho=strlen($txt2);
echo $tamanho;
//**********************************************************************´

echo "</br>";

//utilização do trim ///corta os espaços do inicio e do final
//ltrim só elimina os espaços do ínicio
//rtrim só elimina os espaços do final
//**********************************************************************´
$txt3 = "   Fabiana Martins da Silva   ";
$ttxt3=trim($txt3);
$tamanho=strlen($ttxt3);
echo $tamanho;

//**********************************************************************´

echo "</br>";


//utilização do str_word_count
//**********************************************************************´
$txt4 = "Fabiana Martins da Silva";
$tamanho=str_word_count($txt4);//so conta
echo $tamanho;
echo "</br>";
$vetor=str_word_count($txt4,1);//cria um vetor com as palavras
print_r($vetor);
//**********************************************************************´

echo "</br>";

//utilização do explode e implode (join)
//**********************************************************************´
$txt5="Teste de explode e implode";
$vetor=explode(" ",$txt5);//cria um vetor com as palavras
print_r($vetor);
echo "</br>";
$txt5=implode("#", $vetor);//pdoe usar join no lugar de implode
print($txt5);

//**********************************************************************´
echo "</br>";

//utilização do str_split
//**********************************************************************´
$txt6="Teste de split";
$vetor=str_split($txt6);//cria um vetor com os caracteres
print_r($vetor);

//**********************************************************************´
echo "</br>";

//utilização do strtolower
//**********************************************************************´
$txt7="Teste Bla Teste";
echo strtolower($txt7);
//**********************************************************************´
echo "</br>";

//utilização do strtoupper
//**********************************************************************´
echo strtoupper($txt7);
//**********************************************************************´
echo "</br>";

//utilização do strpos e strpos
//**********************************************************************´
$txt8 = "Estou aprendendo PHP";
$pos = strpos($txt8, "PHP");//é case sensitive
echo "posição: $pos";
echo "</br>";
$pos1 = stripos($txt8, "php");//não é case sensitive
echo "posição: $pos1";

//**********************************************************************´
echo "</br>";

//utilização do substr
//**********************************************************************´
$txt9="Teste Bla Teste";
echo substr($txt9,0,5);
//**********************************************************************´
echo "</br>";
?>
</body>
</html>
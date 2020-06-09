<!-- Manipulação de Vetores -->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vetores</title>
</head>
<body>
    <pre>

    <?php
        $v1 = array (1,2,3,4,5);
        unset($v1[2]);//posso tirar uma posição do vetor
        print_r($v1);

        $v2 = range (1,11,2);//vai de 1 até 11 no passo 2
        foreach($v2 as $v){
            echo "$v  ";
        }

        //chaves associativas
        $cadastro = array ("nome"=>Fabiana, "idade"=>"39", "sexo"=>"F");
        //print_r($cadastro);
        foreach($cadastro as $campo=>$v){
            echo " [$campo] = $v </br>";
        }

        //tamanho do vetor
        echo "O tamanho do vetor é ".count($cadastro);
        echo '</br>';

        //colocando um elemento no início do vetor
        array_unshift($v1, 0); //o array_shift eliminaria o elemento no início
        print_r($v1);
        array_shift($v1); //o array_shift elimina o elemento no início
        print_r($v1);
    ?>
    

    </pre>
</body>
</html>
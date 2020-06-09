<!--
Integração formulário html e php e case
-->


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP e formulário</title>
</head>
<body>
    <?php
        $valor=$_GET["num"];
        $oper=$_GET["oper"];

        echo "Valor inicial: $valor";
        echo "</br>";
        
        if ($valor != null)
        {
            switch ($oper){
                case "dobro":
                    echo "O dobro: ". ($valor*2);
                    break;
                case "cubo":
                    echo "O cubo: ". (pow($valor,3));
                    break;
                case "raiz":
                    echo "A raiz quadrada: ".(number_format(sqrt($valor), 4, ",", "."));
                #default: não é o caso aqui mas existe a opção de uso do default para qualquer caso que seja diferente dos listados antes.                
            }
            
        } else { echo "Informe um valor para fazer o cálculo";}
    ?>
    
    <p>
    <a href="ex0003.html"> Voltar </a>
    
    </p>
</body>

</html>
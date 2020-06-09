<!--
Integração formulário html e php e laço if
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condições e Laços</title>
</head>
<body>
    <?php
    
    $ano=$_GET["ano"];
    if ($ano != null){
        $idade = date("Y")-$ano;
        echo "Você tem $idade anos.";
        if ($idade < 16){
            echo "</br> Você não pode votar.";
        }
        if (($idade >=16 && $idade < 18)||($idade >=70)){
            echo "</br> Seu voto é opcional.";
        }
        else if ($idade >=18 && $idade < 70) {
            echo "</br> Seu voto é obrigatório.";
        }     
    }
    else { echo "Você não digitou nada. Não tenho bola de cristal.";}
?>

<p>
<a href="ex0004.html"> Voltar </a>
</p>

</body>
</html>
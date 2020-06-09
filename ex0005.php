<!--
Laço while , do while e for
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laços</title>
</head>
<body>
    <?php
    //Laço While
    //==========================================================
        $i=1;
        while ($i<=10)
        {
            echo "número $i </br>";
            $i++;
        }
        echo ("fim da contagem </br>");


    //Laço Do While
    //==========================================================
    
        echo ("vamos de novo</br>");
        $i=1;
        do{
            echo "número $i </br>";
            $i++;
        }while($i<=10);
        echo ("fim da contagem </br>");
    //==========================================================
    

    //Laço for
    //==========================================================
    
        echo ("vamos de novo</br>");
        for ($i=0; $i<=10; $i++)
        {
            echo "número $i </br>";
        }
        echo ("fim da contagem </br>");
    
    //==========================================================
    
    ?>
</body>
</html>
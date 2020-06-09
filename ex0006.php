<!--funções no PHP -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php
        //funções simples
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function soma ($a, $b){
            $soma = $a+$b;
            echo "$a + $b = $soma </br>";
        }
        soma(3,2);
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


        //funções com retorno
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function dif ($a, $b){
            return ($a-$b) ;
        }
        
        $a=7;
        $b=2;
        $result = dif($a,$b);
        echo "$a - $b = $result </br>";
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++


        //funções com número de parâmetros variável
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

        function multiplica (){
            $p=func_get_args();//pega os parâmetros e coloca num vetor
            $tot=func_num_args();//dá o tamanho do vetor
            for($i=0;$i<$tot;$i++)
            {
                if ($i==0){
                    $result=$p[$i];
                }
                elseif($i>0)
                {
                    $result=$result*$p[$i];
                }
            }
            return ($result) ;
        }

        echo "Resultado: ".multiplica(3,2,1,2,0);
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

       
       
        //funções - passagem por referência
        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
        function metade (&$a){
            $a=$a/2;
        }
        
        $numero = 8;
        metade($numero);
        echo ("</br>Resultado da divisão por dois: $numero");

        //++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

    ?>
</body>
</html>
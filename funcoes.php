<?php

//As funções que criei para treino no ex0006.php foram repetidas aqui pois este será um arquivo de funções diversas. Ele será incluido com "include" ou com require no ex0007.php de a maneira a treinar/demonstrar o uso de funções externas

        
        function soma ($a, $b){
            $soma = $a+$b;
            return $soma;
        }
        

        function dif ($a, $b){
            return ($a-$b) ;
        }

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

        function metade (&$a){
            $a=$a/2;
        }
        
    ?>
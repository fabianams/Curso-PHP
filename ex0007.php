<!--
    usando funções externas, que estão em outro arquivo php
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Include</title>
</head>
<body>

<?php
    include "funcoes.php"; // pode ser feito com require

    echo "A diferença entre 3000 e 2769 = ". dif(3000,2769);

?>

</body>
</html>
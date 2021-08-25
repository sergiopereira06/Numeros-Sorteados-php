<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numeros Sorteados</title>
    <?php
        for($i = 0 ; $i < 20 ; $i++){
            $num[$i] = rand(0, 10);
           
        }
        $sort = implode(',', $num);
        
        $max = max(array_count_values($num));
        $qnt = array_count_values($num);
        $numeros = implode(', ', array_keys($qnt, $max));
        echo('Array sorteado = ['.$sort.']<br>');
        echo('O número que mais se repete é o '.$numeros.'<br>');
        echo('Ele se repete '.$max.' vezes');
        echo'<br>';

        
    ?>
</head>
<body>
    
</body>
</html>
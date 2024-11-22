<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Meses do Ano</title>
</head>
<body>
    <form action="./4.php" method="get">
        <p>Digite um número de 1 a 12: <input type="number" name="n1" id="n1"></p>
        <button type="submit">INDICAR MÊS</button>
    </form>

    <?php 
        $numero = $_GET['n1'];
        $meses = [
            $mes1 = 'JANEIRO',
            $mes2 = 'FEVEREIRO',
            $mes3 = 'MARÇO',
            $mes4 = 'ABRIL',
            $mes5 = 'MAIO',
            $mes6 = 'JUNHO',
            $mes7 = 'JULHO', 
            $mes8 = 'AGOSTO',
            $mes9 = 'SETEMBRO',
            $mes10 = 'OUTUBRO',
            $mes11 = 'NOVEMBRO',
            $mes12 = 'DEZEMBRO',
        ];

        switch ($numero) {
            case 1:
                echo $meses[0];
                break;
            case 2:
                echo $meses[1];
                break;
            case 3:
                echo $meses[2];
                break;
            case 4:
                echo $meses[3];
                break;
            case 5:
                echo $meses[4];
                break;
            case 6:
                echo $meses[5];
                break;
            case 7:
                echo $meses[6];
                break;
            case 8:
                echo $meses[7];
                break;
            case 9:
                echo $meses[8];
                break;
            case 10:
                echo $meses[9];
                break;
            case 11:
                echo $meses[10];
                break;
            case 12:
                echo $meses[11];
                break;
            default:
                echo 'INFORME UM MÊS VÁLIDO';
                break;
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 - Calculadora de Idade</title>
    <link href="bootstrap.mim.css" rel="stylesheet" />
</head>
<body>
    
<div class="container">

    <h1> Atividade 2 - Calculadora de Idade </h1>

    <?php

        //para trocar de atividade é só ir no link
        //http://localhost:8081/Exercicios-de-Sintaxe-php/atividade2.php
        //e trocar o numero na parte "atividade" para a atividade que deseja

        $anoNascimento = 2007;
        $anoAtual = 2024;
        $Idade = 0;

        $Idade = $anoAtual - $anoNascimento;
        echo "A idade atual da pessoa é: $Idade";
    ?>

</div>
    <script src="bootstrap.bundle.mim.js"></script>
</body>
</html>
<?php
    $nome = $_GET['nome'];
    $nota1 = $_GET['n1'];
    $nota2 = $_GET['n2'];
    $media = ($nota1+$nota2)/2;
    $res = '';
    if($media>5)
        $res = 'Aprovado';
    else 
        $res = 'Recuperação';
?>

<html>
    <head>
        <title>Exemplo 3 - Média aluno</title>
    </head>
    <body>
        <h3>Aluno: <?= $nome?></h3>
        <h3>Média: <?= $media?></h3>
        <h3>Resultado: <?= $res?></h3>
        <a href="ex03.php">Voltar</a>
    </body>
</html>
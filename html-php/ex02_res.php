<html>
    <head>
        <title>Exemplo 2 - Tabuada</title>
    </head>
    <body>
        <?php
            $num = $_GET['n'];
            for($i=0;$i<11;$i++)
                echo $num.' x '.$i.' = '.$num*$i.'<br>';
        ?>
        <a href="ex02.php">Voltar</a>
    </body>
</html>


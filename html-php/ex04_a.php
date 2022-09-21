

<html>
    <head>
        <title>Exemplo 4 - Calculo de valores</title>
    </head>
    <body>
        <form>
            <h3>Resultado x2</h3>
            <h3><?= $_GET['num']?></h3>
            <label>Número: </label>
            <input name="cpNum"><br>
            <input type="submit" value="Calcular" name="botao">
            <a href="ex04.php">Voltar</a>
        </form>
    </body>
</html>

<?php
    $num1 = $_GET['num'];
    if(!empty($_GET['botao'])){
        $num2 = $_GET['cpNum'];
        $res = $num1-$num2;
        header('Location: ex04_b.php?re='.$res);
    }//if

?>
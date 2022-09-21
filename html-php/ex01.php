<html>
    <head>
        <title></title>
    </head>
    <body>
        <form>
            <label>Número 1:</label><input name="cpNum1" type="text"><br>
            <label>Número 2:</label><input name="cpNum2" type="text"><br>
            <input type="submit" value="+" name="botao">
            <input type="submit" value="-" name="botao">
            <input type="submit" value="x" name="botao">
            <input type="submit" value="÷" name="botao">
            <input type="reset" value="Limpar"><br>
            <a href="index.php">Voltar</a>
        </form>
    </body>
</html>

<?php
    //!empty - não retorna vazio, houve alguma interação por botão.
    if(!empty($_GET)){
        $n1 = $_GET['cpNum1'];
        $n2 = $_GET['cpNum2'];
        $op = $_GET['botao'];
        $res = 0;

        if($op=='+')
            $res = $n1 + $n2;
        if($op=='-')
            $res = $n1 - $n2;
        if($op=='x')
            $res = $n1 * $n2;
        if($op=='÷')
            $res = $n1 / $n2;
        header('Location:ex01_res.php?r='.$res);
    }//if

?>
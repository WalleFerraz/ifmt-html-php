<html>
    <head>
        <title>Exemplo 2 - Tabuada</title>
    </head>
    <body>
        <form action="">
            <label for="">Entre com o número</label>
            <input name="cpNum">
            <input type="submit" value="Calcular" name="botao"><br>
            <a href="index.php">Voltar</a>
        </form>
    </body>
</html>

<?php
    if(!empty($_GET)){
        $num = $_GET['cpNum'];
        header('Location:ex02_res.php?n='.$num);
    }//if

?>
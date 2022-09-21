<html>
    <head>
        <title>Exemplo 4 - Calculo de valores</title>
    </head>
    <body>
        <form>
            <label>Número: </label>
            <input name="cpNumero"><br>
            <input type="submit" value="Calcular" name="botao"><br>
        </form>
        <a href="index.php">Voltar</a>
    </body>
</html>

<?php
    if(!empty($_GET)){
        $n = $_GET['cpNumero'];
        $n *= 2; 
        header('Location: ex04_a.php?num='.$n);
    }

?>
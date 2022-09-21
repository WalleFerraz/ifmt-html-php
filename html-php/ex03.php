<html>
    <head>
        <title>Exemplo 3 - Média aluno</title>
    </head>
    <body>
        <form>
            <label>Aluno: </label>
            <input name="cpNome"><br>
            <label>Nota 1: </label>
            <input name="cpN1"><br>
            <label>Nota 2: </label>
            <input name="cpN2"><br>
            <input type="submit" value="Calcular">
            <input type="reset" value="Limpar">
        </form>
        <a href="index.php">Voltar</a>
    </body>
</html>

<?php

    if(!empty($_GET)){
        $nome = $_GET['cpNome'];
        $n1 = $_GET['cpN1'];
        $n2 = $_GET['cpN2'];
        header('Location:ex03_res.php?nome='.$nome.'&n1='.$n1.'&n2='.$n2);
    }//if
?>
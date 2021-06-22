<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <title>Exercício 2</title>
</head>
<body>

<!-- 
    2. Criar uma página para o usuário entrar com um número e informar se ele é divisível por 10, por 5, por 2 ou se não é divisível por nenhum destes 
-->

<center><h1>Projeto DIVISORES</h1><br>

<form action="" method="post">
    Valor 1:<input type="text" name="n"><br><br>
    <input type="submit" value="Calcular">
</center>
</form>

<br><hr><br>

<?php

if($_POST)
{
    $v1 = $_POST['n'];
    $v10 = $v1 % 10;
    $v05 = $v1 % 5;
    $v02 = $v1 % 2;

    if ($v10 == 0 and $v05 == 0 and $v02 == 0){
        echo "<p align='center'><b> O valor é divisivel por 10, 5 e 2.</br></p>";
    }
    else if ($v10 == 0 and $v05 == 0 and $v02 >= 0){
        echo "<p align='center'><b> O valor é divisivel por 10 e 5.</br></p>";
    }
    else if ($v10 >= 0 and $v05 == 0 and $v02 == 0){
        echo "<p align='center'><b> O valor é divisivel por 5 e 2.</br></p>";
    }
    else if ($v02 == 0 and 0 == $v10 and $v05 >= 0){
        echo "<p align='center'><b> O valor é divisivel por 10 e 2.</br></p>";
    }
    else if ($v02 == 0){
        echo "<p align='center'><b> O valor é divisivel por 2.</br></p>";
    }
    else if ($v05 == 0){
        echo "<p align='center'><b> O valor é divisivel por 5.</br></p>";
    }
    else if ($v10 == 0) 
    {
        echo "<p align='center'><b> O valor é divisivel por 10.</br></p>";
    }
    else 
    {
        echo "<p align='center'><b> O valor não é divisivel por 10, 5 e nem 2.</br></p>";
    }
}
?>
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 


</body>
</html>
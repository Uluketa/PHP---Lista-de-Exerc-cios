<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <title>Exercicio 1</title>
</head>
<body>

<!-- EXERCICIO 1. 

Criar uma página que leia 2 números e efetue a adição.

- Caso o valor somado seja maior que 20, este deverá ser apresentada somando-se a ele mais 8;

- Caso o valor somado seja menor ou igual a 20, este deverá ser apresentado subtraindo-se 5 -->

<br>
<center>
<h1 class="h1s">Projeto SOMA</h1><br>

    <form method="post">
        Valor 1:<input type="text" name="valor1"><br><br>
        Valor 2:<input type="text" name="valor2"><br><br>
        <input type="submit" class="botao_calcular" value="Calcular">
    </form>
<br>
<hr>
<br>
<h2>
<?php
        if($_POST)
        {
            $v1=$_POST['valor1'];
            $v2=$_POST['valor2'];
            $t = $v1 + $v2;
            if ($t > 20)
            {
                $tf = $t + 8;
            }
            else
            {
                $tf = $t - 5;
            }
            echo $tf;
        }
?>
</h2>
<br>
<hr>
</center>
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 
</body>
</html>
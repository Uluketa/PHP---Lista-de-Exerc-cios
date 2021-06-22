<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <title>Exercício 4</title>
</head>
<body>
    
<!-- EXERCICIO 4. 
Criar uma página para o usuário entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes) 
-->

<center><h1>DIGITE 3 VALORES DIFERENTES</h1>
    
<br><hr><br>

    <form method="post">
        Valor 1:<input type="text" name="v1"><br><br>
        Valor 2:<input type="text" name="v2"><br><br>
        Valor 3:<input type="text" name="v3"><br><br>
        <input type="submit"  value="Calcular">
        </center>
    </form>
    
<br><hr><br>

<?php
    if($_POST)
    {
         $a = $_POST['v1'];
         $b = $_POST['v2'];
         $c = $_POST['v3'];

         if ($a > $b and $b > $c){
             echo "<p align='center'><b>A ordem decrescente dos números são: $a, $b e $c.</br></p>";
         }

         else if ($a > $c and $c > $b){
             echo "<p align='center'><b>A ordem decrescente dos números são: $a, $c e $b.</br></p>";
         }

         else if ($b > $a and $a > $c){
             echo "<p align='center'><b>A ordem decrescente dos números são: $b, $a e $c.</br></p>";
         }

         else if ($b > $c and $c > $a){
             echo "<p align='center'><b>A ordem decrescente dos números são: $b, $c e $a.</br></p>";
         }

         else if ($c > $a and $a > $b){
             echo "<p align='center'><b>A ordem decrescente dos números são: $c, $a e $b.</br></p>";
         }

         else{
             echo "<p align='center'><b>A ordem decrescente dos números são: $c, $b e $a.</br></p>";
         }
    }
?>
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 
</body>
</html>
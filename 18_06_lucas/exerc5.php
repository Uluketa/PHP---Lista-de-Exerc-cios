 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <title>Exercicio 5</title>
 </head>
 <body>

<!-- EXERCICIO 4. 
Criar uma página para o usuário entrar com 3 números e imprimi-los em ordem decrescente (suponha números diferentes) 
-->

 <center><h1>TIPO DE TRIÂNGULO</h1>
    
 <br><hr><br>

    <form method="post">
        Lado 1:<input type="text" name="a"><br><br>
        Lado 2:<input type="text" name="b"><br><br>
        Lado 3:<input type="text" name="c"><br><br>
        <input type="submit"  value="Descobrir">
        </center>
    </form>
    
 <br><hr><br>

<?php
    if($_POST)
    {

        $a = $_POST['a'];
        $b = $_POST['b'];
        $c = $_POST['c'];

            $d1 = $b + $c;
            $d2 = $a + $c;
            $d3 = $b + $a;

            if ($a < $d1 and $b < $d2 and $c < $d3)
            {
                if ($a != $b and $b != $c)
                {
                    echo "<p align='center'><b>O triângulo é escaleno.</p>";
                }

                else if ($a == $b and $a == $c)
                {
                    echo "<p align='center'><b>O triângulo é equilátero.</p>";
                }

                else
                {
                  echo "<p align='center'><b>O triângulo é isósceles.</p>";
                }
            }

            else
            {
                echo "<p align='center'><b>As medidas inseridas não equivalem a um triângulo.</p>";
            }

    }
?>
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 
</body>
</html>
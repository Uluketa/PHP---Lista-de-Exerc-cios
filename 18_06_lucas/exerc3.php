<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <title>Exercicio 3</title>
</head>
<body>

<!-- EXERCICIO 3. 

Criar uma página para o usuário entrar com - nome,

- sexo

- ano atual

- ano de nascimento de uma pessoa.

Se a pessoa for do sexo feminino e tiver menos que 25 anos, imprimir nome e a mensagem: ACEITA. 
Caso contrário, imprimir nome e a mensagem: NÃO ACEITA. 
-->

<center><br>
    <h1>MODELO DE ACEITAÇÃO</h1>
    <br>
    <form method="post">
        Nome:<input type="text" name="nome"><br><br>
        Sexo:<input type="text" name="sexo"><br><br>
        Ano Atual:<input type="text" name="ano_atual"><br><br>
        Ano de Nascimento:<input type="text" name="ano_nasc"><br><br>
        <input type="submit" class="botao_calcular" value="Verificar">
    </form>
</center>
<br>
<hr>
<br>

<?php
if($_POST)
{
    $n=$_POST['nome'];
    $s=$_POST['sexo'];
    $aatual=$_POST['ano_atual'];
    $anasc=$_POST['ano_nasc'];
    $idade = $aatual - $anasc;

    if ($s == "feminino" or $s == "Feminino"){
        if($idade <= 24){
            echo "<p align='center'><b>ACEITA<br></p>";
        }

        else
        {
            echo "<p align='center'><b>NÃO ACEITA<br></p>";
        }
    }

    else
        {
            echo "<p align='center'><b>NÃO ACEITA<br></p>";
        }
}
?>
<br>
<hr>
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <title>Exercício 7</title>
</head>
<body>

<!-- 7. A biblioteca de uma universidade deseja fazer uma página para que o funcionário entre com 

- o nome do livro que será emprestado, 

- categoria do livro (Suspense, romance, literatura brasileira, biografia e fantasia) use um <select>, 
    
- o tipo de usuário (professor ou aluno) use <radio>. 
    
Imprima um recibo com as informações inseridas e mostre 10 dias para devolução se for professor ou 3 dias se for aluno. 
-->

      <br> 
 <center><h1>VERIFICADOR DE PRAZO</h1>
    
    <br><hr><br>
   
    <form method="post">

        Nome: <input type="text" name="n"><br><br>

        Categoria:
        <select name="g">
            <option value="SL">Selecione o gênero textual do livro</option>
            <option value="suspense">Suspense</option>
            <option value="romance">Romance</option>
            <option value="literatura brasileira">Literatura Brasileira</option>
            <option value="biografia">Biografia</option>
            <option value="fantasia">Fantasia</option>
        </select>
        <br><br>

        Tipo de Usuário:
        
        <input type="radio" name="t" value="Aluno">Aluno
        <input type="radio" name="t" value="Professor">Professor
        <br><br>
        <input type="submit"  value="Verificar">
        </center>
    </form>
    <br><hr><br>

<?php 
if ($_POST)
{ 
    $n = $_POST ['n']; 
    $g = $_POST ['g']; 
    $t = $_POST ['t']; 
    switch ( $t )
    { 
        case 'Aluno' : echo "<h3><p align='center'>Olá Aluno! O livro $n - Gênero: $g - deverá ser devolvido em até 3 dias.</p></h3>" ; 
        break ; 
        default : echo "<h3><p align='center'>Olá Professor! O livro $n - Gênero: $g - deverá ser devolvido em até 10 dias.</p></h3>" ; 
        break ; 
    } 
} 
?> 
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/menu.css"/>
    <title>Exercício 6</title>
</head>
<body>
    
<!-- EXERCICIO 6. 
Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. 

Caso o número esteja fora desse intervalo, informar que não existe mês com este número. 

Use switch case. 
-->

 <center><h1>DESCOBRIR O MÊS</h1>
 <br>
 <h3>Digite um número de 1 a 12</h3>
    
    <br><hr><br>
   
       <form method="post">
           Número:<input type="text" name="a"><br><br>
           <input type="submit"  value="Descobrir">
           </center>
       </form>
       
    <br><hr><br>
   
<?php
    if($_POST)
    {
   
        $a = $_POST['a'];

        if ($a <= 12 and $a >= 1)
        {
            switch ($a) 
            {
                case 1:
                    echo "<p align='center'><b>O mês é Janeiro.</p>";
                    break;
                
                    case 2:
                        echo "<p align='center'><b>O mês é Fevereiro.</p>";
                        break;

                        case 3:
                            echo "<p align='center'><b>O mês é Março.</p>";
                            break;

                            case 4:
                                echo "<p align='center'><b>O mês é Abril.</p>";
                                break;

                                case 5:
                                    echo "<p align='center'><b>O mês é Maio.</p>";
                                    break;

                                    case 6:
                                        echo "<p align='center'><b>O mês é Junho.</p>";
                                        break;

                                        case 7:
                                            echo "<p align='center'><b>O mês é Julho.</p>";
                                            break;

                                            case 8:
                                                echo "<p align='center'><b>O mês é Agosto.</p>";
                                                break;

                                                case 9:
                                                    echo "<p align='center'><b>O mês é Setembro.</p>";
                                                    break;

                                                    case 10:
                                                        echo "<p align='center'><b>O mês é Outubro.</p>";
                                                        break;

                                                        case 11:
                                                            echo "<p align='center'><b>O mês é Novembro.</p>";
                                                            break;

                                                            case 12:
                                                                echo "<p align='center'><b>O mês é Dezembro.</p>";
                                                                break;
            }
        }

        else
        {
                echo "<p align='center'><b>Repita o processo. Digite um número de 1 a 12!.</p>";
        }
    }
?>
<center>
        <button class="voltar" onclick="window.location.href = 'menu.html'">Voltar para a página inicial</button>
</center> 
</body>
</html>
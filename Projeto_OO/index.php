<?php

require_once 'funcionario.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário | GN</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
        }
        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 20px;
            width: 60%;
        }
        
    </style>

    <script>

    </script>
</head>
<body>
    <div class="box">
    <center>
    <div id="container">
        
    <form method="POST">
    <h2>Digite as informações do funcionario:</h2><br>
    <input type="text" name="nome" id="nome" value="" placeholder="Nome:" required><br><br>
    <input type="text" name="cidade" id="cidade" value="" placeholder="Cidade:" required><br><br>
    <input type="text" name="salHora" id="salHora" value="" placeholder="Salário por Hora:" required><br><br>
    <input type="text" name="horasTrab" id="horasTrab" value="" placeholder="Horas trabalhadas:" required><br><br><br>
    <h2>Informe a opção:</h2>

    <select name="select" id="select">
      <option value="1">Cadastrar</option>
      <option value="2">Calcular salário</option>
      <option value="3">Dar aumento</option>
      <option value="4">Mostrar dados</option>
      <option value="0">Sair</option>
    </select>
    <br>
    <h4>Aumento</h4>
    
    <input style="width: 70px;" type="number" name="aumento" id="aumento" value="" placeholder="valor">
    </center>
    <center>
    <br><br>
    <button class="botao" type="submit" name="enviar">Enviar</button>
    </center>
    <br><br>
    <center>
    <?php
if(isset($_POST['enviar'])){
    $func = new Funcionario();
    $func->setNome($_POST['nome']);
    $func->setCidade($_POST['cidade']);
    $func->setSalHora($_POST['salHora']);
    $func->setHorasTrab($_POST['horasTrab']);

    switch ($_POST['select']) {
        case 1:
            $resultado = "Funcionario cadastrado!";
            break;
        case 2:
            $resultado = $func->calcularSalario();
            break;
        case 3:
            $resultado = $func->darAumento($_POST['aumento']);
            break;
        case 4:
            $resultado = $func->mostrarDados();
            break;
        case 0:
            $resultado = "Volte Sempre!";
            break;
        default:
            $resultado = "Escolha uma opção!";
            break;
    }
    
    echo "<span><strong>".$resultado."<strong></span>";

}
?>
</center>
<br>
</div>
        
    </div>

</body>
</html>
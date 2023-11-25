<?php
include("conexao.php");

if(isset($_POST['salvar'])){
    if(
        strlen($_POST['Nome'])>= 1 && 
        strlen($_POST['Apelido'])>= 1 && 
        strlen($_POST['Bi'])>= 1 && 
        strlen($_POST['Sexo'])>= 1 && 
        strlen($_POST['Data'])>= 1 && 
        strlen($_POST['Naturalidade'])>= 1 && 
        strlen($_POST['Morada'])>= 1 && 
        strlen($_POST['Email'])>= 1 && 
        strlen($_POST['Telefone'])>= 1
         ) {
        $nome= trim($_POST['Nome']);
        $apelido= trim($_POST['Apelido']);
        $bi= trim($_POST['Bi']);
        $datanascimento= trim($_POST['Data']);
        $naturalidade= trim($_POST['Naturalidade']);
        $morada= trim($_POST['Morada']);
        $email= trim($_POST['Email']);
        $telefone= trim($_POST['Telefone']);
        $fecha= date("d/m/y");
        $sexo= trim($_POST['Sexo']);
        $consulta= " insert into dados(nome, apelido, bi,  datanascimento, naturalidade, morada, email, telefone, fecha, sexo )
              Values('$nome', '$apelido', '$bi', '$datanascimento', '$naturalidade', '$morada', '$email', '$telefone', '$fecha','$sexo')";
              $resultado= mysqli_query($conex, $consulta);
              header('Location: index.php');
              if($resultado){
                ?>
                <h3 class = "sucess"> colaborador cadastrado</h3>
            <?php
            } else{
                ?>
                <h3 class = "error"> falha ao colaborador cadastrado</h3>
            <?php
            }
        

            }else{
                ?>
                <h3 class = "error"> Preencha todos campos</h3>

            <?php


              }
    }




?>
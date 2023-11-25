<?php
include_once('conexao.php');

if(isset($_POST['update']))
{
        $id=$_POST['Id'];
        $nome= $_POST['Nome'];
        $apelido=  $_POST['Apelido'];
        $bi=  $_POST['Bi'];
        $datanascimento=  $_POST['Datanascimento'];
        $naturalidade=  $_POST['Naturalidade'];
        $morada=  $_POST['Morada'];
        $email=  $_POST['Email'];
        $telefone=  $_POST['Telefone'];
        $sexo=  $_POST['Sexo'];

        $sqlUpdate = "update dados set nome ='$nome', apelido='$apelido', bi='$bi', datanascimento='$datanascimento', naturalidade='$naturalidade', morada='$morada', email='$email', telefone='$telefone', sexo='$sexo' where id='$id' ";

$result= $conex->query($sqlUpdate);
}
header('Location: home.php')

?>
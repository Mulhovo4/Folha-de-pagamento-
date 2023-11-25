<?php

if(!empty($_GET['id']))
{

include("conexao.php");

$id=$_GET['id'];

$sqlSelect="select * from dados where id=$id";

$result=$conex->query($sqlSelect);

if($result->num_rows > 0)
{
    while($user_data = mysqli_fetch_assoc($result))
    {
        $id=$user_data['id'];
        $nome= $user_data['nome'];
        $apelido= $user_data['apelido'];
        $bi= $user_data['bi'];
        $datanascimento= $user_data['datanascimento'];
        $naturalidade= $user_data['naturalidade'];
        $morada= $user_data['morada'];
        $email= $user_data['email'];
        $telefone= $user_data['telefone'];
        $sexo= $user_data['sexo'];
      }
//print_r($nome);
} else{
    header('Location: home.php');
}

        
         
         }


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel= "stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
            crossorigin="anonymous"
        >
    <title>Actualizar dados</title>
    <style>
    
      
    </style>
</head>

<body  align-content="center" >

  <header>
       

        <nav id="barraPrincipal">
          
            <a href="home.php"> Voltar</a>
            <a href="#"> Gerir colaboradores </a>
            <a href="registrar.php">Registrar</a>
            <a href="#">Gerir Pagamentos</a>

 

        </nav>

    </header>
   

<div class="input-wrapper">
   <form action ="salvarmodif.php" method="post"> 
<h2>Registro de colaborador</h2>

<div class="input-wrapper">
<input type="text" name="Nome"  value="<?php echo $nome ?>">
</div>
<div class="input-wrapper">
<input type="text" name="Apelido" value="<?php echo $apelido ?>">
</div>

<div class="input-wrapper">
<input type="text" name="Bi" value="<?php echo $bi ?>">
</div>

<div class="input-wrapper">
<input type="date" name="Datanascimento" value="<?php echo $datanascimento ?>">
</div>

<div class="input-wrapper">
<input type="text" name="Naturalidade" value="<?php echo $naturalidade ?>">
</div>

<div class="input-wrapper">
<input type="text" name="Morada" value="<?php echo $morada ?>">
</div>

<div class="input-wrapper">
<input type="text" name="Email" value="<?php echo $email ?>">
</div>

<div class="input-wrapper">
<input type="tel" name="Telefone" value="<?php echo $telefone ?>">
</div>

<div class="input-wrapper">
<input class="input-radio" type="radio" name="Sexo" value= "Masculino"  <?php echo($sexo == 'Masculino') ? 'checked' : '' ?> required>Homem
<input class="input-radio" type="radio" name="Sexo" value= "Feminino" <?php echo($sexo == 'Feminino') ? 'checked' : '' ?> required>Mulher
</div>

<input class="btn" type="submit" name="update" value="Enviar">
<input type= "hidden" name="Id" value=" <?php echo $id ?>">
</form>
</div>



   


<footer class="border-top text-muted ">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 text-center">
                        &copy;2023 Engenharia de Software.
                        <br>
                        Moçambique, Tete
                       <br>
                       Desenvolvido por
                       <br>
                       Cleyton Mulhovo 
                    </div>
                    <div class="ol-12 col-md-4 text-center">
                        <a href="#.html" class="text-decoration-none text-dark"> Politica de privacidade</a>
                        <br>
                        <a href="#.html" class="text-decoration-none text-dark">Localização</a>
                        <br>
                        <a href="#.html" class="text-decoration-none text-dark">Mais Funcionalidades</a>
                        <br>
                        <a href="#.html" class="text-decoration-none text-dark">Sugestões e Comentários</a>
                    </div>
                    <div class="ol-12 col-md-4 text-center">
                        <a href="/contacto.html" class="text-decoration-none text-dark">Contacto pelo site</a>
                        <br>
                        <a href="/mailto:email@dominio.com" class="text-decoration-none text-dark">Email@dominio.com</a>
                        <br>
                        Telefone:
                        <a href="phone:2993930020202" class="text-decoration-none text-dark"> (+258) 84 386 1102</a>
                    </div>
                </div>
            </div>

           
        </footer>
       
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
 
</body>
</html>
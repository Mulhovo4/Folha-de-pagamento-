<?php
session_start();
include_once('conexao.php');
//print_r($_SESSION);
if((!isset($_SESSION['usuario'])== true) and (!isset($_SESSION['senha']) == true)){

    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
    header('Location: login.php');
}

$logado = $_SESSION['usuario'];
 $sql= "select * from dados order by id asc";
 $result = $conex->query($sql);
 //print_r($result);

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
    <title>Menu principal</title>
    <style>
    body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
      
    </style>
</head>

<body >

  <header>
       
        <nav id="barraPrincipal">
          
            <a href="sair.php"> Sair da conta!</a>
            <a href="#"> Gerir colaboradores </a>
            <a href="registrar.php">Registrar</a>
            <a href="#">Gerir Pagamentos</a>

 

        </nav>

    </header>

   <h1>Folha de Pagamento</h1>
    
    <table>
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>BI</th>
            <th>Telefone</th>
            <th>Acções</th>
        </tr>
        
            <td>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                
                echo "<tr>";
                echo "<td>".$user_data['id']. "</td>";
                echo "<td>".$user_data['nome'].  $user_data['apelido']."</td>";
                echo "<td>".$user_data['bi']."</td>";
                echo "<td>".$user_data['telefone']."</td>";
                echo "<td>
                <a class='btn btn-primary' href='modificar.php?id=$user_data[id]'>
                
                </td>";
                echo "</tr>";
            }
            ?>
            </td>

    </table>



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
                        <a href="/privacidade.html" class="text-decoration-none text-dark"> Politica de privacidade</a>
                        <br>
                        <a href="/termos.html" class="text-decoration-none text-dark">Termos de Uso</a>
                        <br>
                        <a href="About.html" class="text-decoration-none text-dark">Quem Somos</a>
                        <br>
                        <a href="/trocas.html" class="text-decoration-none text-dark">Sugestões e Comentários</a>
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

<?php
session_start();

if(isset($_POST['submit']) && !empty($_POST['usuario']) && !empty($_POST['senha'])){

    include_once('conexao.php');
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];

      $sql= "select * from usuarios where usuario='$usuario' and senha='$senha'";
      $result = $conex->query($sql);
      print_r($sql);
      print_r($result);

if(mysqli_num_rows($result) < 1){
    unset($_SESSION['usuario']);
    unset($_SESSION['senha']);
     header('Location: index.php');
} else{

    $_SESSION['usuario'] =$usuario;
    $_SESSION['senha'] =$senha;
   header('Location: home.php');
}
        

 
}else{
   header('Location: index.php');
}

?>

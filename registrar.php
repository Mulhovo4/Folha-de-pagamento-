<!DOCTYPE html>
<html lang="pt-br">
<head>
<link rel= "stylesheet" href="estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar funcionários</title>
    <style></style>
</head>

<body class="registro">
<form method="post"> 
<h2>Registro de colaborador</h2>

<div class="input-wrapper">
<input type="text" name="Nome" placeholder="Primeiro nome">
</div>
<div class="input-wrapper">
<input type="text" name="Apelido" placeholder="Último nome">
</div>

<div class="input-wrapper">
<input type="text" name="Bi" placeholder="Bilhete de identificação">
</div>

<div class="input-wrapper">
<input type="date" name="Data">
</div>

<div class="input-wrapper">
<input type="text" name="Naturalidade" placeholder="Naturalidade">
</div>

<div class="input-wrapper">
<input type="text" name="Morada" placeholder="Morada">
</div>

<div class="input-wrapper">
<input type="text" name="Email" placeholder="Email" value="@gmail.com">
</div>

<div class="input-wrapper">
<input type="tel" name="Telefone" placeholder="telefone">
</div>

<div class="input-wrapper">
<input class="input-radio" type="radio" name="Sexo" value= "Masculino">Homem
<input class="input-radio" type="radio" name="Sexo" value= "Feminino">Mulher
</div>

<input class="btn" type="submit" name="salvar" value="Enviar">
</form>

<?php

include("registros.php");

?>
    
</body>
</html>
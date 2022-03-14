<?php

    include_once('config.php');

    $email = $_POST('email')

    $result = mysqli_query($conexao, "INSERT INTO cadastro(nome) VALUES('$email')");
?>
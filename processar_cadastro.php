<?php

    if(isset($_SESSION['usuario']) && isset($_SESSION['senha'])) {
        echo "<h1>Você já está logado!</h1>";
        header('location:restrita.php');
        exit;
    }

     if (form_nao_enviado()) {
        header('location:restrita.php?codigo=0');
        echo "oba oba";
        exit;
    }

    if (titulo_em_branco()) {
        header('location:restrita.php?codigo=2');
        exit;
    }

    $usuario = $_POST['usuario'];
    $livro_descricao = $_POST['senha']; // tarefa informada via form
    $email = $_SESSION['email'];


    


?>
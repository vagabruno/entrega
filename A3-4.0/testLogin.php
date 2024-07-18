<?php
    session_start();

    if(isset($_POST['submit']) && !empty($_POST['nomeSobrenome']) && !empty($_POST['senha']))
    {
        // Acessa
        include_once('config.php');
        $nomeSobrenome = $_POST['nomeSobrenome'];
        $senha = $_POST['senha'];


        $sql = "SELECT * FROM usuarios WHERE nomeSobrenome = '$nomeSobrenome' and senha = '$senha'";

        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['nomeSobrenome']);
            unset($_SESSION['senha']);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['nomeSobrenome'] = $nomeSobrenome;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {

        header('Location: login.php');
    }
?>
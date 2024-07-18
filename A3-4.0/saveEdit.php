<?php

    include_once('config.php');
    if(isset($_POST['update']))
    {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $nomeSobrenome = $_POST['nomeSobrenome'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $perfil = $_POST['tipo'];
        $data_nasc = $_POST['data_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $email = $_POST['email'];
        
        $sqlInsert = "UPDATE usuarios 
        SET nome='$nome',senha='$senha',nomeSobrenome='$nomeSobrenome',telefone='$telefone',perfil='$perfil',data_nasc='$data_nasc',cidade='$cidade',estado='$estado',email='$email'
        WHERE id=$id";
        $result = $conexao->query($sqlInsert);
        print_r($result);
    }
    header('Location: sistema.php');

?>
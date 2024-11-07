<?php    
/*     $dados = [$_POST['nomeCompleto'],$_POST['cpf'],$estado = $_POST['estado'],$estado = $_POST['email'],$estado = $_POST['senha']]; */
    $dados = [
        $_POST['nomeCompleto'],
        $_POST['cpf'],
        $_POST['estado'],
        $_POST['cidade'],
        $_POST['bairro'],
        $_POST['email'],
        $_POST['senha']
    ];

    die(json_encode($dados, JSON_UNESCAPED_UNICODE));
?>
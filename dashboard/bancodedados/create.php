<?php
session_start();
error_reporting(1);
include_once 'conexao.php';

$nome     = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email    = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_NUMBER_INT);
$plano     = filter_input(INPUT_POST, 'plano', FILTER_SANITIZE_SPECIAL_CHARS);
$personal     = filter_input(INPUT_POST, 'personal', FILTER_SANITIZE_SPECIAL_CHARS);
$ENDERECO     = filter_input(INPUT_POST, 'ENDERECO', FILTER_SANITIZE_SPECIAL_CHARS);
$password=$_POST['password'];
$querySelect = $link->query("select email from tb_clientes");
$array_emails = [];

while($emails = $querySelect->fetch_assoc()): 
    $emails_existentes = $emails['email'];
    array_push($array_emails,$emails_existentes);
    endwhile;

    if(in_array($email, $array_emails)):
        $_SESSION['msg'] = "<p class='center red-text'>".'<b>Já existe um cliente cadastrado com esse email</b>'."</p>";
        header("Location:../");
    else:
        $queryInsert = $link->query("insert into tb_clientes values(default,'$nome','$email',password($password),'$telefone','$plano','$personal','$ENDERECO')");
        $affected_rows = mysqli_affected_rows ($link);

        if ($affected_rows > 0):
            $_SESSION ['msg'] = "<p class='center green-text'>".'<b>Cadastro efetuado com sucesso.</b>'."</p>";
            header ("Location:../");
        endif;
    endif;
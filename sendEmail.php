<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';
   
$mail = new PHPMailer(true);

try {
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Username = 'seu nome'; //pegar no https://mailtrap.io/ || instalar composer phpmailer
    $mail->Password = 'sua senha'; //pegar no https://mailtrap.io/
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;
    $mail->CharSet = 'UTF-8';
    //DE
    $mail->setFrom('pedro@gmail.com', 'Test');
    //PARA
    $mail->addAddress('pedro@gmail.com','Pedro');
    //CONTEUDO
    $mail->isHTML(true);
    $mail->Subject = 'Contato do Site.';
    
    //isset variaveis
    if(isset($_POST['data-chegada'],$_POST['data-saida'], $_POST['nome'],$_POST['sobrenome'],
    $_POST['email'],$_POST['fone'],$_POST['adultos'],$_POST['criancas'],$_POST['preferencia'])){
        $data_chegada = strtoupper($_POST['data-chegada']);
        $data_saida = strtolower($_POST['data-saida']);
        $nome = strtoupper($_POST['nome']);
        $sobrenome = strtoupper($_POST['sobrenome']);
        $email = strtoupper($_POST['email']);
        $fone = strtoupper($_POST['fone']);
        $adultos = strtoupper($_POST['adultos']);
        $criancas = strtoupper($_POST['criancas']);
        $preferencia = strtoupper($_POST['preferencia']);
    //form html
    $corpo .= "<b>DATA-CHEGADA: </b> {$_POST['data-chegada']} <br />";
    $corpo .= "<b>DATA-SAIDA: </b> {$_POST['data-saida']} <br />";
    $corpo .= "<b>NOME: </b> {$_POST['nome']} <br />";
    $corpo .= "<b>SOBRENOME: </b> {$_POST['sobrenome']} <br />";
    $corpo .= "<b>EMAIL: </b> {$_POST['email']} <br />";
    $corpo .= "<b>FONE: </b> {$_POST['fone']} <br />";
    $corpo .= "<b>ADULTOS: </b> {$_POST['adultos']} <br />";
    $corpo .= "<b>CRIANCAS: </b> {$_POST['criancas']} <br />";
    $corpo .= "<b>PREFERENCIA: </b> {$_POST['preferencia']} <br />";

    $mail->Body = $corpo;

    $mail->send();
    
        header("Location: http://127.0.0.1/form-reservation-phpmailer/");
        die();
    }else{
        header("Location: http://127.0.0.1/form-reservation-phpmailer/");
        die();
    }
}catch(Exception $e) {
    echo "A mensagem não pode ser enviada. Erro: {$error->ErrorInfo}";
}
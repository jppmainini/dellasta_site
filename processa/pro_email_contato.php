<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../Lib/Email/src/Exception.php';
require '../Lib/Email/src/PHPMailer.php';
require '../Lib/Email/src/SMTP.php';

$nome   =$_POST['nome'];
$email  =$_POST['email'];
$telefone =$_POST['telefone'];
$msg      =$_POST['mensagem'];

$corpo = 'Nome: '.$nome.'<br> Email: '.$email.'<br>Telefone: '.$telefone.'<br>Mensagem: '.$msg;

//echo $corpo;



$mail = new PHPMailer();                              // Passing `true` enables exceptions
try {
    //Server settings
    $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.dellasta.com.br';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'jeferson@dellasta.com.br';                 // SMTP username
    $mail->Password = 'dell_03206';                           // SMTP password
    $mail->SMTPSecure = 'tls ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom($email, 'Mensagem de Contato do Site');
    $mail->addAddress('jeferson@dellasta.com.br', 'Site');     // Add a recipient
    //$mail->addAddress('jeferson@dellasta.com.br');               // Name is optional
    //$mail->addReplyTo('jeferson@dellasta.com.br', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');



    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Mensagem de Contato';
    $mail->Body    = $corpo;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    //echo "Sucesso";
    header("Location: ../index.php#contatos");
} catch (Exception $e) {
    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}


/*
$para = "jeferson@dellasta.com.br";
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=UTF-8\r\n";
$headers .= "From: dellasta@dellasta.com.br\r\n"; // remetente
$headers .= "Return-Path: dellasta@dellasta.com.br\r\n"; // return-path
$envio = mail("jeferson@dellasta.com.br", "Assunto", "Texto", $headers);

if($envio)
    echo "Mensagem enviada com sucesso";
else
    echo "A mensagem não pode ser enviada";

*/
?>
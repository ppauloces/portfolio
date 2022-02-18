<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer();


$mail->IsSMTP();

$mail->CharSet = "UTF-8";
//$mail->SMTPDebug = 2;  // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true;  // authentication enabled
$mail->SMTPSecure = 'tls'; // secure transfer enabled REQUIRED for GMail
$mail->SMTPAutoTLS = false;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587;

$mail->Username = "ppauloces27@gmail.com";
$mail->Password = "Pbamaral1";
$mail->SetFrom('ppauloces27@gmail.com', 'PHP');

$mail->addAddress($_POST['email']);

$mail->Subject = $_POST['subject'];
$mail->isHTML(true);
$mail->msgHTML('
    <h1>' . $_POST['subject'] . '</h1><br>'.
    '<p>'. $_POST['message'] . '</p>'
);


$mail->AltBody = "Mensagem padrão do email";  

if(!$mail->send()){
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Eita 🤨',
        text: 'Alguma coisa deu errado, tenta de novo aí!',
        </script>";
}else {
    echo "<script>
    Swal.fire(
        'Email enviado!',
        'Recebi seu email aqui 😉',
        'success'
      )
      </script>";
}
?>
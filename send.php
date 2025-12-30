<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {

    if (file_exists(__DIR__ . '/config.local.php')) {
        require __DIR__ . '/config.local.php';
    } else {
        require __DIR__ . '/config.example.php';
    }

    $mail->isSMTP();
    $mail->Host       = $MAIL_CONFIG['host'] ?? 'smtp.gmail.com';
    $mail->SMTPAuth   = $MAIL_CONFIG['smtp_auth'] ?? true;
    $mail->Username   = $MAIL_CONFIG['username'] ?? 'your@email.com';
    $mail->Password   = $MAIL_CONFIG['password'] ?? 'your_password';
    $mail->SMTPSecure = $MAIL_CONFIG['smtp_secure'] ?? PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $MAIL_CONFIG['port'] ?? 587;
    $mail->CharSet    = $MAIL_CONFIG['charset'] ?? 'UTF-8';

    // remetente
    $mail->setFrom($MAIL_CONFIG['from_email'] ?? 'your@email.com', $MAIL_CONFIG['from_name'] ?? 'Formulário');

    // destinatário
    $mail->addAddress($MAIL_CONFIG['to_email'] ?? ($MAIL_CONFIG['from_email'] ?? 'your@email.com'));

    // pegar dados
    function safe($v){ return htmlspecialchars(trim($v), ENT_QUOTES,'UTF-8'); }

    $nome     = safe($_POST['nome'] ?? '');
    $telefone = safe($_POST['telefone'] ?? '');
    $email    = safe($_POST['email'] ?? '');
    $destino  = safe($_POST['destino'] ?? '');

    $mail->isHTML(true);
    $mail->Subject = "Teste de envio PHPMailer";
    $mail->Body = "
        Nome: $nome<br>
        Telefone: $telefone<br>
        Email: $email<br>
        Destino: $destino<br>
    ";

    $mail->send();

    // 🔥 REDIRECIONA COM ALERT & ABRE O GRUPO DO WHATSAPP
    $grupo = "https://chat.whatsapp.com/";

    echo "
        <script>
            alert('Seu cadastro foi enviado com sucesso! Clique em OK para acessar o grupo VIP.');
            window.location.href = '$grupo';
        </script>
    ";
    exit;

} catch (Exception $e) {
    echo "
        <script>
            alert('Ocorreu um erro ao enviar seu formulário. Tente novamente.');
            window.location.href = 'index.html';
        </script>
    ";
    exit;
}


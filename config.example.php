<?php
// Arquivo de exemplo para configuração do envio de e-mail.
// Copie este arquivo para `config.local.php` e preencha com suas credenciais reais.
// NÃO comite `config.local.php` no seu repositório.

$MAIL_CONFIG = [
    'host' => 'smtp.gmail.com',
    'smtp_auth' => true,
    'username' => 'seu-email@exemplo.com',
    'password' => 'sua_senha_aqui',
    'smtp_secure' => PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS,
    'port' => 587,
    'charset' => 'UTF-8',

    // remetente e destinatário padrão usados no envio
    'from_email' => 'seu-email@exemplo.com',
    'from_name' => 'Seu Nome ou Formulário',
    'to_email' => 'destino@exemplo.com',
];

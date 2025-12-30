# Projeto Passagens Relâmpago

Resumo
- Projeto front-end simples com formulário que envia e-mail via PHPMailer (arquivo principal `send.php`).

Arquivos importantes
- `index.html` — formulário e front-end.
- `send.php` — lógica de envio de e-mail (agora carrega configurações externas).
- `config.example.php` — arquivo de exemplo com placeholders para credenciais.
- `config.local.php` — arquivo local com credenciais reais (NÃO comitar).
- `.gitignore` — já inclui `config.local.php`.

Requisitos
- PHP (recomendado 7.2+)
- Extensão OpenSSL habilitada (para TLS/STARTTLS)

Configuração (passo a passo)
1. Copie o arquivo de exemplo para criar a configuração local:

```powershell
Copy-Item .\config.example.php .\config.local.php
```

2. Abra `config.local.php` e preencha as credenciais reais (usuário, senha e e-mails).

Uso
1. Levante um servidor PHP local (apenas para testes):

```powershell
php -S localhost:8000 -t .
```

2. Abra `http://localhost:8000/index.html` no navegador e teste o formulário.




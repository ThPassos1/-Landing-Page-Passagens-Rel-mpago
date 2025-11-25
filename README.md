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

2. Abra `config.local.php` e preencha as credenciais reais (usuário, senha e e-mails). Este arquivo NÃO deve ser comitado.

Uso
1. Levante um servidor PHP local (apenas para testes):

```powershell
php -S localhost:8000 -t .
```

2. Abra `http://localhost:8000/index.html` no navegador e teste o formulário.

Segurança e boas práticas antes de publicar no GitHub
- Nunca comite `config.local.php` ou qualquer arquivo com credenciais. `config.local.php` já está listado em `.gitignore`.
- Substitua credenciais por variáveis de ambiente em projetos maiores ou use um gerenciador de segredos.
- Revise o repositório por qualquer string longa que pareça uma chave/tokens antes de publicar.

Sugestão de fluxo para publicar (exemplo de comandos Git)
```powershell
# criar branch para limpeza
git checkout -b chore/remove-secrets
# adicionar mudanças (incluindo README.md, config.example.php, .gitignore, send.php)
git add .
git commit -m "chore: remove credentials and add config.example + README"
# se tiver um remote configurado
git push -u origin chore/remove-secrets
```

Observações
- Eu já removi as credenciais literais de `send.php` e adicionei `config.example.php` e `.gitignore`.
- Se quiser, posso também: criar um branch e commitar as alterações localmente, rodar uma verificação adicional por padrões de possíveis segredos, ou migrar a configuração para uso de variáveis de ambiente.

Contato / Próximos passos
- Diga qual ação prefere: eu commito/crio o branch, faço varredura adicional, ou apenas deixo os arquivos prontos para você subir.

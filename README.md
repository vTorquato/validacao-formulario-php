# Validação de Formulário PHP

Este é um projeto simples de um sistema de captura de dados via formulário HTML, processado por um script PHP. 

## 🚀 Funcionalidades

- **Validação de Campos:** Verifica se os campos estão vazios ou contêm apenas espaços (`trim`).
- **Filtro de E-mail:** Utiliza `filter_var` com `FILTER_VALIDATE_EMAIL` para garantir que o e-mail seja real.
- **Segurança contra XSS:** Implementação de `htmlspecialchars` para evitar a execução de scripts maliciosos nos campos de texto.
- **Interface Amigável:** Uso de atributos HTML5 como `required` e `type="email"`.

## 🛠️ Tecnologias Utilizadas

- **HTML5**: Estrutura do formulário.
- **PHP 8.x**: Lógica de backend e validação.
- **XAMPP**: Ambiente de servidor local para testes.

## 📂 Estrutura do Projeto

- `index.html`: Página principal com o formulário de entrada.
- `backend.php`: Script responsável por processar, validar e exibir os resultados.

## 🏁 Como rodar o projeto

1. Tenha um servidor local instalado (Ex: XAMPP, Laragon ou Wamp).
2. Clone ou baixe este repositório para a pasta `htdocs` do seu servidor.
3. Certifique-se de que o módulo **Apache** está ativo no painel de controle do seu servidor.
4. Acesse no seu navegador: `http://localhost/nome-da-sua-pasta/index.html`.

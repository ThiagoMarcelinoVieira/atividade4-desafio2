# Cadastro de Produtos - SENAI 118

Este projeto é uma aplicação web desenvolvida para a atividade **Desafio 2** do curso de **Desenvolvimento de Sistemas** da escola **SENAI 118**. Trata-se de um formulário de cadastro de produtos integrado a um banco de dados MySQL utilizando PHP e JavaScript para manipulação da interface.

---

## 🚀 Funcionalidades

- **Formulário de Cadastro:** Interface em HTML para digitação do nome e preço do produto.
- **Validação de Dados:**
  - Verificação para garantir que o campo **Nome do Produto** não esteja vazio.
  - Verificação para garantir que o **Preço** seja um valor numérico positivo.
- **Persistência de Dados:** Conexão nativa via MySQLi para inserção dos dados na tabela `produtos`.
- **Feedback ao Usuário:** Mensagens dinâmicas de sucesso ou erro que somem automaticamente após 5 segundos via JavaScript (`setTimeout`).

---

## 🛠️ Tecnologias Utilizadas

- **HTML5:** Estrutura do formulário e marcação da página.
- **PHP:** Processamento backend, validações e comunicação com o banco de dados.
- **MySQL:** Banco de dados relacional para armazenamento das informações.
- **JavaScript:** Ocultação temporizada das mensagens de feedback.

---

## 🗄️ Estrutura do Banco de Dados

Para rodar este projeto, é necessário possuir o MySQL configurado com o banco de dados `exercicio` e a tabela `produtos`.

```sql
CREATE DATABASE exercicio;

USE exercicio;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL
);
```

---

## ⚙️ Configuração e Execução

### Pré-requisitos
- Servidor web local (ex: **XAMPP**, **WAMP**, ou **Laragon**).
- Serviço do **MySQL** ativo.

### Passo a Passo

1. **Clonar/Copiar o Projeto:**
   - Adicione o arquivo `.php` da atividade dentro do diretório raiz do seu servidor web (ex: `htdocs` no XAMPP).

2. **Configurar o Banco de Dados:**
   - Execute o script SQL fornecido acima no seu gerenciador de banco de dados (phpMyAdmin, MySQL Workbench, etc.).
   - Certifique-se de que as credenciais do PHP correspondem às suas configurações locais:
     - **Host:** `localhost`
     - **Usuário:** `root`
     - **Senha:** `Senai@118`
     - **Banco:** `exercicio`

3. **Acessar a Aplicação:**
   - Abra o navegador e acesse: `http://localhost/nome-do-seu-arquivo.php`

---

## 📝 Licença e Autoria

Projeto desenvolvido para fins didáticos no curso de **Técnico em Desenvolvimento de Sistemas - SENAI 118**.

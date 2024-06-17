# 🎯 Pomodoro Task Manager

![Tomato](https://img.icons8.com/color/48/000000/tomato.png)

Bem-vindo ao **Pomodoro Task Manager**! Este projeto visa ajudar os usuários a gerenciar suas tarefas utilizando a técnica Pomodoro para melhorar a produtividade.

## 📝 Sobre o Projeto

O **Pomodoro Task Manager** permite que os usuários se cadastrem, façam login, criem tarefas e as gerenciem utilizando a técnica Pomodoro. O sistema foi desenvolvido com tecnologias modernas e segue boas práticas de desenvolvimento.

## 🚀 Tecnologias Utilizadas

- 🐘 **PHP**
- 🐘 **PostgreSQL**
- 🌐 **HTML/CSS**
- 🌟 **JavaScript**

## 📂 Estrutura do Projeto

```plaintext
📦 ds122-projeto-final
├── 📂 assets
│   └── 🍅 tomate.png
├── 📂 css
│   └── 💅 main.css
├── 📂 js
│   └── 🔢 counter.js
│   └── 🕒 pomodoro.js
├── 📄 cadastro.php
├── 📄 executar_cadastro.php
├── 📄 executar_login.php
├── 📄 index.php
├── 📄 insert_task.php
├── 📄 login.php
├── 📄 pomodoro.php
└── 📄 stop.php
```

## ✨ Funcionalidades

- 👥 **Cadastro de Usuário:** Os usuários podem se cadastrar fornecendo nome de usuário e senha.
- 🔑 **Login de Usuário:** Os usuários podem fazer login com suas credenciais.
- 📝 **Cadastro de Tarefas:** Usuários logados podem cadastrar novas tarefas.
- 📋 **Exibição de Tarefas:** As tarefas são exibidas para o usuário logado, mostrando o status e permitindo a execução ou parada da tarefa.
- ⏲️ **Timer Pomodoro:** Os usuários podem iniciar, pausar e parar um timer Pomodoro para gerenciar suas tarefas.

## 🛠️ Configuração do Ambiente

### Pré-requisitos

- XAMPP ou qualquer servidor local com suporte a PHP e PostgreSQL
- Extensão `pgsql` habilitada no PHP

### Passos para Configuração

1. **Clone o repositório:**

```sh
git clone https://github.com/seu-usuario/ds122-projeto-final.git
cd ds122-projeto-final
```

2. **Configuração do Banco de Dados:**

   - Crie o banco de dados PostgreSQL e execute os scripts SQL fornecidos:

```sql
CREATE TABLE aula_users (
    "user" TEXT PRIMARY KEY,
    pass TEXT NOT NULL
);

CREATE TABLE aula_tasks (
    "user" TEXT REFERENCES aula_users("user"),
    tid TEXT PRIMARY KEY,
    name TEXT,
    status INTEGER DEFAULT 0,
    start_time TIMESTAMP DEFAULT now()
);
```

3. **Configuração do PHP:**

   - Habilite a extensão `pgsql` no `php.ini`:

```ini
extension=pgsql
```

4. **Inicie o servidor:**

   - Abra o painel de controle do XAMPP e inicie o Apache e o PostgreSQL.

5. **Acesse a aplicação:**

   - Abra o navegador e acesse `http://localhost/ds122-projeto-final`

## 📸 Capturas de Tela

### Página de Cadastro
![Página de Cadastro](assets/cadastro.png)

### Página de Login
![Página de Login](assets/login.png)

### Página de Tarefas
![Página de Tarefas](assets/tarefas.png)

## 👨‍💻 Contribuindo

1. Faça um fork do projeto.
2. Crie uma nova branch: `git checkout -b feature/nome-da-sua-branch`.
3. Faça suas alterações e commit: `git commit -m 'Adicionar nova funcionalidade'`.
4. Envie para a branch original: `git push origin feature/nome-da-sua-branch`.
5. Crie um pull request.

## 📜 Licença

Este projeto está licenciado sob a Licença MIT. Veja o arquivo [LICENSE](LICENSE) para mais detalhes.

## 💬 Contato

- **Autor:** Seu Nome
- **Email:** seuemail@example.com
- **LinkedIn:** [Seu LinkedIn](https://www.linkedin.com/in/seu-usuario)

---

🎉 **Divirta-se codificando!** 🎉


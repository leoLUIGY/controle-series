<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
# 📺 CRUD de Séries com Laravel

Este projeto foi desenvolvido durante os cursos de **Laravel** da [Alura](https://www.alura.com.br), com foco na criação de um sistema de cadastro de séries utilizando **CRUD**, **SQLite** e **Migrations**.  

O objetivo principal foi aprender os fundamentos do **framework Laravel**, incluindo organização de rotas, controllers, models e o uso do **Eloquent ORM**.

---

## 🚀 Tecnologias utilizadas
- [Laravel](https://laravel.com/)  
- PHP  
- Composer  
- SQLite (banco de dados)  
- Blade (template engine do Laravel)  

---

## 📚 Funcionalidades
✅ Criar uma nova série  
✅ Listar todas as séries cadastradas  
✅ Editar informações de uma série existente  
✅ Excluir séries  
✅ Gerenciamento de banco com **Migrations**  

---

## 🛠️ Como executar o projeto

### Pré-requisitos
- PHP 8+  
- Composer  
- SQLite  

### Passo a passo
1. Clone o repositório:
   ```bash
   git clone https://github.com/seu-usuario/nome-do-repo.git
   cd nome-do-repo
Instale as dependências:

bash
Copiar código
composer install
Copie o arquivo .env.example para .env:

bash
Copiar código
cp .env.example .env
Configure o .env para usar SQLite:

env
Copiar código
DB_CONNECTION=sqlite
DB_DATABASE=./database/database.sqlite
Crie o arquivo vazio database.sqlite dentro da pasta database.

Rode as migrations:

bash
Copiar código
php artisan migrate
Inicie o servidor local:

bash
Copiar código
php artisan serve
Acesse no navegador:

arduino
Copiar código
http://localhost:8000

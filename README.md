<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
  </a>
</p>

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
   git clone https://github.com/leoLUIGY/controle-series.git
   cd controle-serie
   
2. Instale as dependências:
   ```
   composer install
   
3. Copie o arquivo .env.example para .env:
    ```
    cp .env.example .env

4. Configure o .env para usar SQLite:
    ```
    DB_CONNECTION=sqlite
    DB_DATABASE=./database/database.sqlite

5. Rode as migrations:
    ```
    php artisan migrate

6. Inicie o servidor:
    ```
    php artisan serve

# Esta aplicação foi criada para servir de base para novas aplicações utilizando os mesmos recursos

- **[Composer version 2.5.7 2023-05-24 15:00:39"](https://getcomposer.org)**
- **[Laravel 10](https://laravel.com)**
- **[git version 2.45.1.windows.1](https://github.com//)**
- **[Vite](https://vitejs.dev//)**
- **[Tailwind](https://tailwindcss.com/docs/installation/)**

## 01_CLGVT

    Por se tratar de uma série de aplicações a serem utilizadas como exemplo, o sistema de nomeação segue o seguinte critério:
        01  <=> Numero sequencial das Aplicações básicas
        _   <=> Separador
        C   <=> Composer
        L   <=> Laravel
        G   <=> Git
        V   <=> Vite
        T   <=> Tailwind

## Instalação

### Pré-Requisitos

        Composer ( Ferramenta de gerenciamento do php, é Pré-Requisito para o PHP.)
            Path do sistema deve conter '%APPDATA%'\Composer\Vendor\bin'

        PHP versão 7.3 ou superior. ( Deve estar acessivel atraves do comando php.)
        Extensões ativadas no php.ini
            OpenSSL PHP Extension
            PDO PHP Extension
            Mbstring PHP Extension
            Tokenizer PHP Extension
            XML PHP Extension
            Ctype PHP Extension
            JSON PHP Extension

### Versões instaladas 24/05/2023

        Composer version 2.5.2 2023-02-04 14:33:22

        PHP 8.2.1 (cli) (built: Jan  3 2023 23:31:58) (ZTS Visual C++ 2019 x64)
            Copyright (c) The PHP Group
            Zend Engine v4.2.1, Copyright (c) Zend Technologies

        Laravel Installer 4.5.0

### Criação de uma nova aplicação

    > C:\laragon\www
    > composer create-project --prefer-dist laravel/laravel:^10.* 01_CLGVT
    > cd 01_CLGVT
    > git init
    > git add .
    > git commit -m "First commit"
<span style="color:red;font-weight:400">Observação:</span>
    Para que você registre o que foi incluido e/ou alterado durante uma instalação, você pode gravar o resultado após 
    cada instalação utilizando o <span style="color:green;font-weight:400">git add .</span> e o <span style="color:green;font-weight:400">git commit -m "ComandoExecutdado"</span> 

    > npm install
    > git add .
    > git commit -m "npm install" 

### Instalação do Breeze (blade)

    Laravel Breeze é uma implementação mínima e simples de todos os recursos de autenticação do Laravel , incluindo login, registro, redefinição de senha, verificação de e-mail e confirmação de senha. 
    Além disso, o Breeze inclui uma página simples de “perfil” onde o usuário pode atualizar seu nome, endereço de e-mail e senha.
    > composer require laravel/breeze --dev
    > git add .
    > git commit -m "composer require laravel/breeze --dev" 
    > php artisan breeze:install
    Which Breeze stack would you like to install?
        Blade with Alpine ........................................................................................................ blade
        Livewire (Volt Class API) with Alpine ................................................................................. livewire
        Livewire (Volt Functional API) with Alpine ................................................................. livewire-functional
        React with Inertia ....................................................................................................... react
        Vue with Inertia ........................................................................................................... vue
        API only ................................................................................................................... api
    > blade
    Would you like dark mode support? (yes/no) [no]
    > yes
    Which testing framework do you prefer? [PHPUnit]
        PHPUnit ...................................................................................................................... 0
        Pest ......................................................................................................................... 1    
    > 0
    > git add .
    > git commit -m "php artisan breeze:install" 

### Instalação do Tailwind

        > npm install -D tailwindcss postcss autoprefixer
        > git add .
        > git commit -m "npm install -D tailwindcss postcss autoprefixer" 

        > npx tailwindcss init -p
        > git add .
        > git commit -m "npx tailwindcss init -p" 

### > code

#### Configurar idioma

    link
    > php artisan lang:publish
    > git add .
    > git commit -m "php artisan lang:publish" 
    > composer require lucascudo/laravel-pt-br-localization --dev
    > git add .
    > git commit -m "composer require lucascudo/laravel-pt-br-localization --dev" 
    > php artisan vendor:publish --tag=laravel-pt-br-localization
    > git add .
    > git commit -m "php artisan vendor:publish --tag=laravel-pt-br-localization" 
    
    Altere Linha 85 do arquivo config/app.php para:
    
        De >  'locale' => 'en',
        P/ > 'locale' => 'pt_BR'

    > git add .
    > git commit -m "Altere Linha 85 do arquivo config/app.php para: De >  'locale' => 'en' P/ > 'locale' => 'pt_BR'" 

#### Apontar banco de dados no arquivo .env ( De laravel P/ db_01 )

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=db_01
    DB_USERNAME=root
    DB_PASSWORD=

#### Criar tabelas padrão no banco de dados ( users, ...)

    - **    
    > php artisan migrate:fresh
    Descomentar database\seeders\DatabaseSeeder.php
        \App\Models\User::factory(10)->create();
    Popular tabela users
        > php artisan db:seed

### Ativação a aplicação Laravel

        Abra um terminal, se posicione no diretório da aplicação e ative um servidor http

            > CMD 
            > C:\laragon\www\01_CLGVT
            > php artisan serve

        Abra outro terminal e ative recursos do Vite

            > npm run dev

        Abra o browser de sua escolha
        
            > localhost:8000

### Publicar no GITHUB

    git remote add origin https://github.com/robertomrr/01_CLGVT.git
    git branch -M main
    git push -u origin main

### Clone

    Se optar por clonar a aplicação do repositório GitHud aplique a seguinte sequencia de comando:

        > cd C:\laragon\www
        > git clone https://github.com/robertomrr/01_CLGVT.git
        > cd 01_CLGVT
        > composer update
        > npm install
        > copy .env.example .env
        > php artisan key:generate

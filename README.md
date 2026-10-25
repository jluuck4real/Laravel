# Chirper

Aplicação acadêmica de publicações curtas construída com Laravel. O projeto reúne autenticação, persistência de mensagens e curtidas, com separação entre controllers, models, policies e views Blade.

**PHP · Laravel 12 · Blade · SQLite · Tailwind CSS 4 · Vite · Pest 3**

## Funcionalidades

- Cadastro, login e encerramento de sessão.
- Feed de publicações, com criação, edição e exclusão por usuários autenticados.
- Verificação de autoria por policy.
- Curtidas vinculadas ao usuário autenticado ou à sessão do visitante.
- Testes de funcionalidades de curtidas em `tests/Feature/ChirpLikeTest.php`.

## Instalação

Requer PHP 8.2 ou superior, Composer 2, Git e Node.js compatível com Vite 7 (20.19+ ou 22.12+). Ative a extensão PHP do banco escolhido.

```sh
git clone https://github.com/jluuck4real/Laravel.git
cd Laravel
composer install
php -r "file_exists('.env') || copy('.env.example', '.env');"
php artisan key:generate
npm ci
```

O exemplo de ambiente utiliza SQLite. Crie o arquivo local antes das migrations:

```sh
php -r "file_exists('database/database.sqlite') || touch('database/database.sqlite');"
```

Confirme `DB_CONNECTION=sqlite` no `.env`. Se definir `DB_DATABASE`, use o caminho absoluto do arquivo.

```sh
php artisan migrate
npm run build
```

## Execução

```sh
php artisan serve
```

Abra o endereço informado pelo Artisan (por padrão, http://127.0.0.1:8000). Para editar o frontend com atualização automática, execute `npm run dev` em outro terminal.

## Estrutura

```text
app/Http/Controllers/   Autenticação, publicações e curtidas
app/Models/             User, Chirp e ChirpLike
app/Policies/           Regras de autoria
database/               Migrations, factories e seeders
resources/views/        Feed, formulários e componentes Blade
routes/web.php          Rotas HTTP
tests/Feature/          Testes de funcionalidades
```

## Verificação

```sh
composer test
```

O comando acima executa os testes existentes; a presença dos testes não implica aprovação automática em todo ambiente.

## Demonstração e contexto

Não há URL pública de demonstração ou screenshots da interface confirmados no repositório. Execute localmente para explorar o projeto.

Desenvolvido por João Lucas Gomes Mendonça como parte dos estudos de desenvolvimento web. A base utiliza o framework Laravel; dependências mantêm suas respectivas licenças.

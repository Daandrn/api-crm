### api-crm

- [laravel - Routes](https://laravel.com/docs/routing).
- [laravel - Sanctum](https://laravel.com/docs/sanctum).
- [laravel - Eloquent](https://laravel.com/docs/eloquent).

- **[Laravel 11](https://laravel.com/docs/11.x)**

### Instruções

- Crie uma copia do arquivo .env.example com nome .env: cp .env.example .env
- Configure o .env conforme sua preferência

- Suba os cotainers docker com o comando: docker-compose up -d
- Acesse o bash do container da app com o comando: docker-compose exec app bash
- Realize a geração da APP_KEY com o comando: php artisan key:generate
- Dentro do container da app, rode as migrations com o comando: php artisan migrate

App: php 8.3 - fpm
Server: nginx 1.25.3
DataBase: postgresql 16.1
Cache: redis 7.2.3
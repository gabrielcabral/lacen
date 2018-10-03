# Laravel 5.6+ AdminLTE
> [Laravel 5.6+](https://laravel.com/docs/) and [AdminLTE 2.4+](https://github.com/almasaeed2010/AdminLTE)

## Incluído

- Frontend: Login, Registro
- Backend: Gerenciamento de usuários, função simples, perfil
- [Laravel Breadcrumbs] (https://github.com/davejamesmiller/laravel-breadcrumbs)
- [notificações flash fáceis] (https://github.com/laracasts/flash)
- Representando usuários:
    - Permitir que os administradores façam login como outros usuários
    - Para ativar esse recurso, você precisa adicionar ** IMPERSONATE = true ** ao arquivo .env e atualizar a [classe App / Http / Kernel] (https://github.com/rrpadilla/laravel-adminlte-boilerplate/blob /master/app/Http/Kernel.php#L40).
- Testes

## Como usar

## How to use

Clone: ​​__git clone https://github.com/rrpadilla/laravel-adminlte-boilerplate.git meu-novo-projeto__
- cd meu-novo-projeto
- Copie o arquivo __. Env.example__ para __. Env__ e edite as credenciais do banco de dados e o APP_URL
- Executar __composer install__
- Executar __composer dump-autoload__
- Run __php artisan key: generate__
- Executar __php artisan migrate --seed__
- Teste: execute __phpunit__
- Veja [UsersControllerTest] (https://github.com/rrpadilla/laravel-adminlte-boilerplate/blob/master/tests/Feature/Controllers/Admin/UsersControllerTest.php)
- Faça o login com:
    - Admin: __admin@admin.com__ - __secret__
    - Membro: __member@example.com__ - __secret__
- Siga a [DOCUMENTAÇÃO] (https://github.com/rrpadilla/laravel-adminlte-boilerplate/wiki/Adding-Resources) para ver como você pode adicionar mais recursos (CRUD) ao seu projeto.

## Compatibility Chart

| Laravel | PHP  | Breadcrumbs | AdminLTE  
|---------|------|-------------|----------|
| 5.6+    | 7.1+ | **5.x**     | 2.4+ 

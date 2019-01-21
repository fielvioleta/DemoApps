## DemoApps for ERNI

- Clone this repository.

## Installing Packages
- Run command.
```
composer install
```

## Database settings
- On the root directory, duplicate .env.example and name it as .env.
- Fill up the database settings on .env.
- Run migration.
```
php artisan migrate
```

## Application Key
- Generate application key.
```
php artisan key:generate 
```

## Running the server
- Run the server.
```
php artisan serve
```
## NOTE ( Optional )
- You can also configure your own virtual host to avoid running ```php artisan serve```.

## Accessing Admin
- Navigate to ```/admin/login``` and register a user.

## DemoApps for ERNI

- Clone this repository.
- On the root directory, duplicate .env.example and name it as .env.
- Fill up the database settings on .env.
- Generate application key.
```
php artisan key:generate 
```
- Run the server.
```
php artisan serve
```
## NOTE ( Optional )
- You can also configure your own virtual host to avoid running ```php artisan serve```.

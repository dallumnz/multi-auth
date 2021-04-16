## Laravel Multi-Auth

This project implements multiple authentication using middleware and a single table (users). It does not use Breeze or Jetstream, instead the standard laravel/ui and Bootstrap auth scaffolding is used. This project is meant as a base for authenticating CRUD applications.


## Installing

Clone the project
Run the database migrations
```
php artisan migrate
```
Run the CreateUsersSeeder
```
php artisan db:seed --class=CreateUsersSeeder
```


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

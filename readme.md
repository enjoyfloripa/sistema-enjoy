# Enjoy
REST API Server to provide data to front application.

# Requirements
1. PHP 7+
2. MySQL

# Running
1. `composer install`
2. `cp .env.example .env`
2. `set db configuration inside .env`
3. `php artisan key:generate`
4. `php artisan migrate install`
5. `php artisan migrate`
6. `php artisan serve`

# Get started
1. `http://localhost:8000/api/` >> Root api url

# Architecture
![estrutura back-end](https://user-images.githubusercontent.com/14304799/36560398-594e5d1e-17ef-11e8-8eeb-c8b13a9b6ff0.png)

## Controllers
Dumb controllers only receives requests and passes data to service.

## Services
Contains one or many repositories, it's purpose is to sanitize data
 and send it to the repositories.
 
## Repositories
The repositories are the direct connection to the models.
Clone the repository

   git clone https://github.com/segunemmanuel/develops_today.git

Switch to the repo folder

    cd develops_today

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Generate a new JWT authentication secret key

    php artisan jwt:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

 
    
## Docker

To install with [Docker](https://www.docker.com), run following commands:

```
git clone git@github.com:gothinkster/laravel-realworld-example-app.git
cd laravel-realworld-example-app
cp .env.example.docker .env
docker run -v $(pwd):/app composer install
cd ./docker
docker-compose up -d
docker-compose exec php php artisan key:generate
docker-compose exec php php artisan jwt:generate
docker-compose exec php php artisan migrate
docker-compose exec php php artisan db:seed
docker-compose exec php php artisan serve --host=0.0.0.0
```

The api can be accessed at [http://localhost:8000/api](http://localhost:8000/api).

## API Specification

## Features

```
1. News (Add/Update/Delete/Fetch)
2. Comments(Add/Update/Delete/Fetch)
3. Upvotes (Add)

```

Endpoints

```
* News
Fetch All=> /api/show/posts
Fecth by specified ID=> /api/show/posts/{post}
Delete=> /api/delete/posts/{post}
Update=> /api/update/posts/{post}
Add=>/api/store/posts

```
    
2. Article
  
```
Fetch All=> /api/show/comments
Fecth by specified ID=>/api/show/comments/{comment}
Delete=>/api/delete/comments/{comments}
Update=> /api/update/comments/{comment}
Add=>/api/store/comments
    
    
```
You can use Faker for generating random dummy data using the factories defined in this project.Just follow these steps

php artisan tinker
factory(App\ModelName::class,number_of_column)->create()
To test this API project you can use Postman application.For authorization purpose you need to add below headers

‘headers’ => [
    ‘Accept’ => ‘application/json’,
    ‘Authorization’ => ‘Bearer ‘.$accessToken,
]
Thanks

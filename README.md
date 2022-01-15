Clone the repository

   git clone https://github.com/segunemmanuel/develops_today.git

Switch to the repo folder

    cd develops_today

Install all the dependencies using composer

    composer install

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve
```
Configure your .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password

```
You can now access the server at http://localhost:8000

 
    


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


```
View live version here
https://shegz.dev/develops/public/
```

Thanks


Laravel Blog Rest API
This is a blog rest API project including blog features like category,article,author,comment, search , authentication using PHP Laravel framework & MySQL database.

How to use ?
Follow these steps to get this project live

git clone https://github.com/segunemmanuel/develops_today.git
cd laravel-blog-api
composer install

Configure your .env file
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_name
DB_USERNAME=db_username
DB_PASSWORD=db_password

Final steps
php artisan migrate
php artisan key:generate
http://localhost:8000

Features
1. News (Add/Update/Delete/Fetch)
2. Comments(Add/Update/Delete/Fetch)
3. Upvotes (Add)


Endpoints
* News
Fetch All=> /api/show/posts
Fecth by specified ID=> /api/show/posts/{post}
Delete=> /api/delete/posts/{post}
Update=> /api/update/posts/{post}
Add=>/api/store/posts

    
2. Article
  
Fetch All=> /api/show/comments
Fecth by specified ID=>/api/show/comments/{comment}
Delete=>/api/delete/comments/{comments}
Update=> /api/update/comments/{comment}
Add=>/api/store/comments
    
You can use Faker for generating random dummy data using the factories defined in this project.Just follow these steps

php artisan tinker
factory(App\ModelName::class,number_of_column)->create()
To test this API project you can use Postman application.For authorization purpose you need to add below headers

‘headers’ => [
    ‘Accept’ => ‘application/json’,
    ‘Authorization’ => ‘Bearer ‘.$accessToken,
]
Thanks

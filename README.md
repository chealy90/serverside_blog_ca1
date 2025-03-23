## CA2 - Laravel Blog

•	**Author: Christopher Healy**

## Requirements
•	PHP 7.3 or higher <br>
•	Node 12.13.0 or higher <br>

## Usage <br>
Setting up your development environment on your local machine: <br>
```
git clone https://github.com/chealy90/serverside_blog_ca1
cd serverside_blog_ca1
cp .env.example .env
composer install
php artisan key:generate
php artisan cache:clear && php artisan config:clear
php artisan serve
```

## Before starting <br>
Create a database <br>


```
mysql
create database laravelblog;
exit;
```

Setup your database credentials in the .env file <br>
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME=root
DB_PASSWORD=root
```

Migrate the tables
```
php artisan migrate
```

## Usage:
As a guest users can view any blog post.
The blog cards on the homepage will lead to the three most recent blogs, or else all blogs can be found by clicking on the "blogs" tab.

# Logging in
Users can log in by following the call to action on the home page, or by clicking the "log in" tab in the nav bar.
The site has 2 default users:
- email: johndoe@gmail.com, password: randomPassword
- email: janedoe@gmail.com, password: randomPassword

Alternatively, you can register as a new user on the "register" tab, where you will be logged in as soon as you create an account.

# Creating Blogs:
Once logged in, the user will see a "Create New" option appear on the blog page, following this, users can create a new blog post.
Fill in the fields, and press "Create".

# Profile Section:
On the profile page, users can edit their profile information, including a profile picture, password changes, and edit or delete their blog posts.

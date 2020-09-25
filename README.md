## Project Setup

<p>After pulling the project on your local, cd into the folder and run the following commands:</p>

<strong>composer install</strong>

<p>Create a mysql database and properly connect the DB connection details inside .env file (there's .env.example file that you can rename to .env)</p>

<p>After that run these commands:</p>

<strong>php artisan migrate</strong>

<strong>php artisan db:seed</strong>

<strong>php artisan serve</strong>

<p>NOTE: the server must be kept running for the front end part of the test project to work. </p>

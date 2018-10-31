# cmpt470-project

# getting started

## install composer
1. install composer (https://getcomposer.org/)
2. Add composer bin folder to path 

## clone and update project
1. git clone (our repo url)
2. cd into project folder
3. run composer install or update (idk which yet)
4. google any errors you get lol

## create .env file
1. copy the .env.example file to a new file called .env (follow this to create a file without extension in windows: https://stackoverflow.com/questions/10744305/how-to-create-gitignore-file)
2. run php artisan key:generate

## start project
1. php artisan serve
2. go to localhost:8000 in browser

## automatically compiling the app.scss file 
1. open another terminal in the project repo
2. run 'npm run watch' 
3. every time you change something in the scss file, save it and refresh the page

## creating and connecting to database
1. Install mysql if you don't already have it (https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html or https://dev.mysql.com/doc/refman/8.0/en/windows-installation.html)
2. Start and connect to your mysql server
3. Create a database and call it whatever you want (e.g. yeetly)
4. Change the appropriate fields in the .env file to point to your local database (i.e. DB_DATABASE, DB_USERNAME, and DB_PASSWORD)
5. Create the database tables automatically by running `php artisan migrate`
(If you are using Windows, you may require to open the php.ini file and add "extension=php_pdo_mysql.dll" at the bottom of the page if it doesn't already exist)

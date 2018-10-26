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

## compiling sass files
1. Make sure you've already run 'npm install' in the project's root folder
2. execute 'npm run dev' to complile the sass files into a css file

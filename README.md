## Setup .Env File
First of all, you need to setup the .env file with copy and paste the ```.env.exmple``` file to ```.env``` file, then setup the database connection, for example like this:
```
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=ticmi-db
DB_USERNAME=juang
DB_PASSWORD=juang354
```

## Docker Environment Setup
This application running on docker environment, so after clone / download this project you need to build the docker file first

```
docker build .
```

then, you need to running the docker compose

```
docker-compose up
```

After that, you cann check the container is running with this
```
docker ps
```

## Another Preparation
Running 
```composer install```
Running 
```php artisan key:generate```
Running 
``` php artisan migrate ```

## MySQL dump file
In this project also have mysql dump file for tersting purpose, you can import it to your mysql database

## Images
<img width="1440" alt="Screen Shot 2023-08-10 at 22 00 12" src="https://github.com/juangsalaz/ticmi-dashboard/assets/7124362/cd30dfda-6352-4f44-842e-a584f4cdaf07">

<img width="1440" alt="Screen Shot 2023-08-10 at 22 00 52" src="https://github.com/juangsalaz/ticmi-dashboard/assets/7124362/2a6bd4ef-16a5-4ec9-aa50-729be09bf58c">

<img width="1440" alt="Screen Shot 2023-08-10 at 22 01 06" src="https://github.com/juangsalaz/ticmi-dashboard/assets/7124362/492fa915-415a-4ff3-8543-412402e51f87">

<img width="1440" alt="Screen Shot 2023-08-10 at 22 01 24" src="https://github.com/juangsalaz/ticmi-dashboard/assets/7124362/91a8645a-4fcb-488e-93c3-2b1fe8747310">

<img width="1440" alt="Screen Shot 2023-08-10 at 22 01 33" src="https://github.com/juangsalaz/ticmi-dashboard/assets/7124362/dc3e1f6e-fe6e-4e41-8eaa-42a896242806">

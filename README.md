

# Exlink project setup guide

## Prerequisite: 
- PHP 7.3 or above
- MYSQL 5.7 or above
- Apache server installed

## Setup the code base (copy code into directory)
- Copy the `exlink.zip` file into your `C:\xamp\www` or `C:\laragon\www\exlink` or any other server you have
- Now unzip the `exlink.zip` file to here in that way, all the code files will be unzipped in the `exlink` directory

### Create new database
You have to create a new database named as `exlink`, you also can create with any other name but keep in mind for the DB configurations.

### Verify database configuration
Open the .env file from the root directory of project and verify the MYSQL configurations. 
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=here your database name(exlink)
DB_USERNAME=here database username(root)
DB_PASSWORD=here database password(root)
```

### Generate Key
- Open the terminal and go to `exlink` directory and then run the following command to generate the project key
```bash
php artisan key:generate 
```

### Run migrations
- Open the terminal and go to `exlink` directory and then run the following command to run the migrations to create database tables
```bash
php artisan migrate
```

### Run project
- Open the browser and just hit the host name which you have created for `exlink`, for example I have created the following host in `C:\Windows\System32\drivers\etc` file
```bash
127.0.0.1      exlink.com           #laragon magic!   
```
which is point to my `exlink` directory in www folder so that I just need to hit the url in browser like `exlink.com`

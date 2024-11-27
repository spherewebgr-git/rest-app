## About Restaurant Management System

The restaurant management application created for .....

## How to install the project in your pc / server

### Step 1 - Install the components that laravel uses to operate

Ensure that you already have the above already installed in your system. 
If not download and install before go any further

- **[PHP (Xampp with PHP >= 8.2)](https://www.apachefriends.org/download.html)**
- **[Composer](https://getcomposer.org/Composer-Setup.exe)**
- **[Node.js](https://nodejs.org/dist/v22.11.0/node-v22.11.0-x64.msi)**

### Step 2 - Run the Application
Run the terminal inside the application folder and run the above commands:
- <code>composer install</code>
- <code>npm install</code>
- <code>npm run build</code>


### Step 3 Configure Laravel installation

- Create a new file on the root folder with the file name **.env**
- Paste the following code and save it:
- <code>APP_NAME=RestaurantApplication\
APP_ENV=local\
APP_KEY=\
APP_DEBUG=true\
APP_TIMEZONE=UTC\
APP_URL=http://restaurant.io\
APP_LOCALE=en\
APP_FALLBACK_LOCALE=en\
APP_FAKER_LOCALE=en_US\
APP_MAINTENANCE_DRIVER=file\
APP_MAINTENANCE_STORE=database\
PHP_CLI_SERVER_WORKERS=4\
BCRYPT_ROUNDS=12\
LOG_CHANNEL=stack\
LOG_STACK=single\
LOG_DEPRECATIONS_CHANNEL=null\
LOG_LEVEL=debug\
DB_CONNECTION=mysql\
DB_HOST=127.0.0.1\
DB_PORT=3306\
DB_DATABASE=rest_app\
DB_USERNAME=root\
DB_PASSWORD=\
SESSION_DRIVER=database\
SESSION_LIFETIME=120\
SESSION_ENCRYPT=false\
SESSION_PATH=/\
SESSION_DOMAIN=null\
BROADCAST_CONNECTION=log\
FILESYSTEM_DISK=local\
QUEUE_CONNECTION=database\
CACHE_STORE=database\
CACHE_PREFIX=\
MEMCACHED_HOST=127.0.0.1\
REDIS_CLIENT=phpredis\
REDIS_HOST=127.0.0.1\
REDIS_PASSWORD=null\
REDIS_PORT=6379\
MAIL_MAILER=log\
MAIL_HOST=127.0.0.1\
MAIL_PORT=2525\
MAIL_USERNAME=null\
MAIL_PASSWORD=null\
MAIL_ENCRYPTION=null\
MAIL_FROM_ADDRESS="hello@example.com"\
MAIL_FROM_NAME="\${APP_NAME}"\
AWS_ACCESS_KEY_ID=\
AWS_SECRET_ACCESS_KEY=\
AWS_DEFAULT_REGION=us-east-1\
AWS_BUCKET=\
AWS_USE_PATH_STYLE_ENDPOINT=false\
VITE_APP_NAME="\${APP_NAME}"\
</code>


### Step 4 - Create Encryption Key for the application

In order to create an encryption key for the application run the command <code>php artisan key:generate</code>

### Step 5 - Configure a domain for the application

1. Locate the file <code>C:/xampp/apache/conf/extra/httpd-vhosts.conf</code>
2. Paste this code to the end of the file <code><VirtualHost *:80>\
   DocumentRoot "C:/xampp/htdocs/rest-app/rest-app/public/"\
   ServerName restaurant.io\
   ServerAlias www.restaurant.io\
   ErrorLog "logs/restaurant-error.log"\
   CustomLog "logs/restaurant-access.log" common\
   \</VirtualHost></code>
3. Save it and locate the file <code>C:/Windows/System32/drivers/etc/hosts</code>
4. Open using Notepad or [Notepad++](https://notepad-plus-plus.org/downloads/v8.6.7/) with admin credentials
5. Add to the end of the file this <code>127.0.0.1    restaurant.io</code>
6. Save the file

### Step 6 - Run the Application

Run on the terminal inside root folder the command <code>php artisan serve</code>

# 🏋️ Symfony Messenger training 🏋️
![Alt text](resources/git/header.png?raw=true "Header")

### 📚 Required libraries
 * symfony [7.0.*]
 * symfony-messenger
 * amqp-messenger

### 🐳 Docker pods
* Nginx
* PHP 8.2
* MySQL 8.0
* RabbitMQ 3.12

### 🖥️ Commands
```
docker-compose up --build -d 
docker-compose exec php-fpm bash

composer install

bin/console messenger:setup-transports
bin/console messenger:consume async
bin/console app:messenger:send-async-msg
bin/console app:messenger:send-sync-msg
```
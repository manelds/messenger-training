# Symfony Messenger - Training 🏋️
![Alt text](resources/git/header.png?raw=true "Header")

### 📚Libraries
 * Symfony [7.0.*]
 * Symfony-messenger
 * Amqp-messenger
 * Doctrine/orm
 * Doctrine-messenger
 * Symfony/serializer

### 🐳 Docker containers
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
bin/console app:messenger:send-doctrine-msg
```

### 🎥 Videos
- RabbitMQ - Kafka
  - https://www.youtube.com/watch?v=IZh8wB9PSqo
  - https://www.youtube.com/watch?v=AM4hxuGmEBU
- Symfony Messenger
  - https://www.youtube.com/watch?v=M9gMqKxf8fc
  - https://www.youtube.com/watch?v=ZPqmzhPGvKw
  - https://www.youtube.com/watch?v=GgnItGKD3Mw
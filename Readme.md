# 1. Установка docker контейнеров
```
docker-compose up -d
```

#2 Установка зависимостей
Находим контейнер с запущенным php 
```
docker ps
```

И переходим в контейнер для установки покетов
```
docker exec -it <<<container_id>>> sh
```
и устанавливаем зависимости (по умолчанию путь /var/www/project)
```
composer install
```
# Run

### В режиме демона:
`docker-compose up --build -d`

### Обычный запуск с логами:
`docker-compose up --build`

### Вторая команда! 
`docker exec -it src_webapp_1 php /app/install.php`

> Если ругается на `src_webapp_1`, то изменить на имя контейнера (`docker-compose ps` в директории с проектом)

cp .env.example .env
docker-compose --env-file ./.env up -d
docker-compose exec app composer install
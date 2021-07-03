docker-compose up -d --build
docker exec -it santa_elves composer install
docker exec -it santa_elves yarn install
docker exec -it santa_elves yarn dev
docker exec -it santa_elves php bin/console d:d:c
docker exec -it santa_elves php bin/console d:m:m
docker exec -it santa_elves php bin/console doctrine:fixtures:load


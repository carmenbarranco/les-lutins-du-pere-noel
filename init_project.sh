docker-compose up -d --build
docker exec -it santa_elves composer install
docker exec -it santa_elves yarn install
docker exec -it santa_elves yarn dev

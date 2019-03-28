docker-compose down

docker container prune -f

docker image prune -a -f

docker volume prune -f

docker network prune -f

docker system prune -f

sudo rm -rf /var/lib/docker/volumes/*

docker-compose  build

docker-compose up -d

docker exec -it docker-phpfpm /bin/sh 

apk  update

apk  add mysql-client

mysql -hdocker-mariadb -uroot -p






# docker-lemp

Run Nginx, php-fpm and MariaDB using [Docker]

## Requirements
Install [Docker] and [Compose]

## Usage
```
docker-compose up -d
docker-compose logs
docker-compose stop
docker-compose rm
```

=====================

[Docker]:                      https://www.docker.io/
[Compose]:                     http://docs.docker.com/compose/install/



# Accessing Mysql cli

```
$ docker exec -it CONTAINER_db_1 bash
$ export TERM=dumb
$ mysql -u root -p
```

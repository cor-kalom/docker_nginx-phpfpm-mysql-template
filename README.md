# docker_nginx-phpfpm-mysql-template

## Usage:
* run `docker-compose up`
* **index.html** -> `http://127.0.0.1:8080/`
* **index.php** -> `http://127.0.0.1:8080/index.php`

## Connecting to database using stand-alone terminal:

1. run `docker ps`
```bash
CONTAINER ID | IMAGE
40e892c5cb66 | mysql
```
2. login to docker container `docker exec -it 40e892c5cb66 /bin/bash`
3. login to mysql `root@40e892c5cb66:/# mysql -uroot -p` using `MYSQL_ROOT_PASSWORD`
4. `mysql> `

FROM mariadb:latest

COPY testing.sql /docker-entrypoint-initdb.d/testing.sql

CMD ["mysqld"]

CMD ["sh", "-c", "/usr/local/bin/docker-entrypoint.sh --character-set-server=utf8mb4 --collation-server=utf8mb4_unicode_ci"]

EXPOSE 3306

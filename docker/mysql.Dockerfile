FROM mysql:8.4 as vb-mysql
ENV MYSQL_DATABASE=virt_books
COPY ./virt_books.sql /docker-entrypoint-initdb.d/

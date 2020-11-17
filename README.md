# Agenda básica con HTML, CSS, Javascript, PHP y sqlite3

Este proyecto muestra como programar las funciones basicas de un CRUD:

Create
Read
Update
Delete

Tiene una base de datos para SQLite3 con una tabla

Se puede ejecutar en un cotenedor de GitPod

https://www.gitpod.io/#https://github.com/salvadorhm/agenda_php

php -S 0.0.0.0:8000 -t .

sqlite3 agenda.db < agenda.sql

docker start -i php_server
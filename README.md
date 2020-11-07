php -S 0.0.0.0:8000 -t .

sqlite3 agenda.db < agenda.sql

docker start -i php_server
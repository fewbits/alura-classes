#!/bin/bash

apt update
apt install -y mysql-server-5.7

mysql -e "CREATE USER 'phpuser'@'%' IDENTIFIED BY 'pass';"
cp /config/mysqld.cnf /etc/mysql/mysql.conf.d/mysqld.cnf

systemctl enable mysql.service
systemctl restart mysql.service

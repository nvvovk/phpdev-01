#/bin/bash

#sudo apt update && sudo apt upgrade -y

sudo apt install -y gcc make perl git curl htop mc zsh vim

#echo "installing guest additions. Media must be mounted!"
#sudo sh /media/user/VBox_GAs_6.1.32/autorun.sh

echo "Installing web stack"
sudo apt install nginx mysql-server php-fpm php-intl php-mysql
sudo mysql -uroot -e "UPDATE mysql.user SET plugin = 'mysql_native_password', authentication_string = '' WHERE user = 'root';"
sudo service mysql restart

echo "Installing PMA"
echo "phpmyadmin phpmyadmin/app-password-confirm password $APP_PASS" | sudo debconf-set-selections
echo "phpmyadmin phpmyadmin/mysql/admin-pass password $ROOT_PASS" | sudo debconf-set-selections
echo "phpmyadmin phpmyadmin/mysql/app-pass password $APP_DB_PASS" | sudo debconf-set-selections
echo "phpmyadmin phpmyadmin/reconfigure-webserver multiselect" | sudo debconf-set-selections

sudo apt install -y phpmyadmin

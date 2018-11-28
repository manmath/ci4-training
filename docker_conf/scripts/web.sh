#!/bin/bash

LOGFILE=/tmp/docker-compose.txt

groupmod -g 99 dialout

# Make www-data user and group use id:s from hosts user to make shared folder writable.
#
# fetch current userid and groupid for user www-data
WWW_DATA_USER_ID=$(id -u www-data)
WWW_DATA_GROUP_ID=$(id -g www-data)
# if current userid doesn't equal the one from yaml, force id of user to the one from yaml
if [ "$WWW_DATA_USER_ID" -ne "${USER_ID}" ];then
    echo "/docker_conf/scripts/.sh : usermod -u ${USER_ID} www-data" >> $LOGFILE
    usermod -u ${USER_ID} www-data
fi
# if current groupid doesn't equal the one from yaml, force id of group to the one from yaml
if [ "$WWW_DATA_GROUP_ID" -ne "${GROUP_ID}" ];then
    echo "/docker_conf/scripts/web.sh : groupmod -g ${GROUP_ID} www-data" >> $LOGFILE
    groupmod -g ${GROUP_ID} www-data
fi

chown -R www-data. /var/www/html/writable

# start apache
exec apache2ctl -D FOREGROUND

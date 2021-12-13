FROM gitpod/workspace-full

RUN sudo apt-get update && \
    sudo apt-get install php-apcu php-imagick -y && \
    sudo apt-get remove composer -y && \
    sudo apt-get clean -y && \
    sudo curl -o /usr/bin/composer https://getcomposer.org/composer.phar && \
    sudo chmod +x /usr/bin/composer && \
    sudo composer selfupdate && \
    sudo rm -rf /root/.composer && \
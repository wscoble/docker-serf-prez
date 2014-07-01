# Nginx + Serf for PHPUG Shippable Containers presentation

# Use phusion's baseimage
FROM phusion/baseimage
ENV HOME /root
RUN /etc/my_init.d/00_regen_ssh_host_keys.sh
CMD ["/sbin/my_init"]

# Install my stuff
RUN apt-get update
RUN apt-get install -y nginx wget unzip php5-cli php5-curl curl
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin
RUN wget https://dl.bintray.com/mitchellh/serf/0.6.2_linux_amd64.zip
RUN unzip 0.6.2_linux_amd64.zip
RUN mv serf /usr/bin/serf

# RUN mkdir -p /etc/service/serf
# ADD serf.sh /etc/service/serf/run

# RUN mkdir -p /etc/service/nginx
# ADD nginx.sh /etc/service/nginx/run

ADD . /myapp
# RUN cd /myapp && composer.phar install

EXPOSE 80

RUN apt-get clean && rm -fr /var/lib/apt/lists/* /tmp/* /var/tmp/*
FROM prestashop/base:7.2-apache
LABEL maintainer="PrestaShop Core Team <coreteam@prestashop.com>"
ENV PS_VERSION 1.7.5.1

ADD https://www.prestashop.com/download/old/prestashop_1.7.5.1.zip /tmp/prestashop.zip

RUN mkdir -p /tmp/data-ps \
   && unzip -q /tmp/prestashop.zip -d /tmp/data-ps/ \
   && bash /tmp/ps-extractor.sh /tmp/data-ps \
   && rm /tmp/prestashop.zip

RUN apt-get clean && rm -rf /var/lib/apt/lists/*
RUN echo "oui"
RUN service apache2 start
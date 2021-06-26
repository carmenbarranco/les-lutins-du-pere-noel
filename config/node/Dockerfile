FROM node:alpine

WORKDIR /var/www/app

COPY yarn.lock package.json

RUN yarn install
RUN yarn encore dev


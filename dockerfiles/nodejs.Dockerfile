FROM node:21

WORKDIR /var/www/laravel

RUN npm install --save-dev laravel-echo pusher-js

EXPOSE ${PORT}

CMD npm run dev
FROM node:lts-slim

WORKDIR /code

COPY /team2reactapp/package.json /code

RUN npm install

COPY /team2reactapp/ /code

CMD [ "yarn", "start"]

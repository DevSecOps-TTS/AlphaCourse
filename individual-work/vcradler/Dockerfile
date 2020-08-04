FROM node:lts-slim

WORKDIR /code

COPY /vcradler-demo/package.json /code

RUN npm install

COPY  /vcradler-demo /code

CMD ["yarn", "start"]

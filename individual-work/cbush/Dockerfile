FROM node:lts-slim

WORKDIR /code

COPY cbush-react-demo/package.json /code

RUN npm install

COPY cbush-react-demo /code

CMD [ "yarn", "start"]

FROM node:lts-slim

WORKDIR /code

COPY rgrace-react-demo/package.json /code

RUN npm install

COPY rgrace-react-demo /code

CMD ["yarn", "start"]

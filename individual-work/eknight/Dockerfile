FROM node:lts-slim

WORKDIR /code

COPY eknight-react-demo/package.json /code

RUN npm install

COPY my-app /code

CMD [ "yarn", "start" ]

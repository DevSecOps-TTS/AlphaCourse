FROM node:lts-slim

WORKDIR /code

COPY bmoran-react-demo/package.json /code 

RUN npm install

COPY bmoran-react-demo /code

CMD [ "yarn", "start" ]

FROM node:lts-slim 

WORKDIR /code

COPY vcradler-react-demo/package.json /code

RUN npm install

COPY vcradler-react-demo /code

CMD ["npm", "start"]

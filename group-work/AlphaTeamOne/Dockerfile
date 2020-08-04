FROM node:lts-slim 

WORKDIR /code 

COPY /alphagroup1/package.json /code

RUN npm install

COPY /alphagroup1/ /code

CMD ["yarn", "start"]
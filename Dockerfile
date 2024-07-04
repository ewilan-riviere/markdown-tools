FROM node:20.15.0-alpine

RUN mkdir -p /usr/src/app
WORKDIR /usr/src/app

RUN apk update && apk upgrade
RUN apk add git

COPY . /usr/src/app/
RUN npm install -g pnpm
RUN pnpm install
RUN pnpm build

FROM nginx:alpine

COPY --from=0 /usr/src/app/dist /var/www/html

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]

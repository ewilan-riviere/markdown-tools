FROM node:20.15.0-alpine

RUN mkdir -p /app
WORKDIR /app

RUN apk update && apk upgrade
RUN apk add git

COPY . /app/
RUN npm install -g pnpm
RUN pnpm install
RUN pnpm build

FROM nginx:alpine3.20-slim

COPY --from=0 /app/dist /var/www/html
COPY ./docker/default.conf /etc/nginx/conf.d/default.conf

EXPOSE 80

CMD ["nginx", "-g", "daemon off;"]
